<?php

use App\Http\Controllers\AssignShiftController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\StaffController;

Route::get('/',function(){
    return view('admin.index');
});

//Departments route
Route::prefix('/departments')->group(function(){
    Route::get('/',[DepartmentController::class,'index'])->name('departments');
    Route::get('/create',[DepartmentController::class,'create'])->name('department.create');
    Route::post('/store',[DepartmentController::class,'store'])->name('department.store');
    Route::post('/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
    Route::put('//update/{id}',[DepartmentController::class,'update'])->name('department.update');
    Route::delete('/delete/{id}',[DepartmentController::class,'destroy'])->name('department.delete');   
});

//Shifts route
Route::prefix('/shifts')->group(function(){
    Route::get('/',[ShiftController::class,'index'])->name('shifts');
    Route::get('/create',[ShiftController::class,'create'])->name('shift.create');
    Route::post('/store',[ShiftController::class,'store'])->name('shift.store');
    Route::get('/edit/{id}',[ShiftController::class,'edit'])->name('shift.edit');
    Route::put('/update/{id}',[ShiftController::class,'update'])->name('shift.update');
    Route::delete('/delete/{id}',[ShiftController::class,'destroy'])->name('shift.delete');
});

//Staffs route
Route::prefix('/staffs')->group(function(){
    Route::get('/',[StaffController::class,'index'])->name('staffs');
    Route::get('/view',[StaffController::class,'view'])->name('staffs.view');
    Route::get('/create',[StaffController::class,'create'])->name('staff.create');
    Route::post('/store',[StaffController::class,'store'])->name('staff.store');
    Route::get('/edit/{id}',[StaffController::class,'edit'])->name('staff.edit');
    Route::put('/update/{id}',[StaffController::class,'update'])->name('staff.update');
    Route::delete('/delete/{id}',[StaffController::class,'destroy'])->name('staff.delete');
});

//Shift-Allocation route
Route::prefix('/assign-shift')->group(function(){
    Route::get('/',[AssignShiftController::class,'index'])->name('assign-shift');
    Route::post('/get-shift-timing',[AssignShiftController::class,'getShiftTiming'])->name('get-shift-timing');
    Route::get('/create/{id}',[AssignShiftController::class,'create'])->name('assign-shift.create');
    Route::post('/store',[AssignShiftController::class,'store'])->name('assign-shift.store');
    Route::get('/edit/{id}',[AssignShiftController::class,'edit'])->name('assign-shift.edit');
    Route::put('/update/{id}',[AssignShiftController::class,'update'])->name('assign-shift.update');
    Route::delete('/delete/{id}',[AssignShiftController::class,'destroy'])->name('assign-shift.delete');
});