<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Heading;
use App\Benefit;
use App\Package;

class HomeController extends Controller
{
    public function home(){
    	$data['logo'] = Logo::where('active',1)->orderBy('id','DESC')->first();
    	$data['heading'] = Heading::where('visibility',1)->orderBy('id','DESC')->first();
    	$data['benefit'] = Benefit::where('visibility',1)->orderBy('position','ASC')->paginate(6);
    	$data['package'] = Package::where('visibility',1)->orderBy('id','DESC')->paginate(4);
    	return view('home.index',$data);
    }
    public function dashboard(){
    	return view('admin.home');
    }
    
}
