
@component('fc::field', ['label' => $label, 'name' => $name, 'skipInvalid' => true])
    {{ html()->text($name)->class(['form-control-plaintext'])->attribute('readonly', 'readonly') }}
@endcomponent
