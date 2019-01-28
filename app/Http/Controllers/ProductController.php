<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Picture;
use Session;
use App\Cart;


class ProductController extends Controller
{

    public function getAddToCart(Request $request, $id) {

            $product = Product::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product, $product->id);
            $request->session()->put('cart', $cart);
            return redirect()->route('product.index');

    }
    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
    public function getCart() {
        if (!Session::has('cart')) {
            return view('page/shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('page/shopping-cart', ['products' => $cart->items]);
    }

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
        return $this->showProducts($request);

    }
    public function showProducts(Request $request)
    {
        $data["products"] = Product::all();
        return view('page/shop', $data);
    }

}
