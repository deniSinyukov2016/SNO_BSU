<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\MenuGroup;
use App\Menu;
use App\MenuItem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$menus = \App\Menu::all(); // получение все элементов таблицы меню
//        $menus = DB::table('menu_items')
//            ->leftJoin('menus','menu_items.menu_id','=','menus.id')
//            ->leftJoin('menu_groups','menu_items.group_menu_id','=','menu_groups.id')
//            ->where('menu_items.group_menu_id', '=' ,'1')
//            ->get();

        //return view('home',compact('menus'));
        return view('pages.search',compact('menus'));
    }
}
