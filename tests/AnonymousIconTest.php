<?php

use Illuminate\View\View;
use MallardDuck\BladeEmojiIcons\View\Components\Emoji;
use Spatie\Emoji\Emoji as SpatieEmoji;

it('can get smiling face emoji element', function () {
    $smilingEmoji = \view('anon');
    expect($smilingEmoji)->toBeObject()->toBeInstanceOf(View::class);

    $results = <<<EOF
<span class="h-2 w-2">
    ☺️
</span>

EOF;
    expect($smilingEmoji->render())->toBe($results);
});
