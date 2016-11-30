<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;

class PackageController extends Controller
{
    public function showPackage(){
    	return view('admin.package');
    }

    public function addPackage(Request $request){
    	$this->validate($request,[
    		'heading' => 'required',
	    	'content' => 'required',
	    	'price' => 'required',
	    	'visibility' => 'required'
    	]);

    	$data = $request->only('heading','content','visibility','price');
    	$data['added_by'] = auth()->guard('admin')->user()->id;

    	$data['path'] = "";
        $path = request()->file('path');
        if($path){
            $path_name = str_random(20).'.'.$path->extension();

            if($path->storeAs('photo/package', $path_name, 'public')){
                 $data['path'] = $path_name;
                 if(Package::create($data)){
                    return redirect()->to('/admin/package')->with('message','Package has added successfully');
                 }
                 return redirect()->to('/admin/package')->with('message','There is an error while adding package');
            }else{
                return $photo->getErrorMessage();
            }
        }
    }
}
