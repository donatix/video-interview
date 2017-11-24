<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Interview;
use File;


class VideoController extends Controller
{
    
    public function __construct()
    {
    }
    public function index()
    {	
        $this->middleware('auth');

        $videos = File::allFiles(public_path('uploads'));

        $collection = collect($videos);
        $videos = $collection->map(function ($item, $key) {
            return $item->getFilename();
        });

        return view('videos',compact('videos'));
    }
    public function create()
    {	
        $this->middleware('auth');
        return view('questions.create');
    }
    public function store(Request $request)
    {
        $filename=date('YmdHis').'.webm';
        
        $request->file('file')->move('uploads',$filename);
        $request->file = "";
        Interview::create([
            'name' => $request->name,
            'email' => $request->email,
            'app_data' => 'data'/*json_encode($request->all())*/,
            'video' => $filename,
        ]);

    	dd($request->file);	
    }
    public function destroy($id){

    	//TODO	
    	
    }
}
