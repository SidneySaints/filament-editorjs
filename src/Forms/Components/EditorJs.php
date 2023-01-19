<?php

namespace SidneySaints\FilamentEditorJs\Forms\Components;

use Filament\Forms\Components\Field;
use SidneySaints\FilamentEditorJs\Enums\Mode;
use SidneySaints\FilamentEditorJs\FilamentEditorJs;


class EditorJs extends Field
{
    protected Mode $mode = Mode::PORTRAIT;

    protected $dimensions = FilamentEditorJs::DIN_A4;

    protected string $view = 'filament-editorjs::forms.components.editor-js';

    public function editorWrapperClasses(): string
    {
        return 'bg-white shadow-md py-24 px-10 rounded-md border';
    }

    public function dimensions(array $dimensions = FilamentEditorJs::DIN_A4)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    public function mode(Mode $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    public function getSize(): array
    {
        return match ($this->mode) {
            Mode::LANDSCAPE => array_reverse($this->dimensions),
            Mode::PORTRAIT => $this->dimensions,
            default => $this->dimensions
        };
    }

    public function getAspectRatio()
    {
        $width = $this->getSize()[0];
        $height = $this->getSize()[1];
        $divisor = gmp_intval(gmp_gcd($width, $height));
        return ($width / $divisor) / ($height / $divisor);
    }
}
