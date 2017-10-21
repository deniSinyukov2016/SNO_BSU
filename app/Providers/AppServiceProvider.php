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
        //Передача во все шаблоны меню

        // Получние  меню в шапке
//        $menuTop = DB::table('menu_items')
//            ->leftJoin('menus','menu_items.menu_id','=','menus.id')
//            ->leftJoin('menu_groups','menu_items.group_menu_id','=','menu_groups.id')
//            ->where('menu_items.group_menu_id', '=' ,'1')
//            ->get();
//        // Получние  меню в подвале
//        $menuBottom = DB::table('menu_items')
//            ->leftJoin('menus','menu_items.menu_id','=','menus.id')
//            ->leftJoin('menu_groups','menu_items.group_menu_id','=','menu_groups.id')
//            ->where('menu_items.group_menu_id', '=' ,'2')
//            ->get();
//
//        view()->share(['menuTop',$menuTop],['menuBottom',$menuBottom]);
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
