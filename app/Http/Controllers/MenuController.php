<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.menu')->with('menus', Menu::all()->sortBy('menu_name'));
    }
   

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_view_all()
    {
        return view('menus.viewall')->with('menus', Menu::all()->sortBy('menu_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request, [
            "menu_name" => "required | unique:menus",
        ]);

        $menu = new Menu;

        $menu->menu_name = $request->menu_name;
        $menu->save();  
        
        return Redirect()->back()->with('success', 'Add successfully');
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
        $menu = Menu::find($id);
        return view('menus.edit')->with('menu', $menu);
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
        $this->validate($request, [
            "menu_name" => "required",
        ]);

        $menu = Menu::find($id);
        $menu->menu_name = $request->menu_name;
        $menu->save();

        return Redirect()->route('menu.view')->with('success', 'Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Menu::find($id);
        $item->delete();
        return Redirect()->route('menu.view')->with('delete', 'Delete successfully');

    }


    //To confrim delete message
    public function confirm($id)
    {
        return Redirect()->route('menu.view')->with('confirm', $id);
    }
}
