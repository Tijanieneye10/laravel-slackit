<?php

namespace Tijaneneye10\LaravelSlackit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tijaneneye10\LaravelSlackit\Commands\LaravelSlackitCommand;

class LaravelSlackitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-slackit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-slackit_table')
            ->hasCommand(LaravelSlackitCommand::class);
    }
}
