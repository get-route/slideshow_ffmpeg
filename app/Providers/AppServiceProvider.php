<?php

namespace App\Providers;

use App\Models\Metric;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use function Illuminate\Session\gc;
use function League\Flysystem\get;

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
        $metriks_random_all = DB::table('metrics')->OrderBy('views','DESC')->where('public','=','Да')->limit(3)->get();
        $metriks_random_once = Metric::all()->where('public','=','Да')->random(1);
        $all_tags_menu = DB::table('tags')->get('title','url');
        View::share(compact('metriks_random_all','all_tags_menu', 'metriks_random_once'));
    }
}
