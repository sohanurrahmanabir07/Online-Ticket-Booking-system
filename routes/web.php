<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

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

Route::get('/home', function () {
    return view('/home');
});
Route::get('/login',[FlightController::class,'login'])->name('login');
Route::get('register',[FlightController::class,'reg'])->name('register');
Route::post('/register',[FlightController::class,'register'])->name('register');
Route::post('/new',[FlightController::class,'login_pass'])->name('login_pass');
Route::get('/search_flight',[FlightController::class,'search_flight'])->name('search_flight');
Route::get('/show_flights',[FlightController::class,'show_flights'])->name('show_flights');
Route::get('/third_page',[FlightController::class,'third']);
Route::post('/search_flight',[FlightController::class,'clicksearch'])->name('click');
Route::post('/confirmed_flight/{id}/{total_seat}',[FlightController::class,'third_page'])->name('third_page');
Route::get('/show',[FlightController::class,'data']);

Route::post('/payment_choose',[FlightController::class,'travellers_info'])->name('travellers_info');
Route::get('/payment',[FlightController::class,'pay'])->name('payment');
Route::get('/hey',[FlightController::class,'logout'])->name('logout');
Route::get('/bkash',[FlightController::class,'bkash'])->name('bkash');
Route::get('/nagad',[FlightController::class,'nagad'])->name('nagad');
Route::get('/visa',[FlightController::class,'visa'])->name('visa');
Route::get('/purchase_history',[FlightController::class,'purchase_history'])->name('p_hstry');
Route::get('/refund',[FlightController::class,'refund_req'])->name('refund');
Route::get('/payment_done',[FlightController::class,'ticket_done'])->name('ticket_done');
Route::get('/home',[FlightController::class,'home'])->name('home');
Route::get('/ticket',[FlightController::class,'ticket'])->name('ticket');


// -------------------------------------------Admin portion-------------------------------------------------------
Route::get('/admin_login',[AdminController::class,'admin_login'])->name('admin_login');
Route::post('/admin_login',[AdminController::class,'admin_login_pass'])->name('admin_login_pass');
Route::get('/admin_panel',[AdminController::class,'admin_dashboard'])->name('admin_panel');
Route::get('/admin_flight',[AdminController::class,'admin_flight'])->name('admin_flight');
Route::get('/add_flight',[AdminController::class,'add_flight_view'])->name('add_flight');
Route::get('/edit_flight',[AdminController::class,'edit_flight_view'])->name('edit_flight');
Route::post('/registering_flight',[AdminController::class,'new_flight'])->name('new_flight');
Route::get('/edit_flight_search',[AdminController::class,'edit_flight_search_view'])->name('flight_edit_search');
Route::post('/edit_flight',[AdminController::class,'edit_flight'])->name('search_edit_flight');