
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="{{ $name }}">{{ $label }}</label>
    <div class="col-md-10 {{ $inputClass ?? '' }}">

        {{ $slot }}

        @unless($skipInvalid ?? false)
            @include('fc::layout.invalid-feedback')
        @endunless

        @if($help ?? false)
            <small class="form-text text-muted">
                {{ $help }}
            </small>
        @endif

    </div>
</div>
