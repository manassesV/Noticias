<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        //Compartilhar dados com umaview
        view()->composer(['noticias.create','noticias.principal'],\App\Http\ViewComposers\NoticiasComposer::class);
    
        Blade::directive('ifguest', function ($expression){
             return "<?php echo 'Hello ' . {$expression}; ?>";
        });
        
        app()->bind(App\Manipular\NoticiasManipular::class,App\Manipular\Metodos::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
