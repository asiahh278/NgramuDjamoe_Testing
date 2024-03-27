<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;


class ImagesController extends Controller
{
    public function addproduct(Request $request)
    {
        $validated = $request->validate([
            'gallery_product' => 'required',
        ]);

        return view('admin.addproduct');
    }
}
