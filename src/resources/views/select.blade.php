
@component('fc::field', ['label' => $label, 'name' => $name])
    {{ html()->select($name, $options)->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
@endcomponent
