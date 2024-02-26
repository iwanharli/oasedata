<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
use App\FormFields\TagsFormField;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Voyager::addFormField(TagsFormField::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
