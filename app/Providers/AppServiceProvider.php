<?php

namespace App\Providers;

use App\Models\UserPersonalAccessToken;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // @link https://github.com/barryvdh/laravel-ide-helper
        if ($this->app->environment('local')) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // @link https://laravel.com/docs/11.x/sanctum#overriding-default-models
        Sanctum::usePersonalAccessTokenModel(UserPersonalAccessToken::class);

        // @link https://laravel.com/docs/9.x/eloquent#enabling-eloquent-strict-mode
        Model::shouldBeStrict();
    }
}
