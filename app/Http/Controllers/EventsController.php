<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function category($category, $subcategory = 'all')
    {
    	dd("Category: {$category} Subcategory:
    		{$subcategory}");
    }
    public function show($id)
    {
    	$data = [
    		'name' => 'Laravel Hacking and Coffee',
            'date' => date('Y-m-d')
    	];

    		return view('events.show')->with($data);	
    }
    public function index()
    {
      $events =[
        'Laravel Hacking and Coffee',
        'IoT With Raspberry Pi',
        'Free Vue.js Lessons'
      ];
      return view('events.index')->with('events', $events);
    }
}
