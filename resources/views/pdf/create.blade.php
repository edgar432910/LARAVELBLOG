@extends('layouts.base')
@section('titulo', 'Publicar')

@section('contenido')

    <div class="container mx-auto lg:my-64 my-24 ">
        
            <form action="{{route('pdfs.store')}}" method="POST" enctype="multipart/form-data" class="w-11/12 max-w-5xl border rounded-2xl bg-white mx-auto ">
                @csrf
                <div class="my-2 lg:my-6 ">
                    <h3 class="text-center font-bold text-2xl lg:text-3xl" >Subir nuevo pdf</h3>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="imagen">
                        Imagen
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="imagen" type="file" value="{{old('imagen')}}" name="imagen" accept="image/*"  />
                    
                        @error('imagen')
                            <p class="text-azul1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="pdf">
                        Pdf
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="pdf" type="file" value="{{old('pdf')}}" name="pdf" accept=""  />
                    
                        @error('pdf')
                            <p class="text-azul1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                      <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                        Nombre
                      </label>
                    </div>
                    <div class="md:w-2/3">
                      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="name" type="text" value="{{old('name')}}" name="name" >
                      @error('name')
                      <p class="text-azul1">
                          {{$message}}
                      </p>
                    @enderror
                    </div>
                    
                </div>
                
                
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <input type="submit" class="bg-blue-500 hover:bg-azul2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Publicar"  > 
                        
                        
                        <a class="ml-24  inline-block align-baseline font-bold text-sm text-azul1 hover:bg-blue-100"
                            href="/pdfs">
                            Mis publicaciones
                        </a>
                    </div>
                </div>
            </form>
            <div class="my-32 lg-my-20">

            </div>
            <form action="{{route('pdfs.store')}}" method="POST" enctype="multipart/form-data" class="w-11/12 max-w-5xl border rounded-2xl bg-white mx-auto ">
                @csrf
                <div class="my-2 lg:my-6 ">
                    <h3 class="text-center font-bold text-2xl lg:text-3xl" >Subir Enlace de paga</h3>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="imagen">
                        Imagen
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="imagen" type="file" value="{{old('imagen')}}" name="imagen" accept="image/*"  />
                    
                        @error('imagen')
                            <p class="text-azul1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                </div>
                
                
               
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-black font-bold md:text-right mb-1 md:mb-0 pr-4" for="url">
                        url
                        </label>
                    </div>
                    
                    <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-200" id="name" type="text" value="{{old('url')}}" name="url" >
                        @error('url')
                        <p class="text-red-500">
                            {{$message}}
                        </p>
                      @enderror
                    </div>
                </div>
                
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <input type="submit" class="bg-blue-500 hover:bg-azul2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Publicar"  > 
                        
                        
                        <a class="ml-24  inline-block align-baseline font-bold text-sm text-azul1 hover:bg-blue-100"
                            href="/pdfs">
                            Mis publicaciones
                        </a>
                    </div>
                </div>
            </form>



    </div>

@stop
