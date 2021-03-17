<?php

namespace App\Providers;

use App\Interfaces\RatingInterface;
use App\Interfaces\CompanyInterface;
use App\Repositories\RatingRepository;
use App\Repositories\CompanyRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\RatingValueInterface;
use App\Repositories\RatingValueRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CompanyInterface::class, CompanyRepository::class);
        $this->app->bind(RatingValueInterface::class, RatingValueRepository::class);
        $this->app->bind(RatingInterface::class, RatingRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
