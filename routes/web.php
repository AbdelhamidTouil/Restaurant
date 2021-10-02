<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\FoodController;
use App\Models\Food;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use App\Http\Controllers\ChefController;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


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

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

//Route::get('/languageDemo', 'App\Http\Controllers\IndexController@languageDemo');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//USer
route::namespace('User')->group(function(){
    Route::get('ShowUser',[UserController::class ,'ShowUser'])->name('ShowUser');
    Route::get('Delete/{id}',[UserController::class ,'Delete'])->name('Delete');
    Route::get('SearchUser',[UserController::class ,'SearchUser'])->name('SearchUser');
    });
//Index
route::namespace('Index')->group(function(){
Route::get('/',[IndexController::class ,'Index'])->name('Index');
Route::get('redirect',[IndexController::class ,'redirect'])->name('redirect');

});

//Food
route::namespace('Food')->group(function(){
    Route::get('ShowFood',[FoodController::class ,'ShowFood'])->name('ShowFood');
    Route::get('DeleteFood/{id}',[FoodController::class ,'DeleteFood'])->name('DeleteFood');
    Route::get('AddFood',[FoodController::class ,'AddFood'])->name('AddFood');
    Route::get('EditFood/{id}',[FoodController::class ,'EditFood'])->name('EditFood');
    Route::post('StoreFood',[FoodController::class ,'StoreFood'])->name('StoreFood');
    Route::post('UpdateFood/{id}',[FoodController::class ,'UpdateFood'])->name('UpdateFood');
    Route::get('SearchFood',[FoodController::class ,'SearchFood'])->name('SearchFood');
    
    });

    //Chef
route::namespace('Chef')->group(function(){
    Route::get('ShowChef',[ChefController::class ,'ShowChef'])->name('ShowChef');
    Route::get('AddChef',[ChefController::class ,'AddChef'])->name('AddChef');
    Route::get('EditChef/{id}',[ChefController::class ,'EditChef'])->name('EditChef');
    Route::post('UpdateChef/{id}',[ChefController::class ,'UpdateChef'])->name('UpdateChef');
    Route::post('StoreChef',[ChefController::class ,'StoreChef'])->name('StoreChef');
    Route::get('DeleteChef/{id}',[ChefController::class ,'DeleteChef'])->name('DeleteChef');
    Route::get('SearchChef',[ChefController::class ,'SearchChef'])->name('SearchChef');
    });

      //Reservation
route::namespace('Reservation')->group(function(){
    Route::get('ShowReservation',[ReservationController::class ,'ShowReservation'])->name('ShowReservation');
    Route::post('StoreReservation',[ReservationController::class ,'StoreReservation'])->name('StoreReservation');
    Route::get('DeleteReservation/{id}',[ReservationController::class ,'DeleteReservation'])->name('DeleteReservation');
    Route::get('SearchReservation',[ReservationController::class ,'SearchReservation'])->name('SearchReservation');
    });


    //Admin Dashbord
route::namespace('Dashbord')->group(function(){
    Route::get('ShowDashbord',[DashbordController::class ,'ShowDashbord'])->name('ShowDashbord');
    });

     //Cart
route::namespace('Cart')->group(function(){
    Route::get('ShowCart/{id}',[CartController::class ,'ShowCart'])->name('ShowCart');
    Route::get('DeleteCart/{id}',[CartController::class ,'DeleteCart'])->name('DeleteCart');
    Route::post('StoreCart/{id}',[CartController::class ,'StoreCart'])->name('StoreCart');
    
    });

     //Order
route::namespace('Order')->group(function(){
    Route::get('ShowOrder',[OrderController::class ,'ShowOrder'])->name('ShowOrder');
    Route::get('DeleteOrder/{id}',[OrderController::class ,'DeleteOrder'])->name('DeleteOrder');
    Route::post('orderconfirm',[OrderController::class ,'orderconfirm'])->name('orderconfirm');
    Route::get('SearchOrder',[OrderController::class ,'SearchOrder'])->name('SearchOrder');
    
    
    });