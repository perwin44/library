<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/home',[AdminController::class,'index'])->middleware(['auth','admin']);

Route::get('/category_page',[AdminController::class,'category_page'])->middleware(['auth','admin']);
Route::post('/add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);
Route::get('/cat_delete/{id}',[AdminController::class,'cat_delete'])->middleware(['auth','admin']);
Route::get('/edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);
Route::post('/update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);

Route::get('/add_book',[AdminController::class,'add_book'])->middleware(['auth','admin']);
Route::post('/store_book',[AdminController::class,'store_book'])->middleware(['auth','admin']);
Route::get('/show_book',[AdminController::class,'show_book'])->middleware(['auth','admin']);
Route::get('/book_delete/{id}',[AdminController::class,'book_delete'])->middleware(['auth','admin']);
Route::get('/edit_book/{id}',[AdminController::class,'edit_book'])->middleware(['auth','admin']);
Route::post('/update_book/{id}',[AdminController::class,'update_book'])->middleware(['auth','admin']);

Route::get('/book_details/{id}',[HomeController::class,'book_details']);
Route::get('/borrow_books/{id}',[HomeController::class,'borrow_books']);

Route::get('/borrow_request',[AdminController::class,'borrow_request'])->middleware(['auth','admin']);
Route::get('/approved_book/{id}',[AdminController::class,'approved_book'])->middleware(['auth','admin']);
Route::get('/return_book/{id}',[AdminController::class,'return_book'])->middleware(['auth','admin']);
Route::get('/rejected_book/{id}',[AdminController::class,'rejected_book'])->middleware(['auth','admin']);

Route::get('/book_history',[HomeController::class,'book_history']);
Route::get('/cancel_req/{id}',[HomeController::class,'cancel_req']);
Route::get('/explore',[HomeController::class,'explore']);
Route::get('/search',[HomeController::class,'search']);
Route::get('/cat_search/{id}',[HomeController::class,'cat_search']);
