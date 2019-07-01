<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Invoice_detail;
use App\Observers\Invoice_detailObserver;



class AppServiceProvider extends ServiceProvider
{

public function boot()
{

    Invoice_detail::observe(Invoice_detailObserver::class);
}


public function register()
{

}



}