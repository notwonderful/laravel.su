<?php

namespace App\Providers;

use App\View\Components\Posts\Github;
use App\View\Components\Posts\LinkPreview;
use App\View\Components\Posts\Hidden;
use App\View\Components\Posts\Youtube;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Don't kill the app if the database hasn't been created.
        try {
            DB::connection('sqlite')->statement('PRAGMA synchronous = normal;');
        } catch (\Throwable $throwable) {
            return;
        }

        Paginator::useBootstrapFive();

        Blade::component('github', Github::class);
        Blade::component('youtube', Youtube::class);
        Blade::component('link', LinkPreview::class);
        Blade::component('hidden', Hidden::class);
    }
}
