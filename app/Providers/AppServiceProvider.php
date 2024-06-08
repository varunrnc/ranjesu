<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        // Gate::before(function ($user, $ability) {
        //     if($user->isSuperAdmin()) {
        //         return true;
        //     }
        //     // if($user->type == 'super admin') {
        //     //     return true;
        //     // }
        // });
        // $permissions = Permission::all()->pluck('key');
        // foreach ($permissions as $permission) {
        //     Gate::define($permission, function ($user) use ($permission) {
        //         return $user->hasPermission($permission);
        //     });
        // }
        // Blade::directive('datetime', function ($expression) {
        //     return "{{ date_format($expression) }}";
        // });
    }
}
