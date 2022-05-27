@extends('layouts.base')
@section('titulo', 'Youtube')

@section('contenido') 
<article class=" ">
    
   <div class="container mx-auto  lg:px-16 lg:pr-24 "> 
       
   <div class="grid  lg:grid-cols-3 gap-y-2  bg-azul1  justify-center lg:justify-center py-3">
          
          <a href="{{url('/admin')}}"
          class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white bg- ">
          Administrador
          </a>

          <a href="{{url('/admin/usuarios')}}"
          class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white ">
          Todos los usuarios
          </a>
          <a href="{{url('/pdfs')}}"
          class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white ">
          PDFS
          </a>
          <a href="{{url('/youtube')}}"
          class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white ">
           YOUTUBE
          </a>
          <a href="{{url('/spotify')}}"
          class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white ">
           SPOTIFY
          </a>
          <a href="{{url('/posts')}}"
          class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white ">
           POSTS
          </a>
      </div>
   </div>
  
</article>
<article>
        <div class="container mx-auto lg:px-6 "> 
   
                <p class="text-center mt-20 mb-16">
                  <a class="inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold text-xl lg:text-2xl px-20 py-2 lg:px-32  focus:outline-none focus:shadow-outline" href="{{route('youtube.create')}}">Crear YouTube video</a>
                </p>
                 
            
            <div class="grid lg:grid-cols-2  gap-7  bg-orange-600  mb-10 lg:mb-40 items-center ">
                   
                    @foreach($youtubes as $youtube)          
                    <div class=" px-1 mt-4 text-center">
				        <iframe class="w-full lg:w-11/12 mx-auto " height="350" src="{{$youtube->urlweb}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <form action="{{route('youtube.destroy', ['youtube' => $youtube->id] ) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="text-base lg:text-xl inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold px-2">delete </button>
                         </form>  
                    </div> 
                    
                                    
                                    
                                   
                                
              
                    @endforeach
                    
            </div>
        </div>
       
</article>


@stop