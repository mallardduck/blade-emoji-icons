<?php

namespace MallardDuck\BladeEmojiIcons;

use MallardDuck\BladeEmojiIcons\View\Components\Emoji;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BladeEmojiIconsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-emoji-icon')
            ->hasViewComponents(
                'emoji-icon',
                Emoji::class,
            )
            ->hasViews();
    }
}
