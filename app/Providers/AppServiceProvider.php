<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Blade::directive('role', function ($string) {
            return "<?php if(in_array(Auth::user()->role, $string) ){?>";
        });
        Blade::directive('endrole', function () {
            return "<?php }; ?>";
        });
        
    }

}
