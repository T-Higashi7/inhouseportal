<?php

namespace App\Providers;

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
    // 2021.5.12 adminのみ許可 Gate以下追加
    \Gate::define('admin', function ($user) {
        return ($user->admin_flag == 1);
    });
    }
}
