<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\service;
use App\Models\index;



class IndexController extends Controller
{
    public function index(){
        $abouts=about::all();
         $services=service::all();
        return view('index',compact('abouts','services'));
    }
    //     public function index_service(){
    //     $services=service::all();
    //     return view('index',compact('services'));
    // }


}
