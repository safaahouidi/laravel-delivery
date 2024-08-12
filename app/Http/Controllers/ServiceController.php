<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class ServiceController extends Controller
{
      public function showAllServices(){
        $services=service::all();
        
        return view('service',compact('services'));
        
    }
}
