<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   

        <title>@yield('titulo')</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
      
    </head>
    <body class="fondo01">
        
            <header class="" >
                <div class="container mx-auto ">
                    <nav class="flex items-center justify-between flex-wrap bg-azul2 rounded-bl-3xl lg:bg-transparent lg:bg-blue p-5 lg:p-4 ">
                        <div class="flex items-center justify-end order-1 lg:order-2 ">
                            @guest
                            <div class="flex items-center flex-shrink-0 text-white mr-0 lg:mr-6 order-1 lg:order-2 py-5 lg:py-0">
                                <a href="{{route('login')}}"> <span class="inline-block bg-azul2 border rounded-full px-6 py-1 text-sm font-semibold text-white mr-2 mb-2 lg:text-lg font-roboto">Inicia Sesión</span>
                                </a>

                            </div>
                            <div class="flex items-center flex-shrink-0 text-white  mr-0 lg:mr-6 order-1 lg:order-2 py-5 lg:py-0 ">
                                    <p> <a href="{{route('register')}}"><span class="inline-block bg-white rounded-full px-6 py-1 text-sm font-semibold text-azul1 mr-2 mb-2 lg:text-lg font-roboto ">Regístrate</span></a> 
                                        </p>

                            </div>
                            @else
                            <div class="flex items-center flex-shrink-0 text-white  mr-0 lg:mr-6 order-1 lg:order-2 py-5 lg:py-0 ">
                                     <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                                        <button type="submit" class="inline-block bg-white rounded-full px-6 py-1 text-sm font-semibold text-azul1 mr-2 mb-2 lg:text-lg font-roboto">Cerrar Sesión </button>
                                       
                                    </form>
                             
                             </div>   

                            @endguest

                            
                        </div>
                        
                        <div class="block py-5 lg:py-0 lg:hidden ">
                            <button id="boton"
                                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white border-white ">
                                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                </svg>
                            </button>
                        </div>
                        <div id="menu" class=" w-full  flex-grow lg:flex lg:items-between lg:w-auto  lg:border-black order-2 lg:order-1 hidden">
                            <div class="text-sm lg:flex-grow">
                            
                            <a href="{{url('/')}}"
                                class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white lg:text-gris1">
                                Inicio
                                </a>

                               	<a href="{{url('/sobremi')}}"
                                class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white lg:text-gris1">
                               	 Sobre Mí
                                </a>
                                
				 
                             
                                <a href="{{url('/prosperamente')}}"
                                class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white lg:text-gris1">
                                ProsperaMente
                                </a>

                            
                            
                                <a href="{{url('/blog')}}"
                                class="text-center block text-lg mt-4 px-4  lg:inline-block lg:mt-0 text-teal-200 hover:text-gray-500 mr-7 font-bold text-white lg:text-gris1">
                                Blog
                                </a>
                               
                               
                            </div>

                        </div>

                    </nav>

                </div>

            </header>
            <section>
                    @yield('contenido')
		<article class="">
           
             	<div class="container mx-auto   "> 
                    <div class="rede container mx-auto "> 
                        <div class="flex flex-row justify-end ">
                            <a href="https://api.whatsapp.com/send?phone=51963702820&text=Hola Percy, me gustaria tener mas informacion, mi nombre es" target="_blank"><img
                            title="Habla con nosotros " src="./img/wscolor.png"
                            class="w-10 lg:w-14 hover:animate-bounce duration-150" alt=""></a>
                        </div>
                    </div>
                    
            
            </div> 
            
    </article>
        
                    
            </section>  

       <div class="@yield('color')">
            <footer class="bg-azul1 rounded-t-3xl">
                        <div class="container mx-auto">
                            <div class="grid lg:grid-cols-2 px-6 pt-8">
                                <div>
                                    <img src="./img/Logo-Blanco.png" class="w-1/2 lg:w-1/3" alt="">
                                    <p class="ml-8 leading-9 mt-4 text-white font-roboto"><a href="{{url('/inicio')}}">Inicio</a></p>
                                    <p class="ml-8 leading-9 text-white font-roboto"><a href="{{url('/prosperamente')}}">ProsperaMente</a></p>
                                    <p class="ml-8 leading-9 text-white font-roboto"><a href="{{url('/blog')}}">Blog</a></p>
                                    <p class="ml-8 leading-9 text-white font-roboto"><a href="{{url('/sobremi')}}">Sobre Mi</a></p>
                                </div>
                                <div class="m-2 ">
                                    
                                </div>

                            </div>
                            <div class="grid lg:grid-cols-2 px-7 justify-center lg:justify-between  items-center">
                                <div class="mt-8 order-2 lg:order-1 text-white mb-8 font-roboto">
                                    <p>@2021 Percy Coronel Pesantes.</p>
                                    <p class="">
                                        Información de contacto: info@percycoronel.com.
                                    </p>
                                    <p class="leading-4">
                                        <a href="#">Todos los derechos reservados -</a>
                                        <a href="#">Politica de privacidad</a>
                                        
                                    </p>

                                </div>
                                <div class="w-3/4 lg:w-4/4 mx-auto lg:mx-32 lg:mr-0 order-1 lg:order:2 mt-1 lg:mt-4 mb-0 lg:mb-8 lg:justify-end  ">
                                    <div>
                                        <p class="text-center text-white font-bold mb-2 lg:text-xl font-roboto lg:hidden">SIGUEME EN:</p>
                                    </div>
                                    <div class="flex flex-row space-x-2 justify-center lg:justify-end">

                                        <a href="{{url('https://www.facebook.com/PercyCoronelCoach')}}" class=""><img src="{{asset('./img/fb.png')}}" class="w-10 lg:w-12" alt=""></a>
                                        <a href="{{url('https://www.instagram.com/percy_coronel/')}}" class=""><img src="{{asset('./img/inst.png')}}" class="w-10 lg:w-12" alt=""></a>
                                        <a href="{{url('https://www.youtube.com/c/percycoronel')}}"><img src="{{asset('./img/yt.png')}}" class="w-10 lg:w-12" alt=""></a>
                                        <a href="{{url('https://sptfy.com/percy_coronel')}}"><img src="{{asset('./img/sp.png')}}" class="w-10 lg:w-12" alt=""></a>
                                        <a href="{{url('https://twitter.com/percy_coronel')}}"><img src="{{asset('./img/tw.png')}}" class="w-10 lg:w-12" alt=""></a>
                                        <a href="{{url('https://t.me/Percy_Coronel')}}"><img src="{{asset('./img/tg.png')}}" class="w-10 lg:w-12" alt=""></a>

                                    </div>
                                </div>


                            </div>


                        </div>
            </footer>


        </div>    

        @yield('script')


              <!--{{asset('')}}-->
             <script src="{{ asset('js/script.js') }}" >
            </script>
    </body>
</html>      