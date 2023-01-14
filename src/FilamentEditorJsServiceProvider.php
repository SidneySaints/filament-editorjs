<?php

namespace SidneySaints\FilamentEditorJs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SidneySaints\FilamentEditorJs\Commands\FilamentEditorJsCommand;

class FilamentEditorJsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-editorjs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-editorjs_table')
            ->hasCommand(FilamentEditorJsCommand::class);
    }
}
