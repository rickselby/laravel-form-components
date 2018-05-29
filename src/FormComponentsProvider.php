<?php

namespace RickSelby\Laravel\FormComponents;

use Spatie\Html\Elements\Element;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormComponentsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bladeDirectives();
        $this->views();
        $this->htmlMacro();
    }

    protected function bladeDirectives()
    {
        Blade::directive('array2br', function ($expression) {
            return "<?php echo implode('<br />', array_map('e', $expression)); ?>";
        });
    }

    protected function views()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'fc');

        $this->publishes([
            __DIR__.'/resources/assets/css/' => public_path('vendor/rickselby/laravel-form-components/'),
        ], 'public');
    }

    protected function htmlMacro()
    {
        Element::macro('invalidClass', function ($errors, $name) {
            return $this->addClass(['is-invalid' => $errors->has(toDotNotation($name))]);
        });
    }
}
