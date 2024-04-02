<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
        Route::get('/', function () {
            return redirect('/login');
        });
        Route::group(['middleware' => ['guest']], function() {
            Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
            Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');  

        });
        Route::group(['middleware' => ['auth']], function() {
            Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
        });

        #ADMIN
        Route::group(['middleware' => ['admin']], function () {
            Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admindashboard');

            #CATEGORY
            Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'category'])->name('categorydashboard');

            #USERS
            Route::get('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'users'])->name('usersdashboard');

            #ADD USER
            Route::get('/admin/users/add', [CustomAuthController::class, 'register'])->name('register');
            Route::post('admin/users/add', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

            #DOCUMENTTRACKER
            Route::get('/admin/documenttracker', [App\Http\Controllers\Admin\DocumentController::class, 'documenttracker'])->name('documenttrackerdashboard');
        });
});
