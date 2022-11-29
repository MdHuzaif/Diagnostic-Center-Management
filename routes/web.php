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

//Backend routes.........

Route::get('/','AdminController@index');

Route::get('/dashboard','SuperAdminController@index');

Route::post('/admin-dashboard','AdminController@dashboard');

Route::get('/logout','SuperAdminController@logout');

//new admin
Route::get('/add-admin','AdminController@add_admin');
Route::post('/save-newadmin','AdminController@save_newadmin');

//admin change

Route::get('/change-admin','AdminController@change_admin');
Route::post('/save-change-admin','AdminController@save_change_admin');

//doctorsection

//insert
Route::get('/add-doctor','DoctorController@add_doctor');
Route::post('/save-doctor','DoctorController@save_doctor');

//display
Route::get('/display-doctor','DoctorController@display_doctor');

//delete
Route::get('/delete-doctor/{doctor_id}','DoctorController@delete_doctor');

//update 
Route::get('/update-doctor/{doctor_id}','DoctorController@update_doctor');
Route::post('/save-update/{doctor_id}','DoctorController@save_update');

//patient appointment section

//insert

Route::get('/add-b-patient','AppointController@add_b_patient');
Route::post('/save-b-patient','AppointController@save_b_patient');

//display
Route::get('/display-b-patient','AppointController@display_b_patient');

//delete
Route::get('/delete-b-patient/{b_patient_id}','AppointController@delete_b_patient');

//update 
Route::get('/update-b-patient/{b_patient_id}','AppointController@update_b_patient');
Route::post('/save-update-b-patient/{b_patient_id}','AppointController@save_update_b_patient');

//reception

//login

Route::get('/reception','ReceptionController@reception_index');
Route::post('/reception-dashboard','ReceptionController@reception_dashboard');
//Route::get('/dashboard','SuperAdminController@index');  ai 2 ta uporei ase....same use korci receptionist ar jonno
//Route::get('/logout','SuperAdminController@logout');

//insert

Route::get('/add-reception','ReceptionController@add_reception');
Route::post('/confirm-reception','ReceptionController@confirm_reception');

//display
Route::get('/display-reception','ReceptionController@display_reception');

//delete
Route::get('/delete-reception/{reception_id}','ReceptionController@delete_reception');

//update 
Route::get('/update-reception/{reception_id}','ReceptionController@update_reception');
Route::post('/save-update-reception/{reception_id}','ReceptionController@save_update_reception');

//diagnostic

//insert
Route::get('/add-t-patient','DiagnosController@add_t_patient');
Route::post('/save-t-patient','DiagnosController@save_t_patient');

//display

Route::get('/display-t-patient','DiagnosController@display_t_patient');

//delete
Route::get('/delete-t-patient/{t_patient_id}','DiagnosController@delete_t_patient');

//update

Route::get('/update-t-patient/{t_patient_id}','DiagnosController@update_t_patient');
Route::post('/save-update-t-patient/{t_patient_id}','DiagnosController@save_update_t_patient');

//new test

//insert
Route::get('/add-test','TestController@add_Test');
Route::post('/save-test','TestController@save_Test');

//display
Route::get('/display-test','TestController@display_test');

//delete
Route::get('/delete-test/{test_id}','TestController@delete_test');

//update 
Route::get('/update-test/{test_id}','TestController@update_test');
Route::post('/save-update-test/{test_id}','TestController@save_update_test');