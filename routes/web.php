<?php

use Illuminate\Http\Request;
use App\Question;
use App\Language;

Route::get('/', function(){
	$languages=Language::all();
	
	return view('index', compact('languages'));
});
Route::get('/test', function(){
	return phpinfo();
});
Route::any('/apply', function(Request $request){

	if(!$request->name || !$request->email){
		return redirect()->to('/');	
	}
	$questions=Question::where('language_id', '=', $request->language_id)->get();
	session([
		'name' => $request->name,
		'email' => $request->email,
		'language_id' => $request->language_id,
	]);
    return view('apply',compact('questions'));
});

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('/videos', 'VideoController@index');

});
Route::post('/videos', 'VideoController@store');

Route::resource('questions', 'QuestionController');
Route::resource('languages', 'LanguageController');

Route::resource('interviews', 'InterviewController');

Auth::routes();

