<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apply', function () {
    return view('new-applicants.insert-student');
})->name('example_ui');

Route::get('/apply/form', function () {
    return view('new-applicants.personal-form');
})->name('personal-form');

Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/user/profile', function () {
        return view('update-profile');
    })->name('home.profile');

    Route::get('/user/sessions', function () {
        return view('browser-sessions');
    })->name('home.sessions');

    Route::get('/user/update-password', function () {
        return view('change-password');
    })->name('home.update-password');

    Route::get('/user/enable2fa', function () {
        return view('enable-2fa');
    })->name('home.2fa');

    //role
    Route::get('user/role/system', [\App\Http\Controllers\SpaiRoleController::class, 'index'])->name('Role');
    Route::get('spai/staff/list', [\App\Http\Controllers\SpaiRoleController::class, 'staffList']);
    Route::get('user/role/edit/{id}', [\App\Http\Controllers\SpaiRoleController::class, 'edit']);
    Route::put('user/role/update/{id}', [\App\Http\Controllers\SpaiRoleController::class, 'update'])->name('update_role');

    //permission Sistem
    Route::get('user/permission/system', [\App\Http\Controllers\PermissionAssignController::class, 'index'])->name('Permission');
    Route::get('getlistrole', [\App\Http\Controllers\PermissionAssignController::class, 'getRoleList']);
    Route::get('user/permission/edit/{id}', [\App\Http\Controllers\PermissionAssignController::class, 'edit']);
    Route::put('user/permission/update/{id}', [\App\Http\Controllers\PermissionAssignController::class, 'update'])->name('update_permission');
    Route::get('user/permission/store', [\App\Http\Controllers\PermissionAssignController::class, 'store']);

    Route::get('/profile/update-password', function () {
        return view('adminlte::auth.passwords.reset');
    })->name('admin.categories');

    Route::get('/user/update-password', function () {
        return view('change-password');
    })->name('home.update-password');

    Route::get('/user/enable2fa', function () {
        return view('enable-2fa');
    })->name('home.2fa');

    Route::get('/profile/update-password', function () {
        return view('adminlte::auth.passwords.reset');
    })->name('admin.categories');

});
