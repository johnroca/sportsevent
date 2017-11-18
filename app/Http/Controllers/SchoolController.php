<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddSchoolRequest;
use App\School;

class SchoolController extends Controller
{
    public function add(Request $request){
    	return view('school.add',['success'=>$request['success']]);
    }

    public function register(AddSchoolRequest $request){
    	if (School::create(['school_name'=>$request['school-name']])) {
    		return redirect()->route('add-school',['success'=>true]);
    	}

    }
}
