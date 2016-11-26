<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Heading;

class HeadingController extends Controller
{
    public function showHeading(){
    	return view('admin.heading');
    }

    public function addHeading(Request $request){
    	$this->validate($request,[
    		'heading' => 'required',
	    	'content' => 'required',
	    	'visibility' => 'required'
    	]);

    	$data = $request->only('heading','content','visibility');
    	$data['added_by'] = auth()->guard('admin')->user()->id;

    	$data['path'] = "";
        $path = request()->file('path');
        if($path){
            $path_name = str_random(20).'.'.$path->extension();

            if($path->storeAs('photo/heading', $path_name, 'public')){
                 $data['path'] = $path_name;
                 if(Heading::create($data)){
                    return redirect()->to('/admin/heading')->with('message','Heading has added successfully');
                 }
                 return redirect()->to('/admin/heading')->with('message','There is an error while adding heading');
            }else{
                return $photo->getErrorMessage();
            }
        }
    }

}
