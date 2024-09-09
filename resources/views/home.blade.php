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

            <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>

            <!--<span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">CREADOR DE LA PUBLICACION</span>-->
                {{ $post->user->name }}
            </div>
        </a>

        @endforeach
    </div>

    {{ $posts->links() }}
</div>
@endsection