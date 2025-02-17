<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ThemeController;
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


// THEME ROUTES
Route::controller(ThemeController::class)->name('theme.')->group(function() {
    Route::get('/','index')->name('index');
    Route::get('/category/{id}','category')->name('category');
    Route::get('/contact','contact')->name('contact');
   
});

// SUBSCRIBER STORE  ROUTE
route::post('/subscriber/store',[SubscriberController::class,'store'])->name('subscribe.store');
// CONTACT STORE  ROUTE
route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');

// Blog   ROUTES
Route::get('/my-blogs',[BlogController::class,'myBlogs'])->name('blogs.my-blogs');
Route::resource('blogs', BlogController::class)->except('index');



// Commnet ROUTES
route::post('/comments/store',[CommentController::class,'store'])->name('comments.store');



require __DIR__.'/auth.php';
