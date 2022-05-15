@extends('layouts.base')
@section('titulo', 'Post')

@section('contenido') 
<article class=" ">
    
   <div class="container mx-auto  lg:px-16 lg:pr-24 "> 
       
       <div class="grid  lg:grid-cols-4  bg-azul1  justify-center lg:justify-center py-3">
          
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
           <a href="{{url('/posts')}}"
           class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white ">
            POSTS
           </a>
       </div>
   </div>
  
</article>
   
     <div class= "m-7 mt-16 text-center">
     <a class="inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold text-xl lg:text-2xl px-20 py-2 lg:px-32  focus:outline-none focus:shadow-outline" href="{{route('posts.create')}}">Create Post</a>
             
     </div>
    <article>
        <div class="container mx-auto">
        	@foreach($posts as $post)
                <div class="grid  gap-x-4 mt-2 lg:pt-2 px-1   md:px-44 justify-center items-center ">
                    <div class="max-w-3xl rounded-2xl overflow-hidden shadow-lg bg-hueso my-8">

                            
                        
                         <img class="w-full" src="{{ url('posts/image/'.$post->imagen) }}" alt="{{$post->imagen}}">

                            <div class="bg-azul1">
                                <div class="mx-5 text-xl  text-justify px-3 py-3 ">
                                    <h3 class="font-bold text-base text-white lg:text-2xl">{{$post->title}}  </h3>
                                    <p class="leading-5 text-xs text-white">Por Percy Coronel,  {{$post->created_at}}</p>
                                </div> 
                            </div>
                                 
                            <div class="mx-4">
                                <div class="px-4 py-4">
                                    <?php   
                                            $a= $post->description;
                                            // $titulo= trim($a);
                                            // substr_count($cadena,"5") la veces que se repite
                                           $description= substr($a, 0, 780);
                                                                             
                                    
                                    ?>
                                    <p class="leading-2 text-sm lg:text-lg text-justify">
                                        
                                        {{ $description }} ..
                                        </p>                                
                                    
                                        <p>
                                            <div class="flex flex-row space-x-2 justify-between">
                                                <img src="./img/firma.png" class="w-1/3 lg:w-2/12 mt-4" alt="">
                                                <span>
                                                    <a class="mt-4 text-base lg:text-xl inline-block rounded-lg  bg-azul1 text-white font-bold px-3 py-1 lg:px-5 lg:py-2" href="{{route('posts.show', ['post' => $post->slug])}}">
                                                        Leer más
                                                    </a>
                                                </span>
        
                                            </div>
                                        
                                        </p>
                                </div>
                            </div>
                            <div class="mx-4">
                                <div class="px-4 py-4">
                                    <form action="{{route('posts.destroy', ['post' => $post->id] ) }}" method="POST">
                                      @csrf
                                     @method('DELETE')
                                         <button type="submit" class="text-base lg:text-xl inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold px-2">delete </button>
                                    </form>
                                    
                                </div>
                            </div>
                            
                    </div>
                </div>
            @endforeach
            <div class="px-6 py-3">
                {{ $posts->links() }}
    
            </div>

        </div>
            
    </article>
    <div class="m-14 lg:m-24"></div>

@stop