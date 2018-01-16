
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null, 'inputClass' => 'form-checkboxes'])
    <div class="form-check">
        {{ html()->checkbox($name)->class(['form-check-input']) }}
    </div>
@endcomponent
