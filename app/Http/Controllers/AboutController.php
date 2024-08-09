<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\ourteam;

class AboutController extends Controller
{
    //
    public function showAllAbouts(){
        $abouts=about::all();
        $ourteams = ourteam::all();
        return view('about',compact('abouts','ourteams'));
        

    }

}
