<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\product;

use DB;

class ProductsfrontendController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(Request $request)
    {
       
            $products = Product::latest();

        return view('include.products')->with('product', $product);
    }

    // public function getShow($id)
    // {
    //     $product = Product::findOrFail($id);

    //     return view('showproducts.show', compact('product'));
    //     // return view('showproducts.show')->with('product', $product);
 
    // }
    public function getShow($id)
    {
        $product = Product::find($id);

        return view('showproducts.show', compact('product'));
        // return view('showproducts.show')->with('product', $product);
 
    }
    // public function getShow(Product $product)
    // {
    //     $product = Product::findOrFail($product);
    //     // return view('showproducts.show')->with('product', $product);
    //     return $product;
    //     // return view('showproducts.show', compact('product'));
    // }
}

