<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostEventRequest;
class EventController extends Controller
{
    //
    public function index()
    {
    	return view('event');
    }

    public function save(PostEventRequest $request)
    {
    	// dd($_POST);
    	$eventName = $request->get('event_name');

    	$event = new \App\Event();

    	$event->event_name = $eventName;
    	
    	if($event->save()){
    		$request->session()->flash('success', 'Event successfully added!');    		
    	}else{
    		$request->session()->flash('error', 'Event was not added :(');  
    	}

    	return redirect()->route('event');

    }
}
