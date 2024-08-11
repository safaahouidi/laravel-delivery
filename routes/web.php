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
use App\Http\Controllers\ItemController;









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
// Route::view('/admin', 'dashboard/admin')->name('admin');
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
Route::get('/admin/editaboutadmin', [App\Http\Controllers\AboutEditController::class, 'editaboutAdmin'])->name('aboutEdit');
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

//----------------------------------------------------------------------------------

