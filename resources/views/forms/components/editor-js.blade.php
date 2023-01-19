<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>


    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}').defer }">
        <div wire:ignore class="bg-white" style="aspect-ratio: {{$getAspectRatio()}}">
            <div class="bg-white pl-14 pr-4 relative">
                <div id="editorJs" class="w-full"></div>
            </div>

        </div>
    </div>

    <div wire:ignore>
        @include('filament-editorjs::editor-js')
        @include('filament-editorjs::editor-css')
    </div>
</x-dynamic-component>
