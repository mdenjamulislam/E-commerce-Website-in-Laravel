<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_catagory()
    {  
        $data = Catagory::all();
        return view('admin.catagory' , compact('data'));
    }
    
    public function add_catagory(Request $request)
    {
        $catagory = new Catagory;
        $catagory->catagory_name = $request->catagory;
        $catagory->save();
        return redirect()->back()->with('message', 'Catagory added successfully');
    }
    public function delete_catagory($id)
    {
        Catagory::find($id)->delete();
        return redirect()->back()->with('message', 'Catagory deleted successfully');
    }

    // Product

    public function view_product()
    {
        $show_catagory = Catagory::all();
        return view('admin.product', compact('show_catagory'));
    }

    public function add_product(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->disc_price;
        $product->description = $request->description;
        $product->catagory = $request->catagory;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('product', $filename);
            $product->image = $filename;
        }else{
            return $request;
            $product->image = '';
        }

        $product->save();
        return redirect()->back()->with('message', 'Product added successfully');
    }

    // This function for showing all product 
    public function show_product() 
    {
        $product = Product::all();

        return view('admin.show_product', compact('product'));
    }

    // This function for delete product
    public function delete_product($id) 
    {
        Product::find($id)->delete();
        return redirect()->back()->with('message', 'Product delete successfully!');
    }

    // This function for edit product
    public function update_product($id) 
    {
        $product = Product::find($id);
        $catagory = Catagory::all();
        return view('admin.update_product', compact('product', 'catagory'));
    }

    // This function for update product
    public function update_product_confirm(Request $request, $id) 
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->disc_price;
        $product->description = $request->description;
        $product->catagory = $request->catagory;

        $image = $request->image;
        if ($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $product->image = $imagename;
        }
        

        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('product', $filename);
        //     $product->image = $filename;
        // }else{
        //     return $request;
        //     $product->image = '';
        // }

        $product->save();
        return redirect()->back()->with('message', 'Product update successfully');
    }


}
