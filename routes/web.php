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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Teacher
Route::get('/teacher/createform', [App\Http\Controllers\TeacherController::class, 'CreateTeacherForm'])->name('CreateTeacherForm');
Route::post('/teacher/create', [App\Http\Controllers\TeacherController::class, 'CreateTeacher'])->name('CreateTeacher');
Route::get('/student/form', [App\Http\Controllers\StudentController::class, 'StudentForm'])->name('StudentForm');
Route::post('/student/create', [App\Http\Controllers\StudentController::class, 'FormSubmit'])->name('FormSubmit');
Route::get('/employee/createform', [App\Http\Controllers\EmployeeController::class, 'EmployeeView'])->name('EmployeeView');
Route::post('/employee/create', [App\Http\Controllers\EmployeeController::class, 'EmloyeeCreate'])->name('EmloyeeCreate');
Route::get('/batool/view', [App\Http\Controllers\BatoolController::class, 'BatoolView'])->name('BatoolView');
Route::post('/batool/create', [App\Http\Controllers\BatoolController::class, 'BatoolCreate'])->name('BatoolCreate');
Route::get('/teacher/show', [App\Http\Controllers\TeacherController::class, 'TeacherShow'])->name('TeacherShow');
Route::get('/student/show', [App\Http\Controllers\StudentController::class, 'StudentShow'])->name('StudentShow');
Route::patch('/teacher/delete/{teacher}', [App\Http\Controllers\TeacherController::class, 'TeacherDelete'])->name('TeacherDelete');
Route::get('/teacher/edit/{teacher}', [App\Http\Controllers\TeacherController::class, 'EditTeacher'])->name('EditTeacher');
Route::patch('/teacher/edited/{teacher}', [App\Http\Controllers\TeacherController::class, 'EditedTeacher'])->name('EditedTeacher');
Route::patch('/student/delete/{student}', [App\Http\Controllers\StudentController::class, 'StudentDelete'])->name('StudentDelete');
Route::get('/student/edit/{student}', [App\Http\Controllers\StudentController::class, 'StudentEdit'])->name('StudentEdit');
Route::patch('/student/updated/{student}', [App\Http\Controllers\studentController::class, 'StudentUpdated'])->name('StudentUpdated');
