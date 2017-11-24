<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Language;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {	
    	$questions=Question::all();
        return view('questions.index',compact('questions'));
    }
    public function create()
    {	
        $languages=Language::all();
        
        return view('questions.create', compact('languages'));
    }
    public function store(Request $request){

        Question::create($request->all());
    	
    	return redirect()->to('questions');	
    }
    public function show($id){
    	
        $question=Question::findOrFail($id);
    	
    	return view('questions.show',compact('question'));
    }
    public function destroy($id){

    	$question=Question::findOrFail($id);

    	$question->delete();
    	return redirect()->to('questions');	
    }
}
