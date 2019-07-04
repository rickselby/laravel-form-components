
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null, 'inputContainerClass' => 'form-checkboxes', 'skipInvalid' => true])
    <div class="form-check">
        {{
            html()
                ->checkbox($name, $checked ?? false, $value ?? '1')
                ->class('form-check-input position-static')
                ->class($class ?? [])
                ->invalidClass($errors, $name)
                ->addData($data ?? null)
        }}
    </div>
@endcomponent
