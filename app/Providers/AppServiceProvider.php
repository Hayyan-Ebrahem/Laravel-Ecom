<?php

namespace App\Providers;

use App\Http\Resources\Category\Repository\CategoryRepository;
use App\Http\Resources\Category\Repository\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(
            'App\Http\Resources\Category\Repository\Interfaces\CategoryRepositoryInterface',
            'App\Http\Resources\Category\Repository\CategoryRepository');

            // $this->app->bind(Category::class, function ($app) {
            //     return Category::query();
            // });
    //     );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
