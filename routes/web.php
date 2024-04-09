<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

// Route::post('payment/authenticate', [App\Http\Controllers\FrontendController::class, 'make_payment']);
// Route::post('payment/store', [App\Http\Controllers\FrontendController::class, 'store_payment']);
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name("contact");
Route::get('about', [App\Http\Controllers\FrontendController::class, 'about'])->name("about");


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', 'UserController');

    Route::resource('permission', 'PermissionController');


    Route::get('/profile', 'UserController@profile')->name('user.profile');

    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');

    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');

    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');

    Route::prefix('setting')->group(function () {
        Route::get('/website-setting/edit', 'SettingController@edit')->name('website-setting.edit');
        Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
        // Route::get('/website-setting/edit', 		 [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('website-setting.edit');
        // Route::post('/website-setting/update/{id}',  [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('website-setting.update');
    });
});

Route::group(['middleware' => ['auth', 'role_or_permission:admin|create role|create permission']], function () {

    Route::resource('role', 'RoleController');
});

Auth::routes();

//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');