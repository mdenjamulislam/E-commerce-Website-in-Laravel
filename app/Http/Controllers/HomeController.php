<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{
    // Root path
    public function index()
    {
        $product = Product::paginate(10);
        return view('home.userpage', compact('product'));
    }
    // User type 1 is admin
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        }  else {
            $product = Product::paginate(10);
            return view('home.userpage', compact('product'));
        }
    }

    public function product_details($id)
    {
        $product = Product::find($id);
        return view('home.product_details', compact('product'));
    }

    // This function for add to cart 
    public function add_to_cart(Request $request, $id)
    {
        if (Auth::id()) 
        {
            $user = User::find(Auth::id());
            $product = Product::find($id);

            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;

            $cart->product_id = $product->id;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->image = $product->image;
            $cart->quantity = $request->quantity;
            $cart->save();

            return redirect()->back();


        }else 
        {
            return redirect()->route('login')->with('message', 'Please login first'); 
        }
    }

    
}
 