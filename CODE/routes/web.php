<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/user-detail','App\Http\Controllers\UserDetailsController')->middleware('auth');
Route::resource('/education','App\Http\Controllers\EducationController')->middleware('auth');
Route::resource('/experience','App\Http\Controllers\ExperienceController')->middleware('auth');
Route::resource('/skill','App\Http\Controllers\SkillController')->middleware('auth');
Route::resource('/project','App\Http\Controllers\ProjectController')->middleware('auth');
Route::resource('/certification','App\Http\Controllers\CertificationController')->middleware('auth');

Route::get('/resume',[App\Http\Controllers\ResumeController::class, 'index'])->name('resume.index');
Route::get('/resume/download',[App\Http\Controllers\ResumeController::class, 'download'])->name('resume.download');

Route::get('/resume1',[App\Http\Controllers\ResumeController::class, 'temp1Index'])->name('resume1.index');
Route::get('/resume1/download',[App\Http\Controllers\ResumeController::class, 'temp1Download'])->name('resume1.download');

Route::get('/resume2',[App\Http\Controllers\ResumeController::class, 'temp2Index'])->name('resume2.index');
Route::get('/resume2/download',[App\Http\Controllers\ResumeController::class, 'temp2Download'])->name('resume2.download');

Route::delete('/user/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');


