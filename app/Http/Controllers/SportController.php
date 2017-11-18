<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostSportRequest;
class SportController extends Controller
{
    
    public function index()
    {
        return view('layouts.sport.homeSport');
    }

    public function add()
    {
        return view('layouts.sport.addSport');
 
    }

    public function save(PostSportRequest $request)
	{
		$sportName = $request->get('sport_name');

		$sport = new \App\Sport();

		$sport->sport_name = $sportName;
		
		if($sport->save()){
			$request->session()->flash('success','Sport successfully added');
		}else{
			$request->session()->flash('warning','Sport is not successfully added');
		}

		return redirect()->route('addEvent');

	   
	}
}
