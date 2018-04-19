<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return "Testing";
    }

    public function create(){
        return view('Products.create');
    }

    public function store(Request $request)
    {
        //$this->validate($request, ['name'=>'required|max:2',
         //'price'=>'requred']);
         $post=new Post;
         $post->name=$request->input('name');
         $post->price=$request->input('price');
         $post->save();

        return redirect('/post')->width('success','Post Created');
    }
}
