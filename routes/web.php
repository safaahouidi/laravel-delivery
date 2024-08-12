<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OurteamController;
use App\Http\Controllers\OurteamviewController;
use App\Http\Controllers\AboutStoreController;
use App\Http\Controllers\AboutviewController;
use App\Http\Controllers\AbouteditController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ServiceController;











// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about.html', function () {
//     return view('about');
// });
// });
 
Auth::routes();
Route::get('/', [IndexController::class,'index'])->name('index');

// --------------------------------------------------------------------------------

// About route for user
Route::get('/about', [AboutController::class,'showAllAbouts'])->name('about');

// --------------------------------------------------------------------------------

// dashboard / admin page:
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'showAdmins'])->name('admin');

// ---------------------------------------------------------------------------------

// dashboard / about page 
// show interfce data for about page(about , ourteam )
Route::get('/admin/aboutadmin', [App\Http\Controllers\HomeController::class, 'showaboutAdmins'])->name('about-Admin');
Route::get('/admin/ourteamadmin', [App\Http\Controllers\HomeController::class, 'showOurTeamAdmins'])->name('ourteam-Admin');

//show database data for about page (about , ourteam)
Route::get('/admin/ourteamview', [App\Http\Controllers\OurteamviewController::class, 'showAllOurteam'])->name('ourteamview-Admin');
Route::get('/admin/aboutview', [App\Http\Controllers\aboutviewController::class, 'showAllAboutview'])->name('aboutview-Admin');

// store data from interface to table (abouts , ourteams) 
Route::post('/admin/about/store', [App\Http\Controllers\HomeController::class, 'AboutStore'])->name('AboutStore');
Route::post('/admin/ourteam/store', [App\Http\Controllers\HomeController::class, 'ourteamStore'])->name('ourteam-Store');


// edit data from interface to table (abouts)

Route::get('/admin/abouts/edit/{id}', [App\Http\Controllers\HomeController::class, 'adminEditAbout'])->name('adminEditAbout');
Route::post('/admin/abouts/update/{id}', [App\Http\Controllers\HomeController::class, 'adminAboutUpdate'])->name('adminAboutUpdate');

//delete data from interface to table(abouts)

Route::get('/admin/abouts/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminDeleteAbout'])->name('adminDeleteAbout');
Route::post('/admin/abouts/destroy/{id}', [App\Http\Controllers\HomeController::class, 'adminAboutDestroy'])->name('adminAboutDestroy');


// edit data from interface to table (ourteams)

Route::get('/admin/ourteams/edit/{id}', [App\Http\Controllers\HomeController::class, 'adminEditOurteam'])->name('adminEditOurtem');
Route::post('/admin/ourteams/update/{id}', [App\Http\Controllers\HomeController::class, 'adminOurteamUpdate'])->name('adminOurteamUpdate');

//delete data from interface to table(ourteams)

Route::get('/admin/ourteams/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminDeleteOurteam'])->name('adminDeleteOurteam');
Route::post('/admin/ourteams/destroy/{id}', [App\Http\Controllers\HomeController::class, 'adminOurteamDestroy'])->name('adminOurteamDestroy');


//----------------------------------------------------------------------------------

//service page 

//service route for user

Route::get('/service', [ServiceController::class,'showAllservices'])->name('service');

//service route for admin 
Route::get('/admin/serviceadmin', [App\Http\Controllers\HomeController::class, 'showserviceAdmins'])->name('service-Admin');
Route::get('/admin/serviceview', [App\Http\Controllers\HomeController::class, 'showAllServiceview'])->name('serviceview-Admin');

//service store
Route::post('/admin/service/store', [App\Http\Controllers\HomeController::class, 'serviceStore'])->name('serviceStore');


//service edit

// edit data from interface to table (services)

Route::get('/admin/services/edit/{id}', [App\Http\Controllers\HomeController::class, 'adminEditservice'])->name('adminEditService');
Route::post('/admin/services/update/{id}', [App\Http\Controllers\HomeController::class, 'adminserviceUpdate'])->name('adminServiceUpdate');


//delete data from interface to table(services)

Route::get('/admin/services/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminDeleteService'])->name('adminDeleteService');
Route::post('/admin/services/destroy/{id}', [App\Http\Controllers\HomeController::class, 'adminServiceDestroy'])->name('adminServiceDestroy');




// Route::post('/admin/book/store', [App\Http\Controllers\HomeController::class, 'bookStore'])->name('bookStore');