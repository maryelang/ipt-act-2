<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClassroomStudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamResultController;
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'create']);
Route::put('/user', [UserController::class, 'update']);
Route::delete('/user', [UserController::class, 'delete']);

Route::apiResource('/user', UserController::class); 

Route::resource('grades', GradeController::class);
Route::resource('parents', ParentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('classroom-students', ClassroomStudentController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('exam-types', ExamTypeController::class);
Route::resource('exams', ExamController::class);
Route::resource('exam-results', ExamResultController::class);