<?php

namespace SidneySaints\FilamentEditorJs;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use SidneySaints\FilamentEditorJs\Commands\FilamentEditorJsCommand;

class FilamentEditorJsServiceProvider extends PluginServiceProvider
{

    protected array $scripts = [
        'https://cdn.jsdelivr.net/combine/npm/@editorjs/paragraph@2.9.0,npm/@editorjs/header@2.7.0,npm/@editorjs/list@1.8.0,npm/@editorjs/image@2.8.1',
        'https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest',
         __DIR__ . '/../resources/js/filament-editor.js',

    ];

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
            ->hasCommand(FilamentEditorJsCommand::class);
    }
}
