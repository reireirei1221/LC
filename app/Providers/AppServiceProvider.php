<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
	    Paginator::useBootstrap(); // ページネーションにBootstrapのスタイルが適用される
        \URL::forceScheme('https'); // Laravelが生成するURLが常にHTTPSを使用するように指示
        $this->app['request']->server->set('HTTPS', 'on'); // すべてのリクエストがHTTPSで送信されることを保証
    }
}
