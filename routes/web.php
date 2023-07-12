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

            Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
            Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
        });
        Route::group(['middleware' => ['auth']], function() {
            Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
        });

        #ADMIN
        Route::group(['middleware' => ['admin']], function () {
            Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admindashboard');

            #ORGANIZATION-DEPARTMENT
            
            Route::get('/organization/department', [App\Http\Controllers\Admin\DepartmentController::class, 'departmentorganization'])->name('organization.department');
            Route::post('/organization/department/store', [App\Http\Controllers\Admin\DepartmentController::class, 'storeorganization'])->name('organization.store');
            //Update
            Route::get('/department/edit/{id}', 'DepartmentController@edittransaction')->name('department.edit');
            Route::get('/department/edit/{id}', 'DepartmentController@updatetransaction')->name('department.edit');

            //Delete
            Route::get('/department/delete/{id}', 'DepartmentController@deletetransaction')->name('department.delete');

            #ORGANIZATION-DESIGNATION
            Route::get('/designation', [App\Http\Controllers\Admin\DesignationController::class, 'index'])->name('designation');

            #EMPLOYEES-EMPLOYEE
            Route::get('/employee', [App\Http\Controllers\Admin\EmployeeController::class, 'index'])->name('employee');

            #EMPLOYEES-INACTIVE USER
            Route::get('/inactiveuser', [App\Http\Controllers\Admin\InactiveUserController::class, 'index'])->name('inactiveuser');

             #LEAVE-HOLIDAY
            Route::get('/holiday', [App\Http\Controllers\Admin\HolidayController::class, 'index'])->name('holiday');

            #LEAVE-LEAVE TYPE
            Route::get('/leavetype', [App\Http\Controllers\Admin\LeaveTypeController::class, 'index'])->name('leavetype');

            #LEAVE-LEAVE APPLICATION
            Route::get('/leaveapplication', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'index'])->name('leaveapplication');

            #LEAVE-EARNED LEAVE
            Route::get('/earnedleave', [App\Http\Controllers\Admin\EarnedleaveController::class, 'index'])->name('earnedleave');

            #LEAVE-REPORT
            Route::get('/report', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('report');

            #NOTICE
            Route::get('/notice', [App\Http\Controllers\Admin\NoticeController::class, 'index'])->name('notice');

            #SETTINGS
            Route::get('/accountsettings', [App\Http\Controllers\Admin\AccountSettingController::class, 'index'])->name('accountsettings');


        });

       

        #USER
        Route::group(['middleware' => ['user']], function () {
            Route::get('/user', [App\Http\Controllers\Cashier\UserController::class, 'index'])->name('userdashboard');
        });


});



