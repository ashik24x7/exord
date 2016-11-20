<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

use DB;

class MenuController extends Controller
{
	public function showAddMenu(){
		$menu = Menu::whereNull('main_menu')->get();
    	return view('admin.add-menu',compact('menu'));
    }

    public function mainMenuAdd(Request $request){
    	$this->validate($request,[
    		'menu_name' => 'required',
    		'position' => 'required'
    	]);
    	
    	$data = $request->except('_token');
    	$data['visible'] = 1; 
    	if(Menu::create($data)){
    		return redirect()->to('/admin/menu')->with('message','Menu has added successfully');
    	}
    }

    public function subMenuAdd(Request $request){
    	$this->validate($request,[
    		'main_menu' => 'required',
    		'menu_name' => 'required',
    		'position' => 'required'
    	]);
    	
    	$data = $request->except('_token');
    	$data['visible'] = 1; 

    	if(Menu::create($data)){
    		return redirect()->to('/admin/menu')->with('message','Submenu has added successfully');
    	}
    }

}
