<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('page/createidea');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $idea = New IdeaBox();
        $idea::create([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
    }

    public function showIdeas(Request $request)
    {
        $data["idea_boxes"] = IdeaBox::all();
        return view('page/idea', $data);
    }
}
