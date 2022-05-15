

@extends('layouts.base')
@section('titulo', 'Blog-Detalle')

@section('contenido') 
    
<article>
    <div class="container mx-auto">
   
            <div class="grid  gap-x-4 my-10 lg:my-44 px-1  md:px-44 justify-center items-center ">
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
                                <p class="leading-2 text-sm lg:text-lg text-justify">
                                    
                                    {!!$post->description!!}
                                    </p>  
                                

                                <p><img src="./img/firma.png" class="w-1/3 lg:w-2/12 mt-4" alt=""></p>
                            </div>
                        </div>
                        
                </div>
            </div>
       

    </div>
        
</article>
   

@stop