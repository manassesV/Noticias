<?php

namespace Noticias\Providers;

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
        view()->composer(['noticias.create','noticias.principal'],\Noticias\Http\ViewComposers\NoticiasComposer::class);
    
        Blade::directive('ifguest', function ($expression){
             return "<?php echo 'Hello ' . {$expression}; ?>";
        });
        
     
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
           
        $this->app->bind('Noticias\Manipular\Metodos','Noticias\Manipular\NoticiasManipular');
    }
}
