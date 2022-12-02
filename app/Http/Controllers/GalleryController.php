<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Requests\GalleryRequest;
use Storage;
use Cloudinary;

class GalleryController extends Controller
{
    public function gallery(Gallery $gallery)
    {
        return view('galleries/gallery')->with(['galleries' => $gallery->get()]);
    }
    
    public function create(Request $request)
    {
        return view('posts/picture-create');
    }
    
    public function store(Request $request, Gallery $gallery)
    {
        $input = $request['gallery'];
        $input += ['user_id' => $request->user()->id];
        
        $gallery = new Gallery;
        $form = $request->all();
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        //アップロードした画像のフルパスを取得
        $gallery->image_path = $image_url;
        $gallery->fill($input)->save();
        return redirect('/gallery');
    }

}