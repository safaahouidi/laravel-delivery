<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\about;
use App\Models\index;
use App\Models\ourteam;
use App\Models\aboutview;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
    //  @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    // dashboard admin
    public function showAdmins(){
        return view('dashboard/admin');
    }
 
//------------------------------------------------------

    //dashboard about 

      public function showaboutAdmins(){
        $abouts=about:: all();
        return view('dashboard/about-page/about-admin',compact('abouts'));
    }
    public function showOurTeamAdmins(){
        $ourteams=ourteam:: all();
        return view('dashboard/about-page/ourteam',compact('ourteams'));
    }


    //-------------------------------------------------------

    // dashboard  about store 

    public function AboutStore(Request $request){
        // dd($request);
        // return;
        $about=new About();
        $about->text=$request->text;
        // $about->nameimg=$request->nameimg;
        $imageUrl=$request->file('image')->store('abouts','public');
        $about->image=$imageUrl;
        $about->save();
        return redirect()->route('about-Admin')->with('message',"about Created Successfully");
             }
     public function ourteamStore(Request $request){
                // dd($request);
                // return;
                $ourteam=new ourteam();
                $ourteam->name=$request->name;
                $ourteam->description=$request->description;
                $imageUrl=$request->file('image')->store('ourteams','public');
                $ourteam->image=$imageUrl;
                $ourteam->save();
                return redirect()->route('ourteam-Admin')->with('message',"About ourteam Created Successfully");
                     }
       //-------------------------------------------------------
       
       
       //dashboard about edit

          public function editaboutAdmin(){
        $abouts=about:: all();
        return view('dashboard/about-page/about-admin-edit',compact('abouts'));
    }

       public function adminEditAbout($id)
    {
        $about = about::find($id);
        return view('about-admin-edit', compact('about'));
    }
    public function adminAboutUpdate(Request $request,$id){
    $about=about::find($id);
    if($request->hasFile('image')){
        Storage::disk('public')->delete($about->image);
        $imageUrl=$request->file('image')->store('abouts','public');
        $about->update([
            'image'=>$imageUrl,
        ]);
    }
    $about->update([
        'name'=>$request->name
    ]);
    return redirect()->route('about-admin')->with('message','about Updated Successfully');
}
}