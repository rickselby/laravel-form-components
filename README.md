Laravel Form Components
=======================

Built around [Bootstrap 4](https://getbootstrap.com/docs/4.0/), 
  these are blade components for form fields to speed up form creation.

...as long as you use horizontal forms, as I do. With my layout.
  I might consider some more customization in a later version,
  if it's not too difficult.

I'm using [spatie/laravel-html](https://github.com/spatie/laravel-html)
  for generating each input; this has the advantage of handling old data
  if a form submission fails, or using values from a model. See 
  [the documentation](https://docs.spatie.be/laravel-html/v2/introduction).

## Compatibility Chart

| Laravel Form Components | Laravel | PHP  |
|-------------------------|---------|------|
| **1.x**                 | 5.4+    | 7.0+ |

## Installing

Require the project using [Composer](https://getcomposer.org):

```bash
$ composer require rickselby/laravel-form-components
```

Laravel 5.5 will auto-discover the package.

For Laravel 5.4, in `config/app.php`, add this line to the `providers` array:

    RickSelby\Laravel\FormComponents\FormComponentsProvider::class,
    
### Styles

I wasn't happy with the layout of checkboxes, and need to add a class for some additional padding. 
  This can be published to `public/vendor/rickselby/laravel-form-components/form_components.css`:

    ./artisan vendor:publish --provider="RickSelby\Laravel\FormComponents\FormComponentsProvider" --tag="public"
    
Alternatively, you can include the `scss` source if you're using Laravel Mix or similar. In your `app.scss`, add:

    @import "vendor/rickselby/laravel-form-components/src/resources/assets/sass/form_components";
    
_(I'm not sure I'm a big fan of publishing a front-end requirement through composer, but it seems to fit in this case)._

## Usage

Simple fields can be added using `@include`:

    @include('fc::checkbox', ['label' => 'Is active?', 'name' => 'active'])
    @include('fc::date', ['label' => 'Date of birth', 'name' => 'birthday'])
    @include('fc::file', ['label' => 'Your face', 'name' => 'profile'])
    @include('fc::number', ['label' => 'Number of feet', 'name' => 'feet'])
    @include('fc::select', ['label' => 'Country', 'name' => 'country', 'options' => $options])
    @include('fc::static', ['label' => 'Something you cannot change', 'name' => 'static'])
    @include('fc::text', ['label' => 'Name', 'name' => 'name'])
    @include('fc::textarea', ['label' => 'Personal statement', 'name' => 'statement'])
    
By using `@component` instead, you can use `@slot` to define the values, 
  which can be preferable for more complicated values; for example, those with HTML:

    @component('fc::text', ['name' => 'name'])
        @slot('label')
            <em>Label with HTML</em>
        @endslot
    @endcomponent
    
You can mix-and-match passing data using an array and slots as best fits your need.
  If you only use an array, you can use `@include` instead of `@component` and drop the `@endcomponent`.
    
[Help text](https://getbootstrap.com/docs/4.0/components/forms/#help-text)
  is supported:

    @component('fc::text', ['label' => 'Name', 'name' => 'name'])
        @slot('help')
            This should be your name.
        @endslot
    @endcomponent

Default values can be passed, too:

    @include('fc::number', ['label' => 'Number of feet', 'name' => 'feet', 'value' => 2])

As can placeholders:

    @include('fc::text', ['label' => 'Name', 'name' => 'name', 'placeholder' => 'Your name'])
    
Classes can be added to the inputs; you must pass an array:

    @include('fc::text', ['label' => 'Name', 'name' => 'name', 'class' => ['a-name']])

Validation errors are shown automatically based on the field name, thanks to the `.invalid-feedback` class.

### Date Picker

    @include('fc::datepicker', ['label' => 'Date of birth', 'name' => 'birthday'])
    
Date picker is just a text field with the class `date-picker`, 
  which can then have whatever (probably javascript) applied to it to convert it to something more functional.

### Submit button
    
The submit button is intended to be used with `@component`, as it only has one parameter:

    @component('fc::submit')
        Submit this form
    @endcomponent

## Overriding

Laravel allows overriding of package views. Create the directory `resources/views/vendor/fc`; 
  then create any views you wish to override. 

## Extending

Custom fields can be added by extending the `fc::layout.field` template.
  Ensure the `$label`, `$name` and `$help` attributes are passed through.
  As an example, this is how the `text` field could be implemented:

    @component('fc::layout.field', ['label' => $label, 'name' => $name, 'help' => $help ?? null])
        {{ html()->text($name, $value ?? null)->placeholder($placeholder ?? null)->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
    @endcomponent

There are more available settings in the `fc::layout.field` template for more customisation.

## License

Laravel Form Components is licensed under [The MIT License (MIT)](LICENSE).
