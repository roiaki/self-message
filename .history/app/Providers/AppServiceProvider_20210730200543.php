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
        \Schema::defaultStringLength(191); // https://readouble.com/laravel/5.5/ja/migrations.html#creating-indexessa
        \URL::forceScheme('https'); // アプリ内のリンクをhttpsで生成する設定
    }
}
