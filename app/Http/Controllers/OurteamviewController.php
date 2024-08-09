<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ourteam;

class OurteamviewController extends Controller
{
    public function showAllOurteam(){
        $ourteams = ourteam::all();
        return view('dashboard/about-page/ourteam-view',compact('ourteams'));
        

    }
}
