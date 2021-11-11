<?php
use App\Models\Post;
use App\Http\Controllers\addController;
use Illuminate\Support\Facades\Route;

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
/*Route::group(['middleware' => 'auth'], function () {*/

Route::get('/addproduct',[addController::class,'index'])->name('addproduct');
Route::get('/layout/add',[addController::class,'index_view']);
Route::post('/layout/add',[addController::class,'store']);
Route::get('/layout/edit/{id_product}',[addController::class,'edit']);
Route::patch('/layout/edit/{id_product}',[addController::class,'update']);
Route::delete('/product/{id_product}',[addController::class,'destroy'])->name('delete_product');


//});
//Route::resource('posts', addController::class);