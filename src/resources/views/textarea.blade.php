
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->textarea($name, $value ?? null)
            ->placeholder($placeholder ?? null)
            ->class('form-control')
            ->class($class ?? [])
            ->invalidClass($errors, $name)
            ->attributeIf($rows ?? null, 'rows', $rows ?? null)
            ->addData($data ?? null)
    }}
@endcomponent
