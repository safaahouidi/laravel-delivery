<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\about;
use App\Models\index;
use App\Models\ourteam;
use App\Models\aboutview;
use App\Models\ourteamview;
use App\Models\service;







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


    // ourteam store
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

     public function adminEditAbout($id)
    {
        $about = about::find($id);
        return view('dashboard/about-page/about-admin-edit', compact('about'));
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
        'text'=>$request->text
    ]);
    return redirect()->route('aboutview-Admin')->with('message','about Updated Successfully');
}


//----------------------------------------------------------
// delete about dashbourd

    public function adminDeleteAbout($id)
    {
        $about = about::find($id);
        return view('dashboard/about-page/about-admin-delete', compact('about'));
    }
    public function adminAboutDestroy($id){
$about=about::find($id);

    $about->delete();
    return redirect()->route('aboutview-Admin')->with('message','about Deleted Successfully');
}

// Our team update
  public function adminEditOurteam($id)
    {
        $ourteam = ourteam::find($id);
        return view('dashboard/about-page/ourteam-admin-edit', compact('ourteam'));
    }
   public function adminOurteamUpdate(Request $request,$id){
    $ourteam=ourteam::find($id);
    if($request->hasFile('image')){
        Storage::disk('public')->delete($ourteam->image);
        $imageUrl=$request->file('image')->store('ourteams','public');
        $ourteam->update([
            'image'=>$imageUrl,
        ]);
    }
    $ourteam->update([
        'name'=>$request->name,
        'description'=>$request->description,

    ]);
    return redirect()->route('ourteam-Admin')->with('message','ourteam Updated Successfully');
}

// delete ourteam

    public function adminDeleteOurteam($id)
    {
        $ourteam = ourteam::find($id);
        return view('dashboard/about-page/ourteam-admin-delete', compact('ourteam'));
    }
    public function adminOurteamDestroy($id){
    $ourteam=ourteam::find($id);

    $ourteam->delete();
    return redirect()->route('ourteamview-Admin')->with('message','ourteam Deleted Successfully');
}

//end about page

//------------------------------------------------------------------------------------------------

// start service page

//dashboard service
 public function showAllServiceview(){
        $services = service::all();
        return view('dashboard/service-page/service-view',compact('services'));

    }

      public function showserviceAdmins(){
        $services=service:: all();
        return view('dashboard/service-page/service-admin',compact('services'));
    }

// service store
     public function serviceStore(Request $request){
                // dd($request);
                // return;
                $service=new service();
                $service->title=$request->title;
                $service->description=$request->description;
                $imageUrl=$request->file('image')->store('services','public');
                $service->image=$imageUrl;
                $service->save();
                return redirect()->route('service-Admin')->with('message',"service Created Successfully");
                }


                //service edit
      public function adminEditService($id)
    {
        $service = service::find($id);
        return view('dashboard/service-page/service-admin-edit', compact('service'));
    }
    public function adminserviceUpdate(Request $request,$id){
    $service=service::find($id);
    if($request->hasFile('image')){
        Storage::disk('public')->delete($service->image);
        $imageUrl=$request->file('image')->store('services','public');
        $service->update([
            'image'=>$imageUrl,
        ]);
    }
    $service->update([
        'title'=>$request->title,
        'description'=>$request->description,
    ]);
    return redirect()->route('serviceview-Admin')->with('message','service Updated Successfully');
}

// delete service

    public function adminDeleteService($id)
    {
        $service = service::find($id);
        return view('dashboard/service-page/service-admin-delete', compact('service'));
    }
    public function adminServiceDestroy($id){
    $service=service::find($id);

    $service->delete();
    return redirect()->route('serviceview-Admin')->with('message','service Deleted Successfully');
}


//   public function bookStore(Request $request){
//                 // dd($request);
//                 // return;
//                 $book=new book();
//                 $book->source=$request->source;
//                 $book->destination=$request->destination;
//                 $book->transport=$request->transport;
//                 $book->visacard=$request->visacard;
//                 $book->save();
//                 return redirect()->route('book-Admin')->with('message'," book Created Successfully");
//                      }



}