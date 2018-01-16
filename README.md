Laravel Form Components
=======================

Built around [Bootstrap 4](https://getbootstrap.com/docs/4.0/), 
  these are blade components for forms to speed up form creation.

...as long as you use horizontal forms, as I do. With my layout.
  I might consider some more customization in a later version,
  if it's not too difficult.

I'm using [spatie/laravel-html](https://github.com/spatie/laravel-html)
  for HTML assistance.

## Compatibility Chart

| Laravel Form Components | Laravel | PHP  |
|-------------------------|---------|------|
| **1.x**                 | 5.5     | 7.0+ |

## Installing

Require the project using [Composer](https://getcomposer.org):

```bash
$ composer require rickselby/laravel-form-components
```

Laravel 5.5 will auto-discover the package.

## Usage

Simple fields can be added using `@include`:

    @include('fc::checkbox', ['label' => 'Is active?', 'name' => 'active'])
    @include('fc::number', ['label' => 'Number of feet', 'name' => 'feet'])
    @include('fc::select', ['label' => 'Country', 'name' => 'country', 'options' => $options])
    @include('fc::static', ['label' => 'Something you cannot change', 'name' => 'static'])
    @include('fc::text', ['label' => 'Name', 'name' => 'name'])
    
[Help text](https://getbootstrap.com/docs/4.0/components/forms/#help-text)
  can be added by using `@component` instead of `@include`:

    @component('fc::text', ['label' => 'Name', 'name' => 'name'])
        @slot('help')
            This should be your name.
        @endslot
    @endcomponent
    
The submit button is included with `@component` as well:

    @component('fc::submit')
        Submit this form
    @endcomponent
    
Validation errors are shown automatically based on the field name, thanks to the `.invalid-feedback` class.

Custom fields can be added by extending the `fc::field` template. 
  Ensure the `$label` and `$name` attributes are passed through.
  As an example, this is how the `text` field is implemented:

    @component('fc::field', ['label' => $label, 'name' => $name])
        {{ html()->text($name)->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
    @endcomponent
    
There are more available settings in the `fc::field` template for more customisation.

## License

Laravel Form Components is licensed under [The MIT License (MIT)](LICENSE).
