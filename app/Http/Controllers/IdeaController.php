<?php

namespace App\Http\Controllers;

use App\Model\Idea;
use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Picture;
use Auth;

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
        $user = Auth::user()->id;
         Idea::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'id_user' => $user
        ]);

        return redirect('/ideas');
    }

    public function showIdeas(Request $request)
    {
        $data["ideas"] = Idea::all();
        return view('page/idea', $data);
    }

    public function delIdea(Request $request, $id){

        $idea = Idea::where('id', '=', $id)->delete();
        return redirect()->route('showIdea');
    }


		public function idToEvent(Request $request, $id){

			$iIdea = Idea::where('id', '=', $id)->first();

			$event = Event::create([
					'title' => $iIdea->title,
					'description' => $iIdea->description,
					'category' => 'test',
					'id_user' => $iIdea->id_user,
					'date'=> '2022/10/10',

			]);
			Picture::create([
					'id_user'=> $iIdea->id_user,
					'id_event' => $event->id,
					'url'=> "nabil.jpg",

			]);

			$idea = Idea::where('id', '=', $id)->delete();
			return redirect()->route('showIdea');
		}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
