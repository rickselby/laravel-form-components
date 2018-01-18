<?php

namespace RickSelby\Laravel\FormComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormComponentsProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('array2br', function ($expression) {
            return "<?php echo implode('<br />', array_map('e', $expression)); ?>";
        });

        $this->loadViewsFrom(__DIR__.'/resources/views', 'fc');

        $this->publishes([
            __DIR__.'resources/assets/css/' => public_path('vendor/form-components/'),
        ], 'public');
    }
}
