<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/login');
})->name('login');

Route::prefix('pages')->group (function () {
    
    Route::get('/dashboard', function(){
    return view('pages/dashboard');
    })->name('dashboard');

    Route::get('/article', function(){
        return view('pages/article');
        })->name('article');
    
    Route::get('/sole', function(){
      return view('pages/sole');
      })->name('sole');
    
    Route::get('/upper',function(){
        return view('pages/upper');
    })->name('upper');

    Route::get('/user',function(){
        return view('pages/user');
    })->name('user');

    Route::get('/billing',function(){
        return view('pages/billing');
    })->name('billing');
});

?>