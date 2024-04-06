<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;



//teachers Dashboard
Route::get('/',[TeacherController::class,'dashboard'])->name('dashboard');
Route::get('loadStudentData',[TeacherController::class,'loadStudentData'])->name('loadStudentData');
Route::post('Attendence',[TeacherController::class,'Attendence'])->name('Attendence');


//AdminController:
Route::get('addNewStudent',[AdminController::class,'addStudent'])->name('addNewStudentForAdmission');

Route::post('storeNewStudent',[AdminController::class,'storeNewStudent'])->name('storeNewStudent');

Route::get('deleteStudent',[AdminController::class,'deleteStudent'])->name('deleteStudent');
Route::get('deleteStudenti/{id}',[AdminController::class,'deleteStudenti'])->name('deleteStudenti');

Route::get('allStudent',[AdminController::class,'allStudent'])->name('allStudent');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');


});
