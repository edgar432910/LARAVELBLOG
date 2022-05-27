@extends('layouts.base')
@section('titulo', 'PDF')

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
<article class="   container mx-auto">
    <h2 class="text-azul1 text-center mt-16 lg:mt-10 font-bold text-3xl lg:text-5xl font-roboto ">  </h2>
    <p class="text-center">
      <a class="inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold text-xl lg:text-2xl px-20 py-2 lg:px-32  focus:outline-none focus:shadow-outline" href="{{route('spotify.create')}}">Create Spotify</a>
    </p>
   <div class="container mx-auto  lg:w-12/12 mb-10 lg:mb-0">
          <div class="grid md:grid-cols-2  justify-center items-start lg:my-5 ">
               
                   @foreach($spotifys as $spotify)
                       
                        <div class="text-center my-6 lg:mb-12" lg:mt-1>
                           <div class=" text-center">
                                 
                                 <img class="w-80 h-96 md:w-64 md:h-80 mx-auto my-4 lg:my-5 lg:w-80 lg:h-96" src="{{ url('spotify/image/'.$spotify->imagen) }}" alt="{{$spotify->imagen}}">
                                
                                 <a href="{{$spotify->url}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline" target="blank_">
                                    Ver Ahora        
                                 </a>
                                 <div class="py-4">
                                    <form action="{{route('spotify.destroy', ['spotify' => $spotify->id] ) }}" method="POST">
                                      @csrf
                                     @method('DELETE')
                                         <button type="submit" class="text-base lg:text-xl inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold px-2">delete </button>
                                    </form>
                                    
                                   
                                </div>
                                
                            </div>
                         </div>
                           
                        

                   
                  @endforeach
                   
           </div>
   </div>


</article>
@stop