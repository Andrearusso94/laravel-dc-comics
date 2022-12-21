<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
//use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController as ProductController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

//Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');

// Route::resource('products', ProductController::class);

/*Route::get('/products', function () {
    return ('products');
})->name('products');*/



/*Route::get('/new', function () {
    return view('new');
})->name('new');
*/


//route CRUD
Route::resource('admin/products', ProductController::class);
