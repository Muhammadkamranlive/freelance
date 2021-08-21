<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gigController;
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
    return view('Home1');
});

Route::get('cprofile',[gigController::class,'index']);


Route::post('/createprofile',[gigController::class,'creategig']);

Route::get('/createproject', function(){
    return view('createProject');
});
//Post Routes
Route::post('/proposal',[\App\Http\Controllers\projectController::class,'writeproposal']);
Route::post('/createJob',[\App\Http\Controllers\projectController::class,'createProject']);
//dispaly Routes
Route::get('/freelancer',[\App\Http\Controllers\displayController::class,'freelancer']);
Route::get('/projects',[\App\Http\Controllers\displayController::class,'DisplayProjects']);
Route::get('/detailproject/{id}',[\App\Http\Controllers\displayController::class,'detailProject']);
Route::get('/search',[\App\Http\Controllers\displayController::class,'search']);
Route::get('/detailprofile/{id}',[\App\Http\Controllers\projectController::class,'detailprofile']);
//display protected routes
Route::get('/buyerprojects',[\App\Http\Controllers\projectController::class,'DisplayProjects']);
Route::get('/projectbuyer/{id}',[\App\Http\Controllers\projectController::class,'BuyerDashboard']);
Route::get('/hire/{id}',[\App\Http\Controllers\projectController::class,'hire']);
Route::get('/orders/{id}',[\App\Http\Controllers\projectController::class,'ordersDispaly']);
Route::get("/seller",[\App\Http\Controllers\projectController::class,'displayGigs']);
Route::get('/delete/{id}',[\App\Http\Controllers\projectController::class,'profiledelete']);
Route::get('/update/{id}',[\App\Http\Controllers\projectController::class,'updateprofile']);
Route::post('/updated/{id}',[\App\Http\Controllers\projectController::class,'updated']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Srtipe Routes
Route::post('/stripe', [\App\Http\Controllers\StripeControlller::class,'stripePyament'])->name("stripe.post");
