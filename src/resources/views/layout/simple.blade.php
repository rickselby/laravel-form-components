
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->input($type, $name, $value ?? null)
            ->placeholder($placeholder ?? null)
            ->class('form-control')
            ->class($class ?? [])
            ->invalidClass($errors, $name)
    }}
@endcomponent
