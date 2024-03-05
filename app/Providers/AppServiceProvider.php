<?php

namespace App\Providers;

use App\Console\Commands\CreateImagesLink;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::useBootstrap();

        Gate::define('admin', function(User $user){
            return $user->level === 'admin';
        });

        Gate::define('petugas', function(User $user){
            return $user->level === 'petugas';
        });

        Gate::define('user', function(User $user){
            return $user->level === 'user';
        });

        // Menambahkan perintah artisan baru
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateImagesLink::class,
            ]);
        }
    }
}
