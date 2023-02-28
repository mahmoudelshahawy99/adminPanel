<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('companies', [CompanyController::class, 'index'])->name('company.index');
    Route::get('add-company', [CompanyController::class, 'create'])->name('company.create');
    Route::post('insert-company', [CompanyController::class, 'store'])->name('company.store');
    Route::get('edit-company/{id}', [CompanyController::class, 'edit']);
    Route::put('update-company/{id}', [CompanyController::class, 'update']);
    Route::get('delete-company/{id}', [CompanyController::class, 'destroy']);

    Route::get('employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('add-employee', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('insert-employee', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('edit-employee/{id}', [EmployeeController::class, 'edit']);
    Route::put('update-employee/{id}', [EmployeeController::class, 'update']);
    Route::get('delete-employee/{id}', [EmployeeController::class, 'destroy']);
});

require __DIR__.'/auth.php';
