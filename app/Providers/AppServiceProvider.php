<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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
        View::composer('*', function ($view) {
        // Ortho Services (category_id = 1)
        $orthoServices = Service::where('category_id', 1)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->get();

        $orthoCategory = DB::table('category')
            ->where('category_id', 1)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->first();

        // Pediatric Services (category_id = 2)
        $pediatricServices = Service::where('category_id', 2)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->get();

        $pediatricCategory = DB::table('category')
            ->where('category_id', 2)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->first();

        $view->with([
            'orthoServices' => $orthoServices,
            'orthoCategory' => $orthoCategory,
            'pediatricServices' => $pediatricServices,
            'pediatricCategory' => $pediatricCategory,
        ]);
    });
    }
}
