<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class ConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (!Schema::hasTable('settings')) {
            return;
        }
        // Fetch the first config or create a default one if it doesn't exist
        $data = Setting::firstOrNew([], [
            'name'    => 'Default',
            'email'   => 'default@gmail.com',
            'number'  => '01780000000',
            'address' => 'default@gmail.com',
            'url'     => 'synexdigital.com',
            'logo'    => null,
            'fav'     => null,
        ]);

        View::share('configData', $data);
    }
}
