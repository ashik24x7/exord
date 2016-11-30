<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Benefit;

class BenefitController extends Controller
{
    public function showBenefit(){
    	return view('admin.benefit');
    }

    public function addBenefit(Request $request){
    	$this->validate($request,[
    		'heading' => 'required',
	    	'content' => 'required',
	    	'visibility' => 'required',
    	]);

    	$data = $request->only('heading','content','visibility');
    	$data['added_by'] = auth()->guard('admin')->user()->id;
    	if(Benefit::create($data)){
			return redirect()->to('/admin/benefit')->with('message','Content has added successfully');
		}
		return redirect()->to('/admin/benefit')->with('message','There is an error while adding content');

    }
}