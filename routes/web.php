<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

;

Route::get('/language', function () {
    $locale = request('locale');
    if ($locale) {
        app()->setlocale($locale);
        Session::put('locale', $locale);
    }

    return redirect()->back()->withFallback(route('login'));
})->name('language.change');

Route::get('/login', function () {
    return view('login');
})->name('login');
