<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        // SQLログを出力するための設定
        if (config('app.sql_debug')) {
            DB::listen(function ($query) {
                Log::info([
                    'sql' => $query->sql,
                    'bindings' => $query->bindings,
                    'time' => $query->time . ' ms'
                ]);
            });
        }
    }
}
