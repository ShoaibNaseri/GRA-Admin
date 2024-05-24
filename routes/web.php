<?php

use App\Http\Controllers\admin\formData\CountryController;
use App\Http\Controllers\admin\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('admin/{any?}', function () {
//     return view('admin.home');
// })->where('any', '.*');
Route::get('{any}', function () {
    return view('admin.home');
})->where('any', '.*');
