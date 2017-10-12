<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    private $menuTop = array();
    private $menuBottom = array();

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Получние основного меню
        $menuTop = DB::table('menu_items')
            ->leftJoin('menus','menu_items.menu_id','=','menus.id')
            ->leftJoin('menu_groups','menu_items.group_menu_id','=','menu_groups.id')
            ->where('menu_items.group_menu_id', '=' ,'1')
            ->get();
        // Получние нижнего меню
        $menuBottom = DB::table('menu_items')
            ->leftJoin('menus','menu_items.menu_id','=','menus.id')
            ->leftJoin('menu_groups','menu_items.group_menu_id','=','menu_groups.id')
            ->where('menu_items.group_menu_id', '=' ,'2')
            ->get();
//        return view('index',compact('menuTop','menuBottom'));
        return view('index');
    }

    public function showNews(){


        return view('inner',compact('menuTop','menuBottom'));
    }
//    public function admin(){
//        return redirect("/");
//    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
