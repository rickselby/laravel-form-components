
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->file($name)
            ->class(['form-control-file', 'is-invalid' => $errors->has(toDotNotation($name))])
    }}
@endcomponent
