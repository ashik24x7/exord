<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Admin;
use Auth;

class AdminController extends Controller
{
	public function showRegistration(){
		return view('admin.register');
	}
    public function adminRegistration(Request $request){

    	$this->validate($request,[
            'name' => 'required|max:100',
			'username' => 'required|unique:admins',
			'password' => 'required',
			're_pass' => 'required|same:password'
    	]);

        $data = $request->all();
        $data['password'] = bcrypt($request->input('password'));
        $data['photo'] = "";
        $photo = request()->file('photo');
        if($photo){
            $photo_name = str_random(20).'.'.$photo->extension();

            if($photo->move(public_path('photo/admin-photo'),$photo_name)){
                 $data['photo'] = $photo_name;
                 Admin::create($data);
                 if($this->login($request)){
                    return redirect()->to('/admin/home')->with('message','Sucessfully registered');
                 }
                 return redirect()->to('/admin/register')->with('message','Login Failed');
            }else{
                return $photo->getErrorMessage();
            }
        }

    }

    public function showLogin(){
    	return view('admin.login');
    }

    public function login(Request $request){

        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = $request->only('username','password');
        if(\Auth::guard('admin')->attempt($data)){
            return redirect()->intended('/admin/home');
        }else{
            return redirect()->to('/admin/login')->with('message','Username/Password Wrong!');
        }

    }






}
