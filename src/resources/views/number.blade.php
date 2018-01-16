
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    {{ html()->input('number', $name)->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
@endcomponent
