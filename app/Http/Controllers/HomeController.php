<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	return view('home.index');
    }
    public function dashboard(){
    	return view('admin.home');
    }
    public function showAddMenu(){
    	return view('admin.add-menu');
    }
}
