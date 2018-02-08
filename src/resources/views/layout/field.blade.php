
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="{{ $name }}">{{ $label }}</label>
    <div class="col-md-10 {{ $inputContainerClass ?? '' }}">

        {{ $slot }}

        @unless($skipInvalid ?? false)
            @include('fc::layout.invalid-feedback')
        @endunless

        @if($help ?? false)
            @include('fc::layout.help')
        @endif

    </div>
</div>
