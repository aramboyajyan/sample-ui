<?php

namespace Ussf\UiComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

class UiComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
        ], 'ui-views');

        $this->publishes([
            __DIR__ . '/../resources/css' => public_path('vendor/ui'),
        ], 'ui-assets');

        $this->publishes([
            __DIR__ . '/../config/ui-components.php' => config_path('ui-components.php'),
        ], 'ui-config');

        Blade::componentNamespace('Ussf\\UiComponents\\View\\Components', 'ui');

        // Apply global font if enabled
        if (config('ui-components.apply_global_font', false)) {
            $this->applyGlobalFont();
        }

        // Register documentation route if enabled
        if (config('ui-components.enable_documentation_route', false)) {
            $this->registerDocumentationRoute();
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ui-components.php', 'ui-components');
    }

    protected function applyGlobalFont()
    {
        $fontFamily = config('ui-components.font_family');
        
        // Add global font styles to the head
        app('view')->composer('*', function ($view) use ($fontFamily) {
            $view->with('globalFont', $fontFamily);
        });

        // Push font CSS to the stack
        if (method_exists(app('view'), 'startPush')) {
            app('view')->startPush('styles');
            echo "<style>body { font-family: {$fontFamily}; }</style>";
            app('view')->stopPush();
        }
    }

    protected function registerDocumentationRoute()
    {
        Route::get('/ussf-ui', function () {
            return view('ui::documentation');
        })->name('ussf-ui.documentation');
    }
}