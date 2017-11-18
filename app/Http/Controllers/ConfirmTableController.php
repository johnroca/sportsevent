<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmTableController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function controlPage()
    {
    	// $schooldata = DB::table('school')->get();

    	$schools = \App\School::all();

    	// dd($schools);

        // return view('user.index', ['users' => $users]);
       
        return view('confirmschool',['schools' => $schools]);
    }
}
