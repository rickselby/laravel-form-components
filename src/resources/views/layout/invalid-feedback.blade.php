@if ($errors->has(toDotNotation($name)))
    <div class="invalid-feedback">
        @array2br($errors->get(toDotNotation($name)))
    </div>
@endif
