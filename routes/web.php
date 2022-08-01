<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AuthController;

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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/profile', function () {
        return view('profile');
    });
Route::get('/project', function () {
        return view('project');
    });

    Route::view('/contact','contact');
    Route::post('FeedbackController',[FeedbackController::class,'add']);

Route::get('/todo', function () {
        return view('todo');
    });

Route::view('/blur','/blur');
Route::post('/process', function () {
        return view('/process');
    });
Route::get('/card', function () {
        return view('card');
    });
Route::get('/stopwatch', function () {
        return view('stopwatch');
    });
Route::get('/wordcount', function () {
        return view('wordcount');
    });

    // Route::get('feedback.showpdf', function () {
    //     return view('feedback.showpdf');
    // });
//feedback activity
Route::get('feedback.layout',[FeedbackController::class,'display'])->middleware('isLoggedIn');
//authentication activity
//login
Route::get('auth.login',[AuthController::class,'login'])->middleware('alreadyloggedin');
Route::post('login-user',[AuthController::class,'loginUser'])->name('login-user');
//registration
Route::get('auth.registration',[AuthController::class,'registration'])->middleware('alreadyloggedin');
Route::post('register-user',[AuthController::class,'registerUser'])->name('register-user');
//dashboard
Route::get('panel.dashboard',[AuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('logout',[AuthController::class,'logout']);

//operation-or-action
Route::get('delete/{id}',[FeedbackController::class,'destroy'])->middleware('isLoggedIn');
Route::get('show/{id}',[FeedbackController::class,'show'])->middleware('isLoggedIn');
Route::get('pdf/{id}',[FeedbackController::class,'pdfGenerate'])->middleware('isLoggedIn');
Route::get('excel/{id}',[FeedbackController::class,'excel'])->middleware('isLoggedIn');
Route::get('emailreply/{id}',[FeedbackController::class,'replyMe'])->middleware('isLoggedIn');
Route::get('feedback.mail',[FeedbackController::class,'mailSystem'])->middleware('isLoggedIn');
Route::post('/FeedbackController/{id}',[FeedbackController::class,'mailSystem'])->middleware('isLoggedIn');