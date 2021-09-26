<?php

declare(strict_types=1);

namespace MallardDuck\BladeEmojiIcons\View\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Spatie\Emoji\Emoji as BaseEmoji;

final class Emoji extends Component implements Htmlable
{
    public string $name;
    public string $emojiName;
    public string $emoji;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->emojiName = (string) Str::of($name)->camel();
        $this->emoji = BaseEmoji::getCharacter($this->emojiName);
    }

    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render()
    {
        return view('emoji-icon::emoji', $this->data());
    }
}
