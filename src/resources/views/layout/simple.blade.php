
@component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
    @php
        $dotName = preg_replace('/\[(.+)\]/U', '.$1', $name)
    @endphp

    {{
        html()
            ->input($type, $name, $value ?? null)
            ->placeholder($placeholder ?? null)
            ->class(['form-control', 'is-invalid' => $errors->has($dotName)])
    }}
@endcomponent
