<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\StaffController;

Route::prefix('pilot')->name('pilot.')->group(function () {
	
    // Redirect /pilot → /pilot/login
    Route::get('/', function () {
        return redirect()->route('pilot.login');
    });

    // Login Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Protected Routes (Require Pilot Login)
    Route::middleware('auth:pilot')->group(function () {

       Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        // Roles
        Route::get('roles', [StaffController::class, 'roles'])->name('roles');
        Route::post('roles/store', [StaffController::class, 'store'])->name('roles.store');
        Route::post('roles/update/{role_id}', [StaffController::class,'update'])->name('roles.update');

         Route::get('role_permissions', [StaffController::class,'rolepermission'])->name('role_permissions');
         Route::get('/permissionsList', [StaffController::class, 'permissionsList'])->name('permissionsList');
Route::post('/pilot/logout', [LoginController::class, 'logout'])->name('pilot.logout');


    });
});