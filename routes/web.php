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

Route::get('/', 'PagesController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/report/{param}', ['uses' => 'PagesController@report'])->name('all.report');

// Employee Login Routes >>>>>>>>>>>>>>>>>>>>>>>>
Route::prefix('employee')->group(function(){
  // Login ROutes
  Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('employee.login');
  Route::post('/login', 'Auth\EmployeeLoginController@login')->name('employee.login.submit');

  // View Routes
  Route::get('/', 'EmployeeController@index')->name('employee.dashboard');
  Route::get('/assign', 'EmployeeController@assign')->name('employee.assign');
  Route::get('/files', 'EmployeeController@files')->name('employee.files');
  Route::get('/share', 'EmployeeController@share')->name('employee.share');
  Route::get('/intern', 'EmployeeController@intern')->name('employee.intern');
  Route::get('/notif', ['uses' => 'EmployeeController@getNotifications'])->name('employee.getNotifications');

  // Post Routes
  Route::post('/createTask', 'EmployeeController@createTask')->name('employee.createTask');
  Route::post('/createIntern', 'EmployeeController@createIntern')->name('employee.createIntern');
  Route::post('/grade/{tid}', ['uses' => 'EmployeeController@gradeWork'])->name('employee.gradeWork');

  // Download Routes
  Route::get('/download/{name}', 'EmployeeController@download')->name('employee.download');

  // Messages
  Route::get('/message/{id}', 'EmployeeController@getMessage')->name('employee.getMessage');
  Route::post('/message', 'EmployeeController@sendMessage')->name('employee.sendMessage');
});

// Admin Routees >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::prefix('admin')->group(function(){
  Route::get('/', 'AdminController@index')->name('admin.dash');
  Route::get('/view/{name}', ['uses' => 'AdminController@getView'])->name('admin.getView');
  Route::get('/work/{department}', 'AdminController@getWorks')->name('admin.work');
  Route::post('/create', 'AdminController@create')->name('admin.create');
  Route::post('/reset', 'AdminController@reset')->name('admin.reset');
});

// Intern Routes >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Route::prefix('intern')->group(function() {
  // Default Routes
  Route::get('/dashboard', 'InternController@index')->name('intern.dash');
  Route::get('/work/{filter}', ['uses' => 'InternController@work'])->name('intern.work');
  Route::get('/people', 'InternController@people')->name('intern.people');

  // Profile Routes
  Route::get('/profile/{id}', ['uses' => 'InternController@profile'])->name('intern.profile');
  Route::get('/settings', 'InternController@settings')->name('intern.settings');
  Route::get('/task/{id}', ['uses' => 'InternController@getTask'])->name('intern.task');
  
  // Upload Routes
  Route::post('/comment/{id}', ['uses' => 'InternController@uploadComment'])->name('intern.comment');
  Route::post('/upload', ['uses' => 'InternController@upload'])->name('intern.upload');
  Route::post('/taskupload/{tid}', ['uses' => 'InternController@taskupload'])->name('intern.taskupload');

  // Notificaation Routes
  Route::get('/notif', 'InternController@getNotifications')->name('intern.getNotifications');
  Route::get('/notif/{uid}/{id}', ['uses' => 'InternController@notif'])->name('intern.notif');
  Route::get('/dismiss', 'InternController@dismissNotif')->name('intern.dismiss');

  // Download Routes
  Route::get('/download/{name}', 'InternController@download')->name('intern.download');

  // Messages
  Route::get('/message/{id}', 'InternController@getMessage')->name('intern.getMessage');
  Route::post('/message', 'InternController@sendMessage')->name('intern.sendMessage');
});
