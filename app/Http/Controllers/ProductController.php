<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Picture;

class ProductController extends Controller
{
    public function index() {

        return view('addproduct');
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

    public function create(Request $request)
    {

          //  foreach($request->file('filename') as $product)
 //{
    $file = $request->file('filename'); 
 $file->move(public_path() . '/img', $file->getClientOriginalName());
    

        
         Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'urlImage'=> $file->getClientOriginalName(),

        ]);
            
    }

}


