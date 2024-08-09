<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\index;



class IndexController extends Controller
{
    public function index(){
        $abouts=about::all();
        return view('index',compact('abouts'));
    }

}
