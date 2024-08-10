<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
class AboutEditController extends Controller
{
         public function editaboutAdmin(){
        $about=about:: all();
        return view('dashboard/about-page/about-admin-edit',compact('about'));
    }
}
