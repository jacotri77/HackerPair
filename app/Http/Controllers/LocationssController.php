<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationssController extends Controller
{
    public function index(){
   	return view ('locationss.index')
   }
}
