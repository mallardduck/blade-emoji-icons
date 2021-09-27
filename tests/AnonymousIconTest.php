<?php

use Illuminate\View\View;

it('can get smiling face emoji element', function () {
    $smilingEmoji = \view('anon');
    expect($smilingEmoji)->toBeObject()->toBeInstanceOf(View::class);

    $results = <<<EOF
<span class="text-2xl">☺️</span>

EOF;
    expect($smilingEmoji->render())->toBe($results);
});
