
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{ html()->select($name, $options, $value ?? null)->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
@endcomponent
