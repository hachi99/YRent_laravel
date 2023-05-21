<?php

use App\Http\Controllers\FactController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\FlotController;
use App\Http\Controllers\OfficController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\InsurcarController;
use App\Http\Controllers\ReservController;
use App\Http\Controllers\SubscripController;
use App\Http\Controllers\PreciosController;
use App\Http\Controllers\ReservarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    //return view('dashboard');
    return view('admin.dashboard.index ');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::view('/index','index')->name('index');
Route::view('/pricing','pricing')->name('pricing');
Route::view('/rserv','rserv')->name('rserv');
Route::view('/ubic','ubic')->name('ubic');

route::view('/admin','admin.dashboard.index');

//route::view('/ad/fact','admin.fact.index');
//route::view('/ad/flot','admin.flot.index');
//route::view('/admin/insurcar','admin.insurcar.index');
//route::view('/admin/reserv','admin.reserv.index');
//route::view('/admin/offic','admin.offic.index');
//route::view('/admin/promotion','admin.promotion.index');
//route::view('/admin/subscrip','admin.subscrip.index');  
//route::view('/ad/custom','admin.custom.index');

Route::resource('/admin/custom',CustomController::class)->parameters(["customs"=>"custom"])->middleware(['auth']);
Route::resource('/admin/fact',FactController::class)->parameters(["facts"=>"fact"])->middleware(['auth']);
Route::resource('/admin/flot',FlotController::class)->parameters(["flots"=>"flot"])->middleware(['auth']);
Route::resource('/admin/offic',OfficController::class)->parameters(["offics"=>"offic"])->middleware(['auth']);
Route::resource('/admin/promotion',PromotionController::class)->parameters(["promotions"=>"promotion"])->middleware(['auth']);
Route::resource('/admin/insurcar',InsurcarController::class)->parameters(["insurcars"=>"insurcar"])->middleware(['auth']);
Route::resource('/admin/reserv',ReservController::class)->parameters(["reservs"=>"reserv"])->middleware(['auth']);
Route::resource('/admin/subscrip',SubscripController::class)->parameters(["subscrips"=>"subscrip"])->middleware(['auth']);

Route::get('/Precios', [App\Http\Controllers\PreciosController::class, 'show']);
route::view('/booking','reservar');
Route::post('/booking', [App\Http\Controllers\ReservarController::class, 'add']);
route::view('/Confirmacion','conf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
