<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Picture;
use App\Model\ToRegister;
use App\Model\ToComment;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('page/createEvent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user()->id;
        $event = Event::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'category' => 'test',
            'id_user' => $user,
            'date'=> $request->get('date'),
            //'date'=> '2022/10/10',
        ]);


        $file = $request->file('filename');
        $file->move(public_path() . '/img', $file->getClientOriginalName());

        Picture::create([
            'id_user'=> $user,
            'id_event' => $event->id,
            'url'=> $file->getClientOriginalName(),

        ]);

        return redirect('/futurevent');

    }
    public function inscrire(Request $request, $id)
    {
        $user = $request->user()->id;
        //dd($user);


        ToRegister::create([
           'id_user' => $user,
           'id_event' => $id,
       ]);

       return redirect('/');

    }

    public function commenter(Request $request)
    {

        $user = $request->user()->id;
       // $ev = DB::table('events')->where('id_user', '=', $user)->first();
           // $test->content = $request->content;
      // $test = $request-> get('content');
      // dd($test);

        ToComment::create([
           'id_user' => $user,
           'id_event' => 1,
           'content' => $request->get('content'),
       ]);

       return redirect('/pastevent');
    }

    public function futurevent(){

        $data['events'] = Event::where('date', '>=', Carbon::now())->get();
        $data['pictures'] = Picture::all();

        return view('page/futurevent', $data);
    }

    public function pastevent(){

        //$events = Event::where('date', '>=', Carbon::now())->get();
        $data['events'] = Event::where('date', '<', Carbon::now())->get();
        $data['pictures'] = Picture::all();
        $data['To_comments'] = ToComment::all();
        return view('page/event', $data);
    }

    /*public function showEvents(Request $request)
    {
        $data["events"] = Event::all();
        $data["pictures"] = Picture::all();
        return view('page/event', $data);
    }*/

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
