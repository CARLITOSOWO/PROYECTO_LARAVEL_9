@extends('template')
@section('content')

<div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <span class="text-xs uppercase text-black-700 bg-gray-400 rounded-full px-2 py-1">PROGRAMACION</span>
    <h1 class="text-3xl text-black mt-4">Blog</h1>
    <p class="text-sm text-black-400 mt-2">Proyecto de desarolladores para profesionales </p>

    <img src="{{ asset('images/3.png') }}"  class="absolute -right-20 -bottom-20 opacity-20">
</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Contenido tecnico </h1>

    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($posts as $post)
        <a href="{{ route('post' , $post->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">TUTORIAL</span>
                <span>{{ $post->created_at->format('d/m/y') }}</span>
            </p>

            <h2 class="text-lg text-gray-900 mt-2">{{ $post->title }} </h2>
        </a>

        @endforeach
    </div>

    {{ $posts->links() }}
</div>
@endsection