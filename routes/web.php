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


            Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
            Route::post('/register', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

        });
        Route::group(['middleware' => ['auth']], function() {
            Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
        });

        #ADMIN
        Route::group(['middleware' => ['admin']], function () {
            Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admindashboard');
            Route::get('/ams', [App\Http\Controllers\ams\amsController::class, 'index'])->name('ams');
            Route::get('/printdtr', [App\Http\Controllers\ams\PrintDTRController::class, 'index'])->name('printdtr.index');
            Route::get('/printdtr/{id}/{month}/{year}', [App\Http\Controllers\ams\PrintDTRController::class, 'printdtr'])->name('printdtr');
            Route::get('/attendances', [App\Http\Controllers\ams\attendancesController::class, 'index'])->name('attendances');
            Route::get('/attendances/{employeeId}', [App\Http\Controllers\ams\attendancesController::class, 'showWorkingHoursList'])->name('attendancesworkinghours');
            // routes/web.php

            Route::post('/attendances/import/csv', [App\Http\Controllers\ams\attendancesController::class, 'import_csv'])->name('importcsv');


            #EMPLOYEES-EMPLOYEE
            Route::get('/admin/employees/employee', [App\Http\Controllers\Admin\EmployeeController::class, 'employeeemployees'])->name('employee.employees');

            //add
            Route::get('/employees/employee/add', [App\Http\Controllers\Admin\EmployeeController::class, 'addemployee'])->name('employee.add');
            Route::post('/employees/employee/store', [App\Http\Controllers\Admin\EmployeeController::class, 'storeemployee'])->name('employee.store');

            //Update
            Route::get('/employee/index/edit/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'editemployee'])->name('employee.edit');
            Route::post('/employee/index/edit/store', [App\Http\Controllers\Admin\EmployeeController::class, 'updateemployee'])->name('employee.edit.store');

            //View
            Route::get('/employee/index/view/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'viewemployee'])->name('employee.view');
            Route::post('/employee/index/view', [App\Http\Controllers\Admin\EmployeeController::class, 'viewemployee'])->name('employee.edit.view');
  


            
            #EMPLOYEES-INACTIVE USER
            Route::get('/inactiveuser', [App\Http\Controllers\Admin\InactiveUserController::class, 'index'])->name('inactiveuser');

            #LEAVE-HOLIDAY
           Route::get('/leave/holiday', [App\Http\Controllers\Admin\HolidayController::class, 'holidayleave'])->name('leave.holiday');
            Route::post('/leave/holiday/store', [App\Http\Controllers\Admin\HolidayController::class, 'storeholiday'])->name('holiday.store');

            //Update
            Route::get('/holiday/index/edit/{id}', [App\Http\Controllers\Admin\HolidayController::class, 'editholiday'])->name('holiday.edit');
            Route::post('/holiday/index/edit/store', [App\Http\Controllers\Admin\HolidayController::class, 'updateholiday'])->name('holiday.edit.store');

            //Delete
            Route::get('/holiday/index/delete/{id}', [App\Http\Controllers\Admin\HolidayController::class, 'deleteholiday'])->name('holiday.delete');
            Route::post('/holiday/index/delete', [App\Http\Controllers\Admin\HolidayController::class, 'deleteholiday'])->name('holiday.delete');

            #LEAVE-LEAVE APPLICATION
            Route::get('/leaveapplication', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'index'])->name('leaveapplication');

            #LEAVE-EARNED LEAVE
             Route::get('/leave/earnedleave', [App\Http\Controllers\Admin\EarnedLeaveController::class, 'earnedleaveleave'])->name('leave.earnedleave');
            Route::post('/leave/earnedleave/store', [App\Http\Controllers\Admin\EarnedLeaveController::class, 'storeearnedleave'])->name('earnedleave.store');

            #LEAVE-REPORT
            Route::get('/report', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('report');

            #NOTICE
            Route::get('/notice', [App\Http\Controllers\Admin\NoticeController::class, 'index'])->name('notice');
            Route::post('/notice', [App\Http\Controllers\Admin\NoticeController::class, 'storenotice'])->name('notice.store');

            //Update
            Route::get('/notice/index/edit/{id}', [App\Http\Controllers\Admin\NoticeController::class, 'editnotice'])->name('notice.edit');
            Route::post('/notice/index/edit/store', [App\Http\Controllers\Admin\NoticeController::class, 'updatenotice'])->name('notice.edit.store');

            //Delete
            Route::get('/notice/index/delete/{id}', [App\Http\Controllers\Admin\NoticeController::class, 'deletenotice'])->name('notice.delete');
            Route::post('/notice/index/delete', [App\Http\Controllers\Admin\NoticeController::class, 'deletenotice'])->name('notice.delete');

            #SETTINGS
            Route::get('/accountsetting', [App\Http\Controllers\Admin\AccountSettingController::class, 'index'])->name('accountsetting');
            Route::post('/accountsetting/add/store', [App\Http\Controllers\Admin\AccountSettingController::class, 'storeaccountsetting'])->name('accountsetting.store');
        });

       
        #USER
        Route::group(['middleware' => ['user']], function () {
            Route::get('/user', [App\Http\Controllers\User\UserController::class, 'index'])->name('userdashboard');
             Route::get('user/dashboard/notice', 'UserController@showNoticeBoard');

             #NOTICE
            Route::get('/user/notice', [App\Http\Controllers\User\NoticeController::class, 'index'])->name('usernotice');
            
             #LEAVE-HOLIDAY
            Route::get('/user/leave/holiday', [App\Http\Controllers\User\HolidayController::class, 'holidayleave'])->name('userleave.holiday');

            #LEAVE-EARNED LEAVE
             Route::get('/user/leave/earnedleave', [App\Http\Controllers\User\EarnedLeaveController::class, 'earnedleaveleave'])->name('userleave.earnedleave');

            #EMPLOYEES-PROFILE
            Route::get('/user/employees/profile', [App\Http\Controllers\User\EmployeeController::class, 'employeeemployees'])->name('useremployee.employees');
            Route::post('/user/employees/profile/store', [App\Http\Controllers\User\EmployeeController::class, 'storeemployee'])->name('useremployee.store');

            //Update
            Route::get('/user/employee/index/edit/{id}', [App\Http\Controllers\User\EmployeeController::class, 'editemployee'])->name('useremployee.edit');
            Route::post('/user/employee/index/edit/store', [App\Http\Controllers\User\EmployeeController::class, 'updateemployee'])->name('useremployee.edit.store');

            #LEAVE-LEAVE APPLICATION
            Route::get('/user/leaveapplication', [App\Http\Controllers\User\LeaveApplicationController::class, 'index'])->name('userleaveapplication');

            #MYPROFILE
            Route::get('/user/myprofile', [App\Http\Controllers\User\MyProfileController::class, 'index'])->name('usermyprofile');
        });
});
