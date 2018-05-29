
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->select($name, $options, $value ?? null)
            ->placeholder($placeholder ?? null)
            ->class('form-control')
            ->class($class ?? [])
            ->invalidClass($errors, $name)
    }}
@endcomponent
