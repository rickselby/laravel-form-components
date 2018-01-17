
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->input('date', $name, $value ?? null)
            ->placeholder($placeholder ?? null)
            ->class(['form-control', 'is-invalid' => $errors->has($name)])
    }}
@endcomponent
