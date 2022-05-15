@extends('layouts.base')
@section('titulo', 'Post')

@section('contenido') 
<article class="fondo2 ">
        <div class="container mx-auto"> 
            <div class="grid  lg:grid-cols-2 gap-x-4 pt-20 lg:pt-12 px-6 ">
               
                <div class=" px-2 pt-24 lg:pt-6">
                     <p><img src="./img/Logo-Color.png" class="w-9/12 my-1 mt-5 lg:w-7/12" alt=""></p>
                     <h1 class=" text-4xl lg:text-5xl leading-4 text-gris1 font-bold w-10/12 pt-0 lg:pt-0 "> Se tú el cambio</h1>
                     
                    <div class="">
                    <p class="text-sm mt-4 lg:mt-1 lg:text-xl text-justify leading-3 w-9/12 lg:w-11/12 ">
                        Comprensión y acción para inspirar tu cambio y evolución.
                    </p>

                    </div>
                    <div class="p-4">

                    </div>

                    <div class="my-44  text-center">
                       
                        
                            
                    </div>

                </div>
                <div class="hidden lg:flex lg:flex-row lg:space-x-2 lg:justify-around ">
                             
                        <img src="./img/Percy1.png" class="max-w-72 max-h-72" alt="">
                        <img src="./img/Percy2.png" class="max-w-72 max-h-72" alt="">
                        
                </div>
            </div>    

        </div>
       
    </article>
    <div class= "-my-7 text-center">
                            
        <span class="inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold text-xl lg:text-2xl px-20 py-2 lg:px-32  focus:outline-none focus:shadow-outline">
                            Ultimos Articulos
        </span>

                                                  
                               
     </div>

<article>
        <div class="container mx-auto">
        @foreach($posts as $post)
                <div class="grid  gap-x-4 mt-28 lg:pt-2 px-1  md:px-44 justify-center items-center ">
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
                                        //    $description= substr($a, 0, 780);

                                        $description= substr($a, 3, 780);
                                        $salto= strpos($description,'<');
                                        $salto2= strpos($description,'&n');
                                        if($salto2){
                                            if($salto>$salto2){
                                                $description= substr($a, 3, $salto2);
                                                    
                                                }else{
                                                $description= substr($a, 3, $salto);
                                                    
                                                }
                                        }else{
                                            
                                        $description= substr($a, 3, $salto);
                                        }
                                       



                                                                             
                                    
                                    ?>
                                    <p class="leading-2 text-sm lg:text-lg text-justify">
                                            
                                        {{ $description }}...
                                        </p>  
                                    

					                <p>
                                        <div class="flex flex-row space-x-2 justify-between">
                                            <img src="./img/firma.png" class="w-1/3 lg:w-3/12 mt-4" alt="">
                                            <span>
                                                <a class="mt-4 text-base lg:text-xl inline-block rounded-lg  bg-azul1 text-white font-bold px-3 py-1 lg:px-5 lg:py-2" href="{{route('blog.show', ['post' => $post->slug])}}">
                                                    Leer más
                                                </a>
                                            </span>
    
                                        </div>
                                    
                                    </p>
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
     


    <div class="m-10 lg:m-40"></div>

@stop