
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null, 'inputContainerClass' => 'form-checkboxes', 'skipInvalid' => true])
    <div class="form-check">
        {{
            html()
                ->checkbox($name, $checked ?? false, $value ?? null)
                ->class(['form-check-input', 'is-invalid' => $errors->has($name)])
        }}
        &nbsp;
    </div>
@endcomponent
