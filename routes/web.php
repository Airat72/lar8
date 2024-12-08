<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin/mortgages', Admin\MortgageController::class)->names('admin.mortgages');
Route::get('/public/mortgages', [Public\MortgageControllerr::class, 'index'])->name('public.mortgages.index');
Route::get('/public/mortgages/{mortgage}', [Public\MortgageControllerr::class, 'show'])->name('public.mortgages.show');