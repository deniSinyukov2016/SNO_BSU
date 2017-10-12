<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $menuTop = DB::table('menu_items')
//            ->leftJoin('menus','menu_items.menu_id','=','menus.id')
//            ->leftJoin('menu_groups','menu_items.group_menu_id','=','menu_groups.id')
//            ->where('menu_items.group_menu_id', '=' ,'1')
//            ->get();
//        view()->share('denis',$menuTop);
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
