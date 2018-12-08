<?php

function status($k)
{
	$array = [
		'in_progress' => 'In Progress', 'done' => 'Done'
	];
	return $array[$k];
}
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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function(){

	Route::resource('/project', 'ProjectController');
	Route::get('/project/{id}/delete', 'ProjectController@delete')->name('project.delete');


	Route::resource('{project}/task', 'TaskController');
	Route::get('/delete/{id}/delete', 'TaskController@delete')->name('task.delete');

});