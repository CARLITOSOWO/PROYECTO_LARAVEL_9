@csrf 


<label class=" uppercase text-blue-700 text-xs">Titulo</label>
    <span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ $post->title }} " style="color:black;">


<label class=" uppercase text-blue-700 text-xs">Slug</label>
    <span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4" 
    value="{{ $post->slug }} " style="color:black;">




<label class=" uppercase text-blue-700 text-xs">Contenido</label>
    <span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4" style="color:black;">{{ $post->body }} </textarea>

<div class="flex justify-between itemns-center">
    <a href="{{ route ('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-white-800 text-white rounded px-4 py-2">
</div>
