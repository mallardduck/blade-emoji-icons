<?php

use Illuminate\View\View;

it('can render icon within end user view', function () {
    $userView = \view('test');
    expect($userView)->toBeObject()->toBeInstanceOf(View::class);

    $results = <<<EOF
<header>Header</header>
<article>
    <h1>Yoo I'm the title</h1>
    <p>Words and stuff</p>
    <hr />
    <section>
        MetaData
        <span class="text-5xl">☺️</span>
    </section>
</article>
EOF;

    expect($userView->render())->toBe($results);
});
