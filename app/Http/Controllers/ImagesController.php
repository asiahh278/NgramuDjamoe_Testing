<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;


class ImagesController extends Controller
{
    public function addproduct(Request $request)
    {
        $validated = $request->validate([
            'gallery_product' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // $image = $request->file('gallery_product');
        // $image->storeAs('public/posts', $image->hashName());

        return view('admin.addproduct');
    }
}
