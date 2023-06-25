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

Route::get('/', 'AllPlayersController@index')->name('all.players');
Route::post('/players', 'AllPlayersController@store')->name('all.players.store');
Route::get('/createtopic/{{player}}', 'CreateTopicController@index')->name('create.topic');
Route::post('/createtopicstore', 'CreateTopicController@store')->name('create.topic.store');
Route::get('/showtopic', 'ShowTopicController@index')->name('show.topics');
Route::post('/showtopic', 'ShowTopicController@index')->name('show.topics.store');

Route::post('/showtopicajax', 'AjaxShowTopicController@index')->name('show.topics.ajax');

