<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Heading;

class HomeController extends Controller
{
    public function home(){
    	$data['logo'] = Logo::where('active',1)->orderBy('id','DESC')->first();
    	$data['heading'] = Heading::where('visibility',1)->orderBy('id','DESC')->first();
    	return view('home.index',$data);
    }
    public function dashboard(){
    	return view('admin.home');
    }
    
}
