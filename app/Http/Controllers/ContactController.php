<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class ContactController extends Controller
{
        public function showAllcontacts(){
        $contacts=contact::all();
        return view('contact',compact('contacts'));
        

    }
}
