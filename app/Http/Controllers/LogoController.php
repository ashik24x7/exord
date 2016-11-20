<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Logo;

class LogoController extends Controller
{
    public function showLogo(){
    	return view('/admin/logo');
    }
    public function logo(Request $request){
    	$data = $request->only('active');
    	$photo = $request->file('logo');

    	$data['logo'] = str_random(20).'.'.$photo->extension();

    	$data['updated_by'] = auth()->guard('admin')->user()->id;

    	$photo->move(public_path('photo/logo'),$data['logo']);
    	if(Logo::create($data)){
    		return redirect()->to('/admin/logo')->with('message','Logo has added successfully');
    	}

    }
}
