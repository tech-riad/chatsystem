<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

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
        RedirectIfAuthenticated::redirectUsing(function (Request $request) {
            $user = $request->user();

            if ($user) {
                if ($user->hasRole('Super Admin') || $user->hasRole('Admin')) {
                    return route('admin.dashboard');
                }

                if ($user->hasRole('User')) {
                    return route('user.dashboard');
                }
            }

            return '/';
        });
    }
}
