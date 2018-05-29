
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{
        html()
            ->file($name)
            ->class('form-control-file')
            ->class($class ?? [])
            ->invalidClass($errors, $name)
    }}
@endcomponent
