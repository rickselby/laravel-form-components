
@component('fc::field', ['label' => $label, 'name' => $name])
    {{ html()->text($name)->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
@endcomponent
