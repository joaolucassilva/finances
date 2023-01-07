<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\CategoryEloquentRepository;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryEloquentRepository::class);
    }


    public function boot(): void
    {
        //
    }
}
