<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;



Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});
Route::get('/offline', function () {
    return view('vendor/laravelpwa/offline');
    
});

Auth::routes(['register' => true]);


// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::redirect('/', '/login')->name('home');
    // Permissions
    
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');


    }


});

Route::post('password', 'ResidentialCustomerController@store')->name('register.employees');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('loguin', [App\Http\Controllers\HomeController::class, 'loguin'])->name('loguin');

Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/call', [App\Http\Controllers\CallController::class, 'index']);
    Route::get('/eps/create', [App\Http\Controllers\EpsController::class, 'create']);
    Route::post('/eps/created', [App\Http\Controllers\EpsController::class, 'store'])->name('EpsCreate');

    Route::get('/pqrs/create', [App\Http\Controllers\PqrsController::class, 'create']);
    Route::post('/pqrs/created', [App\Http\Controllers\PqrsController::class, 'store'])->name('PqrsCreate');
});