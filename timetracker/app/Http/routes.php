<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
    
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{

    $app->post('corridoretime','CorridoreController@createCorridoreTime');
    $app->post('finishtime','FinishController@createFinishTime');
    $app->post('alldata','AllDataController@createData');
	$app->get('participants','ParticipantsController@index');
	$app->get('participantstime','ParticipantsController@getTime');
	$app->get('corridoretime','CorridoreController@index');
	$app->get('finishtime','FinishController@index');
	$app->get('alldata','AllDataController@index');
});