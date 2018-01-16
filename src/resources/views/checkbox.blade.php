
@component('fc::field', ['label' => $label, 'name' => $name, 'inputClass' => 'form-checkboxes'])
    <div class="form-check">
        {{ html()->checkbox($name)->class(['form-check-input']) }}
    </div>
@endcomponent
