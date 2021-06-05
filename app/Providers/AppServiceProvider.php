<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('rupiah', function ($expression) {
            return "Rp. <?= number_format($expression, 0, ',', '.'); ?>";
        });
        $this->app->bind('path.public', function() {
            return base_path().'/../public_html/paknong';
        });
    }
}
