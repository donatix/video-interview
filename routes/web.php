<?php

use Illuminate\Http\Request;
use App\Question;

Route::get('/', function(){
	return view('index');
});
Route::get('/test', function(){
	return phpinfo();
});
Route::any('/apply', function(Request $request){

	if(!$request->name){
		return redirect()->to('/');	
	}
	$questions=Question::all();
    return view('apply',compact('questions'));
});

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('/videos', 'VideoController@index');

});
Route::post('/videos', 'VideoController@store');

Route::resource('questions', 'QuestionController');

Auth::routes();

