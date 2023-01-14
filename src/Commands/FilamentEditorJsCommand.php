<?php

namespace SidneySaints\FilamentEditorJs\Commands;

use Illuminate\Console\Command;

class FilamentEditorJsCommand extends Command
{
    public $signature = 'filament-editorjs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
