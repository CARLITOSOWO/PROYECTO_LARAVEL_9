<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home (){
        return view('home');

    }

    public function blog (){
      
        //$posts = Post::get();//TRAEME TODOS LOS POST
        //$post = Post::first();//TRAER EL PRIMER REGISTRO 
        //$post = Post::find(25);
       // dd($post);
       
       $posts = Post::latest()->paginate();//CONSULTA DE DATOS PAGINADA -- LATES = ULTIMOS REGISTROS -- PAGINATE = PAGINACION DE LOS REGISTROS 
        return view('blog', ['posts' => $posts]);
    }

    public function post (Post $post){

        return view('post' , ['post' => $post]);
    }
}
