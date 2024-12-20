<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Nette\Utils\Paginator;
=======
>>>>>>> mergecode

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
<<<<<<< HEAD
        \Illuminate\Pagination\Paginator::useBootstrapFive();
=======
>>>>>>> mergecode
    }
}
