<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $languages = Language::all();
        return view('languages.index')->with('languages', $languages);
    }

    public function create()
    {
        return view('languages.create');
    }

    public function store(Request $request)
    {
        Language::create([
            'name' => $request->name,
            'abbr' => $request->abbr,
        ]);
    	
    	return redirect()->to('languages');	
    }

    public function show($id)
    {
        $languages=Language::findOrFail($id);
    	return view('languages.show')->with('languages', $languages);
    }

    public function edit($id)
    {
        // unused due to having 1 show page
    }

    public function update(Request $request, $id)
    {
        //insert Validator if needed

        $lang = Language::find($id);
        $lang->name = $request->name;
        $lang->abbr = $request->abbr;
        $lang->save();
        // ->update(array(
        //     'name' => $request->name,
        //     'abbr' => $request->abbr,
        // ));
        return redirect()->to('languages');	
    }

    public function destroy($id)
    {
        $language=Language::findOrFail($id);

        $language->delete();
        return redirect()->to('languages');	
    }

}
