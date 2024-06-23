<?php

namespace App\Providers;

use App\Repositories\CarRepository;
use App\Repositories\interfaces\ICarRepository;
use App\Services\CarService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(CarService::class)
            ->needs(ICarRepository::class)
            ->give(fn () => CarRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
