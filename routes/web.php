<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
    return view('frontend.welcome');
});

//Admin
// Route::group(['prefix'=>'admin', 'middleware'=>['admin:admin']], function(){
//     Route::get('/login', [AdminController::class, 'loginForm']);
//     Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
// });

// Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//User
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/stock-list/view', [FrontendController::class, 'stocklistView'])->name('stocklist.view');
Route::get('/stock-list/add', [FrontendController::class, 'stocklistAdd'])->name('stocklist.add');
Route::post('/stock-list/store', [FrontendController::class, 'stocklistStore'])->name('stocklist.store');
Route::get('/stock-list/edit/{id}', [FrontendController::class, 'stocklistEdit'])->name('stocklist.edit');
Route::post('/stock-list/update', [FrontendController::class, 'stocklistUpdate'])->name('stocklist.update');
Route::get('/stock-list/delete/{id}', [FrontendController::class, 'stocklistDelete'])->name('stocklist.delete');


Route::get('/stock-in/view', [FrontendController::class, 'stockinView'])->name('stockin.view');
Route::get('/stock-in/view/{id}', [FrontendController::class, 'stockinView2'])->name('stockin.view2');
Route::get('/stock-in/add/{id}', [FrontendController::class, 'stockinAdd'])->name('stockin.add');
Route::post('/stock-in/store', [FrontendController::class, 'stockinStore'])->name('stockin.store');


Route::get('/stock-out/view', [FrontendController::class, 'stockoutView'])->name('stockout.view');
Route::get('/stock-out/view/{id}', [FrontendController::class, 'stockoutView2'])->name('stockout.view2');
Route::get('/stock-out/add/{id}', [FrontendController::class, 'stockoutAdd'])->name('stockout.add');
Route::post('/stock-out/store', [FrontendController::class, 'stockoutStore'])->name('stockout.store');


Route::get('/stock-record/view/{id}', [FrontendController::class, 'stockrecordView'])->name('stockrecord.view');
