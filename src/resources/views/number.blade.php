
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->input('number', $name, $value ?? null)
            ->placeholder($placeholder ?? null)
            ->class('form-control')
            ->class($class ?? [])
            ->invalidClass($errors, $name)
            ->attributeIf($step ?? null, 'step', $step ?? null)
            ->attributeIf($min ?? null, 'min', $min ?? null)
            ->attributeIf($max ?? null, 'max', $max ?? null)
    }}
@endcomponent
