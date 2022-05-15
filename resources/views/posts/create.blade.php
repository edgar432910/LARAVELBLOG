@extends('layouts.base')
@section('titulo', 'Publicar')

@section('contenido')

    <div class="container mx-auto lg:my-64 my-24 ">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" class="w-11/12 max-w-5xl border rounded-2xl bg-white mx-auto ">
                @csrf
                <div class="my-2 lg:my-6 ">
                    <h3 class="text-center font-bold text-2xl lg:text-3xl" >Subir nuevo post</h3>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="imagen">
                        Imagen
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="imagen" type="file" value="{{old('imagen')}}" name="imagen" accept="image/*"  required/>
                    
                        @error('file')
                            <p class="text-azul1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                      <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="titulo">
                        Titulo
                      </label>
                    </div>
                    <div class="md:w-2/3">
                      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="titulo" type="text" value="{{old('title')}}" name="title" required>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="descripcion">
                        Descripcion
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <textarea id="editor"  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="descripcion"  cols="30" rows="10" value="{{old('description')}}" name="description"></textarea>
                        
                    </div>
                </div>
                
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <input type="submit" class="bg-blue-500 hover:bg-azul2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Publicar"  > 
                        
                        
                        <a class="ml-24  inline-block align-baseline font-bold text-sm text-azul1 hover:bg-blue-100"
                            href="/posts">
                            Mis publicaciones
                        </a>
                    </div>
                </div>
            </form>


    </div>

@stop
@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


@stop