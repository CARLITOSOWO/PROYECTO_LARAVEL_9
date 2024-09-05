@csrf 


<label class=" uppercase text-blue-700 text-xs">Titulo</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" values="{{ $post->title }} " style="color:black;">



<label class=" uppercase text-blue-700 text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4" style="color:black;">{{ $post->body }} </textarea>

<div class="flex justify-between itemns-center">
    <a href="{{ route ('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" values="Enviar" class="bg-gary-800 text-white rounded px-4 py-2">

</div>
