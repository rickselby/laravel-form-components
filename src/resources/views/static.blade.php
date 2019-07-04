
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null, 'skipInvalid' => true])
    {{
        html()
            ->text($name, $value ?? null)
            ->class('form-control-plaintext')
            ->class($class ?? [])
            ->attribute('readonly', 'readonly')
            ->addData($data ?? null)
    }}
@endcomponent
