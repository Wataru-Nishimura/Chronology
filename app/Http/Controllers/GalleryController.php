<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function gallery(Gallery $gallery)
    {
        return view('galleries/gallery')->with(['galleries' => $gallery->get()]);
    }
    
    public function create()
    {
        return view('posts/picture-create');
    }
    
    public function store(Request $request, Gallery $gallery)
    {
        $input = $request['gallery'];
        $gallery->fill($input)->save();
        return redirect('/galleries/' . $gallery->id);
    }

}