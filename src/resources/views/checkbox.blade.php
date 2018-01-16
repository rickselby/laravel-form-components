
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null, 'inputClass' => 'form-checkboxes'])
    <div class="form-check">
        {{ html()->checkbox($name, false, $value ?? null)->class(['form-check-input']) }}
    </div>
@endcomponent
