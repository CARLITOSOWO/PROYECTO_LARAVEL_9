@extends('template')

    @section('content')

    <div class="max-w-3xl mx-auto">

        <h1 class="max-w-3xl mx-auto">{{ $post->title  }}</h1> 
        <p class="leading-loose text-lg text-gray-700"> 

            {{ $post->body  }}
        </p>

    </div>


   
@endsection




