@php
 $dotName = preg_replace('/\[(.+)\]/U', '.$1', $name)
@endphp

@if ($errors->has($dotName))
    <div class="invalid-feedback">
        @array2br($errors->get($dotName))
    </div>
@endif
