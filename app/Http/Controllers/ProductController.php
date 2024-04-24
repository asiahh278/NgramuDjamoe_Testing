<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

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


    # POST (store) -> ADDING NEW PRODUCT
    public function addproduct(Request $request) 
{
    $validated = $request->validate([
        'product_name' => 'required|max:255',
        'category' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'ingredients' => 'required',
        'description' => 'required|min:10',
    ]);
 
    return redirect('/product');
}

   public function create() {
    return view('admin.addproduct');
   }

   public function show(Request $request) 
{

    
}
    
}
