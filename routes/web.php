<?php

use Illuminate\Support\Facades\Route;


Route::get('/{any}', function () {
    return view('Welcome');
})->where('any', '.*')->name('application');
