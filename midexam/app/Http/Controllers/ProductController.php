<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();

        return view('products.index',compact('products'));
    }

 
    public function create()
    {
        return view('products.create');
    }

    
    public function store(Request $request)
    {
        
        $product = new Product();

        $product->Name = $request->name;
        $product->Price = $request->product_price;
        $product->Quantity =$request->product_qty;

        $product->save();

        return redirect('/');

    }

    public function destroy(Product $product,$id)
    {

        $product=Product::find($id)->delete();
        
        return redirect('/');
    }

    
    public function edit($id)
    {
        $product = Product::find($id);

        return view ('products.edit',compact('product'));
    }

    

    public function update(Request $request,$id)
    {
      
        $product = Product::find($id);

        $product->Name = $request->name;
        
        $product->Price = $request->product_price;
        $product->Quantity = $request->product_qty;

        $product->save();

        return redirect('/');
    }

  
   
}
