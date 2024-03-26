<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Products;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    # INDEX -> SHOWING ALL PRODUCT PAGE
    public function products()
    {
        return redirect('/allproduct');
    }

    public function index(): View
    {
        return view('admin.product', compact('products'));
    }


    # POST -> ADDING NEW PRODUCT
    public function addproduct(Request $request) 
{
    $validated = $request->validate([
        'photos' => 'required|image|mimes:png,jpg,jpeg',
        'product_name' => 'required|max:255',
        'price' => 'required',
        'ingredients' => 'required',
        'quantity' => 'required',
        'description' => 'required|max:1000',
    ]);
 
    return redirect('/product');
}

   public function create() {
    return view('admin.addproduct');
   }

    
}
