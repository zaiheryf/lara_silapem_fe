<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade; //tambahan
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

use App\Models\MasterTempatWisataModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; }); //tambahan
        
        Paginator::useBootstrap();

        // $tempatwisata = MasterTempatWisataModel::where('status', '=', 'Publish')->paginate(6);
        // View::share('tempatwisata', $tempatwisata);
    }
}
