<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('sendsms');
});
Route::get('/home', 'HomeController@index');

Route::get('/contact', 'HomeController@contact');
Route::post('/createcontact', 'HomeController@createcontact');
Route::get('/fetcheditcontact/{uid}','HomeController@fetcheditcontact');
Route::post('/editcontact/{uid}','HomeController@editcontact');
Route::post('/searchcontact','HomeController@searchcontact');
Route::get('/contactexcelupload','HomeController@contactexcelupload');
// Route::post('/importexcel','HomeController@importexcel');
Route::post('importexcel',array('as'=>'importexcel','uses'=>'HomeController@importexcel'));


Route::get('/group', 'GroupController@group');
Route::post('/creategroup', 'GroupController@creategroup');
Route::get('/fetcheditgroup/{uid}','GroupController@fetcheditgroup');
Route::post('/editgroup/{egid}','GroupController@editgroup');
Route::post('/searchcontact_for_group/{gidfc}','GroupController@searchcontact_for_group');
Route::get('/addgroupmembers/{gid}','GroupController@addgroupmembers');
Route::post('/creategroupmembers','GroupController@creategroupmembers');
Route::get('/deletefromgroup/{gdid}/{groupid}','GroupController@deletefromgroup');

Route::get('/sendsms', 'SmsController@sendsms');
Route::post('/createsendsms','SmsController@createsendsms');

Route::get('/report', 'ReportController@report');
Route::get('/getreport', 'ReportController@getreport');
