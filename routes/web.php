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
Route::get('/logout', 'AppointmentController@logout');
Route::get('/appointment', 'AppointmentController@myappointments');
Route::get('/prescriptions',function(){
	return view('students/prescriptions');
});

Route::get('/appointment/today','AppointmentController@appointmentDocToday');
Route::get('/appointment/upcoming','AppointmentController@appointmentDocUpcoming');
Route::post('/prescription/create','PrescriptionController@createPrescription');
Route::post('/prescription/submit','PrescriptionController@submitPrescription');

Route::get('/prescription',function(){
	return view('doctors/prescription');
});

Route::get('/prescription/manage',function(){
	return view('doctors/manage_prescription');
});
Route::delete('/appointment/{id}', 'AppointmentController@destroy')->name('appointment.delete');


