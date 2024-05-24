<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\employee\WalletController as EmployeeWalletController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\formData\CountryController;
use App\Http\Controllers\admin\formData\LanguageController;
use App\Http\Controllers\admin\formData\ProgramCategoryController;
use App\Http\Controllers\admin\formData\RequiredDocController;
use App\Http\Controllers\admin\front\AboutController;
use App\Http\Controllers\admin\front\ContactController;
use App\Http\Controllers\admin\front\GalleryController;
use App\Http\Controllers\admin\front\SliderController;
use App\Http\Controllers\admin\NotificationController;
use App\Http\Controllers\admin\ProgramController;
use App\Http\Controllers\admin\student\DueController;
use App\Http\Controllers\admin\student\WalletController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\SubscriberController;
use App\Http\Controllers\admin\UniversityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Admin Auth
Route::post('/adminLogin', [AuthController::class, 'login']);
//Universities
Route::get('/getAllUni', [UniversityController::class, 'getUnis']);
Route::get('/admin/university/single/{id}', [UniversityController::class, 'getSingleUni']);
//Porgrams
Route::get('/getAllProgs', [ProgramController::class, 'getPrograms']);
Route::get('/admin/prog/single/{id}', [ProgramController::class, 'single']);
//Students
Route::get('/getAllStudents', [StudentController::class, 'getStudent']);
Route::get('/admin/student/single/{id}', [StudentController::class, 'getSingleStudentDetails']);
//Employees
Route::get('/getAllEmployees', [EmployeeController::class, 'getEmployee']);
Route::get('/admin/employee/single/{id}', [EmployeeController::class, 'getEmployeeSingle']);
//Admin Notifications
Route::get('/getAdminNotifications', [NotificationController::class, 'getAll']);


//Event Resource Routes
Route::resource('/event', EventController::class);
//About Route
Route::resource('/about', AboutController::class);
Route::post('/about/updateAbout/{id}', [AboutController::class, 'updateAbout']);
//Slider Route
Route::resource('/slider', SliderController::class);
Route::post('/slider/storeSlider', [SliderController::class, 'storeSlide']);
Route::put('/slider/uploadImage/{id}', [SliderController::class, 'updateImage']);
//Contact
Route::resource('/contact', ContactController::class);
//Gallery
Route::resource('/gallery', GalleryController::class);
//News letter Subscribers
Route::get('/getAllSubs', [SubscriberController::class, 'getAll']);
//Countries
Route::get('/getAllCounts', [CountryController::class, 'getAll']);
//Languages Teaching
Route::get('/getAllLangs', [LanguageController::class, 'index']);
//Program Categories
Route::get('/getAllCats', [ProgramCategoryController::class, 'index']);
//Required Documents Form DOC model
Route::get('/getAllDocs', [RequiredDocController::class, 'index']);
//Admin-Student Wallet Routes
//GetAllActiveWallets
Route::get('/admin/getAllActiveWallets', [WalletController::class, 'index']);
//GEt Wise TOPUPS Transactions And Requests
Route::get('/admin/getStudentWiseTopUps', [WalletController::class, 'allWiseTopUpRequests']);
//Get All Wallets Transactions like Summary
Route::get('/admin/getAllWalletsTransaction', [WalletController::class, 'getAllWalletsTransactions']);
//Get Singel Wallet Data
Route::get('/admin/getStudentSingleWallet/{id}', [WalletController::class, 'getWalletDataSingle']);
//Get All Due Amounts
Route::get('/admin/getAllDue', [DueController::class, 'index']);
Route::post('/due/storeDue', [DueController::class, 'createDue']);
//Admin Employee Routes
Route::get('/admin/getAllEmpWallets', [EmployeeWalletController::class, 'index']);
Route::get('/admin/getSingelEmployeeWallet/{id}', [EmployeeWalletController::class, 'getSingle']);
Route::get('/admin/employee/getAllTransaciton', [EmployeeWalletController::class, 'getAllTransactions']);
Route::get('/admin/employee/getAllWidthraw', [EmployeeWalletController::class, 'getAllWidthraws']);
