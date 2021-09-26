<?php

namespace MallardDuck\BladeEmojiIcons\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use MallardDuck\BladeEmojiIcons\BladeEmojiIconsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    use InteractsWithViews;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeEmojiIconsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        // update default views paths
        $viewPaths = config('view.paths');
        $viewPaths[] = __DIR__ . '/stubs/views';
        $app['config']->set('view.paths', $viewPaths);
    }
}
