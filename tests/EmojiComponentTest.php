<?php

use Illuminate\View\View;
use MallardDuck\BladeEmojiIcons\View\Components\Emoji;
use Spatie\Emoji\Emoji as SpatieEmoji;

$results = <<<EOF
<span >
    ☺️
</span>

EOF;

it('can get smiling face emoji element', function () use ($results) {
    $smilingEmoji = new Emoji('smiling-face');
    expect($smilingEmoji)->toBeObject()->toBeInstanceOf(Emoji::class)
        ->toHaveProperty('name', 'smiling-face')
        ->toHaveProperty('emojiName', 'smilingFace');
    expect($smilingEmoji->render())->toBeObject()->toBeInstanceOf(View::class);
    expect($smilingEmoji->toHtml())->toBe($results);
});

it('can pull the view up', function () use ($results) {
    $smilingEmoji = view('emoji-icon::emoji', [
        'attributes' => null,
        'emoji' => SpatieEmoji::smilingFace(),
    ]);
    expect($smilingEmoji)->toBeObject()->toBeInstanceOf(View::class);
    expect($smilingEmoji->render())->toBe($results);
});
