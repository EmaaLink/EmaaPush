<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LinkController;
use App\Mail\WelcomeMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/home', function () {
    return view('welcome');
});



	
require __DIR__.'/auth.php';

//Auth::routes(['verify'=>true]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::get('/calendar', function(){

	return view('calendar');
});

Route::get('/add_links_dashboard', [LinkController::class,'create'])->name('add_links');

Route::post('/add_links_dashboard', [LinkController::class,'store'])->name('add_links');


Route::get('/list_admin',[AdminController::class, 'index'])->name('list_admin');
Route::get('/create_admin',[AdminController::class, 'create'])->name('create_admin');

Route::post('/create_admin',[AdminController::class, 'store'])->name('store_admin');

Route::get('/list_student',[StudentController::class, 'index'])->name('list_student');

Route::get('/create_student',[StudentController::class, 'create'])->name('create_student');

Route::post('/create_student',[StudentController::class, 'store'])->name('store_student');


Route::get('/list_teacher',[RegisterTeacherController::class, 'index'])->name('list_teacher');

Route::get('/create_teacher',[RegisterTeacherController::class, 'create'])->name('create_teacher');

Route::get('/list_tutor',[RegisterTutorController::class, 'index'])->name('list_tutor');

Route::get('/create_tutor',[RegisterTutorController::class, 'create'])->name('create_tutor');



Route::get('/register', [RegisteredUserController::class, 'index'])
                
                ->middleware('auth')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'create'])
                
                ->middleware('auth')
                ->name('register');

s


Route::get('/table', function(){

	return view('table');
});

Route::get('/add_section', function(){

    return view('table');
});


Route::get('/add-section', [DashboardController::class, 'addSection']);

Route::get('/add-categ/{id}', [DashboardController::class, 'addCateg']);


// duplicated line for testing

Route::get('/add-categ/{id}', [DashboardController::class, 'addCateg']);
                
                




/*Route::post('/logout',[LogoutUserController::class, 'logout'])->name('logout'); logout*/ 
