<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index() //LISTADO 
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
            ]);
    }

    public function create (Post $post)//FORMULARIO DE CREAR 
    {
       return view('posts.create', ['post' => $post]);
    }





    public function store (Request $request )//CREAR FINALMENTE 
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required |unique:posts,slug',
            'body' => 'required',
        ]);

        //dd($request);
        $post = $request->user()->posts()->create([
        'title' => $request->title,
        'slug' => $request->slug,
        'body' => $request->body,
       ]);
       
       //dd($post , $request);
       return redirect()->route('posts.edit', $post);
    }








    public function edit(Post $post)//FORMULARIO DE EDITAR
    {
       return view('posts.edit', ['post' => $post]);
    }

    public function update (Request $request, Post $post)//EDITAR FINALMENTE
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required |unique:posts,slug' . $post->id,
            'body' => 'required',
        ]);

        $post->update ([
        'title' => $request->title,
        'slug' => $request->slug,
        'body' => $request->body,
       ]);
       

       return redirect()->route('posts.edit', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }



}

