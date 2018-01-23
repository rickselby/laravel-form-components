
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->textarea($name, $value ?? null)
            ->placeholder($placeholder ?? null)
            ->class(['form-control', 'is-invalid' => $errors->has($name)])
            ->attributeIf($rows ?? null, 'rows', $rows ?? null)
    }}
@endcomponent
