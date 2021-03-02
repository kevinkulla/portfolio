<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Collection;
use Romans\Filter\IntToRoman;
use ImageKit\ImageKit;


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
         view()->share('collections', \App\Models\Collection::all());

        $filter = new IntToRoman();
        $year = $filter->filter( date('Y'));

        view()->share('year', $year);

    }
}
