
@if ($errors->has($name))
    <div class="invalid-feedback">
        @array2br($errors->get($name))
    </div>
@endif
