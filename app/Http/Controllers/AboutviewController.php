<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class AboutviewController extends Controller
{
    public function showAllAboutview(){
        $aboutviews = about::all();
        return view('dashboard/about-page/about-view',compact('aboutviews'));

    }
  

}
