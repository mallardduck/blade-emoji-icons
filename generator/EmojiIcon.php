<?php

namespace MallardDuck\BladeEmojiIconsGenerator;

use Illuminate\Support\Str;

class EmojiIcon
{
    public string $bladeComponentName;
    public function __construct(
        public string $methodName,
    ) {
        $name = Str::of($this->methodName);
        $componentName = match (true) {
            $name->startsWith('flagsFor') => $name->after('flagsFor')->kebab(),
            default => $name->kebab(),
        };
        $this->bladeComponentName = (string) $componentName;
    }

    public static function make(string $methodName)
    {
        return new self($methodName);
    }
}
