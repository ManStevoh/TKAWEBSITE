<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EnrolmentForm;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\BannerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post('/upload-image', [CKEditorController::class, 'upload'])->name('ckeditor.upload');


Route::get('/', [HomeController::class, 'homepage']);


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/




route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name ('home');


/*
====================================================================================================================
Securing Admin Routes
using a Middleware
====================================================================================================================
*/



Route::middleware(['admin'])->group(function () {
    Route::post('/add_post', [AdminController::class, 'add_post']);
    Route::get('/show_post', [AdminController::class, 'show_post']);
    Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);
    Route::get('/edit_page/{id}', [AdminController::class, 'edit_page']);
    Route::post('/update_post/{id}', [AdminController::class, 'update_post']);
    Route::get('/post_page', [AdminController::class, 'post_page']);
        // Add other admin routes here
    /*
======================================================================================
show news Admin route
====================================================================================
*/
Route::get('/show_news', [AdminController::class, 'show_news']);
Route::get('/delete_news/{id}', [AdminController::class, 'delete_news']);
Route::get('/edit_news/{id}', [AdminController::class, 'edit_news']); 
Route::post('/update_news/{id}', [AdminController::class, 'update_news']);

//News Routes 
Route::get('/news_post', [AdminController::class, 'news_post']);
Route::post('/add_news', [AdminController::class, 'add_news']);

/*
======================================================================================
To control events
====================================================================================
*/
Route::get('/post_events', [AdminController::class, 'post_events']);
Route::post('/add_event', [AdminController::class, 'add_event']); 
Route::get('/show_events', [AdminController::class, 'show_events']); 
Route::get('/delete_event/{id}', [AdminController::class, 'delete_event']);
Route::get('/update_event/{id}', [AdminController::class, 'update_event']);  
Route::post('/edit_events/{id}', [AdminController::class, 'edit_events']);


/*delete_program
======================================================================================
To control events end
====================================================================================
*/
//user profile

Route::get('/user_profile', [HomeController::class, 'user_profile']);
/*
======================================================================================
To control TEAM PAGE
====================================================================================
*/

Route::get('/banners', [BannerController::class, 'create'])->name('banners.create');
Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
Route::post('/banners', [BannerController::class, 'store'])->name('banners.store');
Route::get('/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
Route::put('/banners/{id}', [BannerController::class, 'update'])->name('banners.update');
Route::delete('/banners/{id}', [BannerController::class, 'destroy'])->name('banners.destroy');


/*
======================================================================================
To control programs
====================================================================================
*/
//user programs
Route::get('/post_program', [ProgramController::class, 'index']); 
Route::post('/create_program', [ProgramController::class, 'store']); 

 
Route::get('/delete_program/{id}', [ProgramController::class, 'delete_program']);
Route::get('/update_program/{id}', [ProgramController::class, 'update_program']); 
Route::post('/program_edit/{id}', [ProgramController::class, 'update']);
/*
======================================================================================
To control TEAM PAGE
====================================================================================
*/

Route::get('/add_team', [AdminController::class, 'add_team']);
Route::post('/post_team', [AdminController::class, 'post_team']); 
Route::get('/show_team', [AdminController::class, 'show_team']);
Route::get('/delete_team/{id}', [AdminController::class, 'delete_team']); 
Route::get('/update_team/{id}', [AdminController::class, 'update_team']);
Route::post('/edit_team/{id}', [AdminController::class, 'edit_team']);

/*
======================================================================================
To control TEAM ends
====================================================================================
*/
/*
======================================================================================
To control system users by admin
====================================================================================
*/
Route::get('/user_admin', [AdminController::class, 'user_admin']);  
Route::post('/post_user_admin', [AdminController::class, 'post_user_admin']);

Route::get('/delete_user_by_admin/{id}', [AdminController::class, 'delete_user_by_admin']);
Route::get('/update_users_by_admin/{id}', [AdminController::class, 'update_users_by_admin']);
Route::post('/admin_edit_users/{id}', [AdminController::class, 'admin_edit_users']);
/*
======================================================================================
The end
====================================================================================
*/
});

/*
====================================================================================================================
END OF ADMIN SECURITY
====================================================================================================================
*/



Route::middleware('auth')->group(function () {
   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/post_details/{id}', [HomeController::class, 'post_details']);
Route::get('/all_blogs', [AdminController::class, 'all_blogs']);

/*news routes*/
Route::get('/news_page', [AdminController::class, 'news_page']);



//Route::get('/show_news', [AdminController::class, 'show_news']);
Route::get('/show_all_news', [AdminController::class, 'show_all_news']);
Route::get('/main_news_view/{id}', [AdminController::class, 'main_news_view']);

/*
======================================================================================
Main other pages
====================================================================================
*/
Route::get('/contactus_page', [HomeController::class, 'contactus_page']);
Route::get('/team_page', [HomeController::class, 'team_page']);
Route::get('/programs_page', [ProgramController::class, 'pricing_page']);
Route::get('/single_program/{id}', [ProgramController::class, 'single_program']);
Route::get('/about_main_page', [HomeController::class, 'about_main_page']);
Route::get('/faq_page', [HomeController::class, 'faq_page']);
/*
======================================================================================
Main other pages End
====================================================================================
*/
//routes to handle enrolment form

Route::get('/Enrolment_page', [EnrolmentForm::class, 'Enrolment_page']);

//Route::get('/submit_enrollment_form', [EnrolmentForm::class, 'submit_enrollment_form']);

Route::post('/enrollment_form_sub', [EnrolmentForm::class, 'submit_enrollment_form']);
/*
======================================================================================
test form  submit_contact_form
====================================================================================
*/


Route::get('/testform', [AdminController::class, 'testform']);
Route::post('/submit_contact_form', [HomeController::class, 'submit_contact_form']);

/*
hadnling events
*/
Route::get('/all_events_view', [AdminController::class, 'all_events_view']); 
Route::get('/view_program', [ProgramController::class, 'view_program']);




////Handling admin programs




Route::get('/single_event/{id}', [AdminController::class, 'single_event'])->name('single_event');
///donate
Route::get('/donate', [AdminController::class, 'donate']);
