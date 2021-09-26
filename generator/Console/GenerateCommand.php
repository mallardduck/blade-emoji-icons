<?php

namespace MallardDuck\BladeEmojiIconsGenerator\Console;

use MallardDuck\BladeEmojiIconsGenerator\EmojiIcon;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

use Spatie\Emoji\Emoji as SpatieEmoji;

class GenerateCommand
{
    private int $now;

    public function __invoke(InputInterface $input, OutputInterface $output) {
        $this->now = time();

        $allEmoji = $this->getAllEmoji();
        $output->writeln(sprintf("Generating #%s emoji into blade elements...", count($allEmoji)));

        foreach ($allEmoji as $emoji) {
            $output->writeln(sprintf("Generating blade for: %s", $emoji->methodName));
            $this->writeClass($emoji);
        }
        $output->writeln("Done");
    }

    private function getAllEmoji(): array
    {
        $classDocBlock = (new \ReflectionClass(SpatieEmoji::class))->getDocComment();
        $factory  = \phpDocumentor\Reflection\DocBlockFactory::createInstance();
        $parsedDocBlock = $factory->create($classDocBlock);

        return array_map(static fn($value) => EmojiIcon::make($value->getMethodName()), $parsedDocBlock->getTagsByName('method'));
    }

    protected function writeClass(EmojiIcon $emojiIcon)
    {
        $loader = new FilesystemLoader(__DIR__.'/../templates');
        $twig = new Environment($loader, [
            'cache' => false,
            'autoescape' => false,
        ]);
        $class = $twig->load('base-item.twig')->render([
            'name' => $emojiIcon->methodName,
        ]);
        file_put_contents(__DIR__ . '/../../build/tmp/' .date('Y_m_d-H_i_s', $this->now).'.php', $class);
        file_put_contents(__DIR__.'/../../resources/views/components/' . $emojiIcon->bladeComponentName .  '.blade.php', $class);
    }
}
