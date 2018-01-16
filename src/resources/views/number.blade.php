
@component('fc::field', ['label' => $label, 'name' => $name])
    {{ html()->input('number', $name)->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
@endcomponent
