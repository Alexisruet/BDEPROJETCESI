<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function create()
    {
        //
        return view('page/addevent');
    }

    public function store(Request $request)

    {

        $this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/img', $name);  
                dd($image);
                $data[] = $name;  
            }
         }

         $image= new Image();
         $image->filename=json_encode($data);
         
        
        $image->save();

        return view('welcome');
    }
}
