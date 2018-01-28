<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'LoginController@index')->name('home');
Route::get('/make_appointment/{id}', 'AppointmentController@appointment');
Route::post('/appoint', 'AppointmentController@createAppointment');
Route::get('/logout', 'AppointmentController@logout')->name('logout');
Route::get('/appointment', 'AppointmentController@myappointments');
Route::get('/prescriptions','PrescriptionController@manageStdPrescription');

Route::get('/appointment/today','AppointmentController@appointmentDocToday');
Route::get('/appointment/upcoming','AppointmentController@appointmentDocUpcoming');
Route::post('/prescription/create','PrescriptionController@createPrescription');
Route::post('/prescription/submit','PrescriptionController@submitPrescription');
Route::get('/appointment/decline/{id}','AppointmentController@decline');
Route::get('/prescription/view/{id}','PrescriptionController@viewPrescription');

Route::get('/prescription/manage','PrescriptionController@manageView');
Route::post('/prescription/new','PrescriptionController@manage');




Route::delete('/appointment/{id}', 'AppointmentController@destroy')->name('appointment.delete');


Route::get('student','StudentController@index')->name('student.index');
Route::get('student/create','StudentController@create')->name('student.create');
Route::post('student','StudentController@store')->name('student.store');
Route::get('student/{id}/edit', 'StudentController@edit')->name('student.edit');
Route::get('student/{id}/show', 'StudentController@show')->name('student.show');
Route::put('student/{id}', 'StudentController@update')->name('student.update');
Route::delete('student/{id}', 'StudentController@delete')->name('student.delete');


Route::get('doctor','DoctorController@index')->name('doctor.index');
Route::get('doctor/create','DoctorController@create')->name('doctor.create');
Route::post('doctor','DoctorController@store')->name('doctor.store');
//Route::get('doctor/{id}/edit', 'DoctorController@edit')->name('doctor.edit');
//Route::get('doctor/{id}/show', 'DoctorController@show')->name('doctor.show');
//Route::put('doctor/{id}', 'DoctorController@update')->name('doctor.update');
Route::delete('doctor/{id}', 'DoctorController@delete')->name('doctor.delete');



Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));