
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null, 'skipInvalid' => true])
    <div class="input-group">
        <div class="input-group-prepend">
            <label class="input-group-text" for="{{ $name }}">
                <span class="fa fa-calendar"></span>
            </label>
        </div>
        {{
            html()
                ->text($name, $value ?? null)
                ->placeholder($placeholder ?? null)
                ->class(['form-control', 'date-picker', 'is-invalid' => $errors->has($name)])
        }}
        {{-- Invalid feedback must be within the input-group --}}
        @include('fc::layout.invalid-feedback')
    </div>
@endcomponent
