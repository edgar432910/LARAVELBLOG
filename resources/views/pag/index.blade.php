@extends('layouts.base')
@section('titulo', 'Inicio')
@section('color', '')

@section('contenido')

    <article class="fondo3 font-roboto -my-10 ">
        <div class="container mx-auto"> 
            <div class="grid  lg:grid-cols-2 gap-x-4 pt-28 lg:pt-12 px-6 ">
                    <div class=" px-2 pt-14 lg:pt-6">
                        <p><img src="./img/Logo-Color.png" class="w-9/12 my-1 mt-5 lg:w-7/12" alt=""></p>
                        <h1 class=" text-3xl lg:text-5xl leading-7 text-gris1  w-10/12 pt-0 lg:pt-3 font-roboto font-semibold "> Bienvenido  </h1>
                        <h1 class=" text-3xl lg:text-5xl leading-7  text-gris1  font-roboto font-bold w-12/12"> Inicia tu Proceso de Cambio  </h1>
                        <h1 class=" text-3xl lg:text-5xl leading-7 text-gris1  font-roboto font-bold w-12/12"> y Evolucion Ahora </h1>
                        <div class="">
                        <p class="text-sm mt-8 lg:text-xl text-justify w-9/12 lg:w-11/12 font-roboto  text-black">Únete a nuestra comunidad de comprensión y acción para que obtengas mejores resultados en tu vida.</p>

                    </div>
                    <div class="p-4">

                    </div>

                    
                    <div class="mt-20 text-center">
                        <a href="{{url('/prosperamente')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-1 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                Regístrate Gratis 
                                
                        </a>
                            
                    </div>
                    <div class="text-center font-roboto mt-2 mb-10 text-xs lg:text-lg ">
                        <span>Obten entrenamientos y material gratuito</span>
                    </div>

                </div>
                
                    <div class="hidden lg:flex lg:flex-row lg:space-x-2 lg:justify-around ">
                         
                         <img src="./img/Percy1.png" class="max-w-72 max-h-72" alt="">
                            
                        
                        <img src="./img/Percy2.png" class="max-w-72 max-h-72" alt="">
                        
                    </div>
                
            </div>    

        </div>
       
    </article>
   

    <article class="bg-azul1">
        <div class="container mx-auto"> 
                       
            <div class="grid lg:grid-cols-2 gap-x-4 mt-28 lg:pt-2 px-1 md:px-6  justify-center items-center">
                <div class="my-6 mt-12 lg:mt-6">
                <iframe class="w-full lg:w-11/12 mx-auto " height="350"  src="https://www.youtube.com/embed/3r6l2gHdcD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class= "px-2">
                    <p class="text-2xl font-bold  lg:text-4xl text-center px-6 mb-10 lg:mb-6 font-roboto text-white">Comprensión y acción para inspirar tu cambio y
                    evolución</p>
                </div>
            </div>
        </div>
        
    </article>
    <article class="my-16 lg:my-20">
             <div class="container mx-auto">
                <h3 class=" text-3xl lg:text-5xl  text-gris1 leading-7  w-9/12 lg:w-9/12 mx-auto text-center  pt-0 lg:pt-3 font-roboto font-semibold "> ¿Deseas comenzar tu cambio? </h3>
             </div>
             <div class="mt-4 lg:mt-8 text-center">
                        <a href="{{url('/prosperamente')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-1 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                Regístrate Gratis 
                                
                        </a>
                            
             </div>

    </article>
    <article class="my-36 lg:my-44 container mx-auto">
             <div class="container mx-auto">
                <h3 class=" text-3xl lg:text-5xl  text-gris1  w-9/12 mx-auto text-center leading-7  pt-0 lg:pt-3 font-roboto font-semibold "> Cambiar Para Vivir a Plenitud </h3>
             </div>
             <div class="mt-4 lg:mt-5 text-center">
                    <p class=" text-gris1 text-xl lg:text-3xl leading-2 w-10/12 lg:w-9/12 mx-auto font-roboto">Cambiar y evolucionar es difícil cuando no sabes qué cambiar y por dónde comenzar. Este es un espacio seguro de comprensión y orientación que te ayudará a descubrir y superar los obstáculos que te han impedido evolucionar.
      </p>
                            
             </div>

    </article>
    <article class="my-20 lg:my-20">
            <div class="container mx-auto">
                


                <div class="grid  mt-1  pl-6 pr-6 lg:hidden  items-start">

                  
                    <img class="w-full" src="./img/propositombfinal.png" alt="">
                </div>
                <div class="hidden lg:mt-0 lg:pt-2 px-6  lg:grid  justify-center items-start">
                    
                        
                         <img class="w-full" src="./img/propositodkfinal.png" alt="">
                    
                    
                </div>

            </div>
    </article>
    
    
    
    

    <article class="bg-celeste">
            <div class="container mx-auto"> 
                <div class="grid   lg:pt-1 px-6  justify-center items-start ">

                        <div class="mt-16 mb-6  ">
                                 <p class="text-white text-center font-bold  text-4xl lg:text-5xl font-roboto">¿Cómo lo Hacemos?</p>
                        </div>
                        <div class="justify-center  mt-8 mb-8 lg:mt-10 lg:mb-0">

                            <img src="./img/Autoconocimiento.png" class="w-2/12 mx-auto lg:w-1/12" alt="">


                            <h3 class="text-center text-2xl font-bold text-gris1 mb-4 lg:text-3xl font-roboto">Autoconocimiento</h3>
                            <p class="text-justify leading-5 text-gris1 lg:w-8/12 lg:mx-auto lg:text-xl font-roboto">Claridad y consciencia para que identifiques tus heridas, traumas, fobias y depresiones. Identificarás tus
                                 4 miedos más grandes, tus carencias y creencias limitantes. 
                                 Técnicas proyectivas,
                                  ejercicios de insights,  ejercicios de perdón y trabajos de desensibilización.</p>

                        </div>
                        <div class="justify-center  mt-8 mb-8 lg:mt-10 lg:mb-0 ">

                            <img src="./img/alq.png" class="w-2/12 mx-auto lg:w-1/12" alt="">


                            <h3 class="text-center text-2xl font-bold text-gris1 mb-4 lg:text-3xl font-roboto">Alquimia Mental</h3>
                            <p class="text-justify leading-5 text-gris1 lg:w-8/12 lg:mx-auto lg:text-xl font-roboto">Ejercicios físicos y mentales de sustitución de creencias limitantes a travez de información de sabiduría. Reprogramación, hipnosis, 
                                análogías, metáforas e interpretación de mensajes de los maestros en meditación y sueños. Llamados a la acción a partir de la reinterpretación.</p>

                        </div>
                       
                        <div class="justify-center  mt-8 mb-16 lg:mb-16 lg:mt-10">

                            <img src="./img/Accion.png" class="w-2/12 mx-auto lg:w-1/12" alt="">


                            <h3 class="text-center text-2xl font-bold text-gris1 mb-4 lg:text-3xl font-roboto" >Acción Enfocada</h3>
                            <p class="text-justify leading-5 text-gris1 lg:w-8/12 lg:mx-auto lg:text-xl font-roboto">Uso de herramientas  para priorizar propósitos y planes de acción,  sustentados en sabiduría y leyes universales. Acompañamiento.</p>

                        </div>

                </div>       

            </div>
        
    </article>

     <article class="my-16 lg:my-14 container mx-auto">
             <div class="container mx-auto">
                <h3 class=" text-3xl lg:text-5xl  text-azul1  w-9/12 mx-auto text-center leading-7  pt-0 lg:pt-3 font-roboto font-semibold "> Nuestros Programas </h3>
             </div>
             <div class="mt-4 lg:mt-5 text-center my-6 lg:my-0">
                    <p class=" text-gris1 text-xl lg:text-3xl leading-6 w-10/12 lg:w-12/12 mx-auto font-roboto">Sea cual sea tu interés o preocupación, encontrarás el curso que necesitas en este momento de tu vida Todos estos programas o cursos fueron creados para crear una transformación profunda en diferentes aspectos de tu vida.</p>
          
             </div>
             <div class="container mx-auto  lg:w-12/12 ">
                    <div class="grid lg:grid-cols-2  justify-center items-start lg:my-20 ">
                            <div class="text-center my-6">
                                <div class=" text-center">
                                     <img src="./img/programa01.png" class="w-10/12 mx-auto my-4 lg:my-7 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/Q55511263D?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                          Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                              <div class="text-center my-6">
                               <div class=" text-center">
                                     <img src="./img/programa02.png" class="w-10/12 mx-auto my-4 lg:my-7 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/P55775577G?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                     </div>
             </div>
             
    </article>

     <article class="my-20 lg:my-32 container mx-auto">
            <h3 class=" text-3xl lg:text-5xl  text-gris1  w-9/12 mx-auto text-center leading-7  pt-8 lg:pt-3 font-roboto font-semibold "> Nuestros Talleres </h3>
            <div class="container mx-auto  lg:w-12/12 ">
                    <div class="grid lg:grid-cols-2  justify-center items-start lg:my-10 ">
                            <div class="text-center my-6 lg:my-12">
                                <div class=" text-center">
                                     <img src="./img/taller01.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/W56947304E?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                          Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                            <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/taller02.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://bit.ly/PCinfoweb')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/taller03.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/B59428382C?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/taller04.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/O59686439N?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/taller05.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://us02web.zoom.us/meeting/register/tZ0qdeqqrDguEtaCnca3ADPe56mfNqSQUI1S')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/taller06.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/H58694023O?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/taller07.png" class="w-72 h-20 md:w-94 lg:w-94 h-60 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/Y59749811T?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/taller08.png" class="w-72 h-20  md:w-94  lg:w-94 h-60 mx-auto my-4 lg:my-5 lg:mb-12 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/F57867871X?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Más Información
                                
                                     </a>
                            
                                </div>
                             </div>
                     </div>
             </div>
    </article>
    <article class="  lg:my-14 container mx-auto">
             <h3 class=" text-3xl lg:text-5xl  text-gris1  w-9/12 mx-auto text-center leading-7  pt-10 lg:pt-3 font-roboto font-semibold "> Libros Digitales </h3>
           <div class="container mx-auto  lg:w-12/12 ">
                    <div class="grid lg:grid-cols-2  justify-center items-start lg:my-10 ">
                            <div class="text-center my-6 lg:my-12">
                                <div class=" text-center">
                                     <img src="./img/libro01.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:w-8/12" alt="">
                                    <a href="{{url('https://go.hotmart.com/W55148573N?dp=1')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                         Compra Ahora
                                
                                     </a>
                            
                                </div>
                             </div>
                            <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/libro02.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:w-8/12" alt="">
                                    <a href="{{url('/prosperamente')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Descarga Gratis
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/libro03.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:w-8/12" alt="">
                                    <a href="{{url('/prosperamente')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                            Descarga Gratis
                                
                                     </a>
                            
                                </div>
                             </div>
                             <div class="text-center my-6 lg:my-12">
                               <div class=" text-center">
                                     <img src="./img/libro04.png" class="w-10/12 mx-auto my-4 lg:my-5 lg:w-8/12" alt="">
                                    <a href="{{url('/prosperamente')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                                           Descarga Gratis
                                
                                     </a>
                            
                                </div>
                             </div>
                     </div>
             </div>


    </article>
     <article class="">
                    <div class="container mx-auto  lg:w-11/12 py-4 lg:py-16 font-roboto">
                                <div class="grid  pt-1  mb-4 lg:mb-10 lg:grid-cols-2 lg:gap-x-0 lg:pt-2 px-1 md:px-6 bg-orange-600   items-center ">
                                    <div class="lg:order-1  px-5 lg:px-0 mt-10 mb-0 lg:mb-4">
                                        
                                        <img src="./img/hrmnluz.png" class="w-10/12 mx-auto my-3 lg:my-5 lg:w-8/12" alt="">
                                     </div>
                                    <div class="lg:order-2 mb-5 lg:mb-0   mt-10 lg:mt-16  px-4  lg:pr-2">
                                        <p class="leading-6  mb-4  text-xl lg:text-3xl text-justify text-gris1 w-12/12 lg:w-10/12 mx-auto font-roboto">
                                      Con mucha emoción me complace anunciarles este proyecto de Servicio.</p>
                                        <p class="leading-6  mb-4  text-xl lg:text-3xl text-justify text-gris1 w-12/12 lg:w-10/12 mx-auto font-roboto">
                                      Con la certeza de que es el mejor momento para crear lazos, tender puentes y abrirnos al diálogo y la cooperación, promoviendo la lealtad, el respeto y la creación de comunidades de cuarta dinámica.</p>
                                     <p class="leading-6   mb-4 text-xl lg:text-3xl text-justify text-gris1 w-12/12 lg:w-10/12 mx-auto font-roboto">
                                     Abrimos un espacio al que llamamos “Hermanos de Luz” un espacio para que todas las personas que sintonicen con información de sabiduría universal, tengan acceso este grupo para compartir en una comunidad de libre acceso y con encuentros quincenales a las 8 00 AM, horario de Perú.</p>

                                    </div>
                                   
                                </div>  
                                <div class="text-center my-16 lg:my-10 lg:mt-28">
                                    <div class=" text-center">
                                            
                                            <a href="{{url('https://us02web.zoom.us/meeting/register/tZYpde2rrDsuHtHIwHCN2JvafJKiOH_WidF0')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-celeste hover:bg-azul2 text-gris2 font-bold font-roboto py-1 px-10 lg:px-10  lg:py-3 focus:outline-none focus:shadow-outline">
                                    
                                                    Unirme a Hermanos de Luz
                                        
                                            </a>
                                    
                                        </div>
                             </div>
                    </div>
                    
                    

        </article> 

    <article class="my-10 lg:my-14 container mx-auto">
            <h3 class=" text-3xl lg:text-5xl  text-gris1  w-9/12 mx-auto text-center leading-7  pt-0 lg:pt-3 font-roboto font-semibold "> Otros Servicios </h3>
            <div class="container mx-auto  lg:w-11/12 ">
                    <div class="grid lg:grid-cols-3  justify-center items-start lg:my-10 ">
                            <div class="text-center my-6">
                                <div class=" text-center">
                                     <img src="./img/servicio01.png" class="w-10/12 mx-auto my-3 lg:my-5 lg:w-10/12" alt="">
                                  <p class=" leading-6 text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                  Coaching </p>
                                     <p class="leading-6  text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                     Personal</p>
                                </div>
                             </div>
                            <div class="text-center my-6">
                               <div class=" text-center">
                                     <img src="./img/servicio02.png" class="w-10/12 mx-auto my-3 lg:my-5 lg:w-10/12" alt="">
                                     <p class=" leading-6 text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                  Coaching </p>
                                     <p class="leading-6  text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                     Grupal</p>
                                    
                            
                                </div>
                             </div>
                             <div class="text-center my-6">
                               <div class=" text-center">
                                     <img src="./img/servicio03.png" class="w-10/12 mx-auto my-3 lg:my-5 lg:w-10/12" alt="">
                                      <p class=" leading-6 text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                  Sesiones </p>
                                     <p class="leading-6  text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                      de Hipnosis</p>
                                     
                            
                                </div>
                             </div>
                             <div class="text-center my-6">
                               <div class=" text-center">
                                     <img src="./img/servicio04.png" class="w-10/12 mx-auto my-3 lg:my-5 lg:w-10/12" alt="">
                                     <p class=" leading-6 text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                  Sesiones de Tecnicas Proyectivas </p>
                                     <p class="leading-6  text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                     y Carta Metafóricas </p>
                                   
                            
                                </div>
                             </div>
                             <div class="text-center my-6">
                               <div class=" text-center">
                                     <img src="./img/servicio05.png" class="w-10/12 mx-auto my-3 lg:my-5 lg:w-10/12" alt="">
                                     <p class=" leading-6 text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                  Sesiones de </p>
                                     <p class="leading-6  text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                      Eneagrama</p>
                                   
                            
                                </div>
                             </div>
                             <div class="text-center my-6">
                               <div class=" text-center">
                                     <img src="./img/servicio06.png" class="w-10/12 mx-auto my-3 lg:my-5 lg:w-10/12" alt="">
                                     <p class=" leading-6 text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                  Capacitación </p>
                                     <p class="leading-6  text-xl lg:text-2xl text-center font-bold text-gris1 font-roboto">
                                       Empresarial</p>
                                   
                            
                                </div>
                             </div>
                     </div>
             </div>
    </article>
    <article class="my-24 lg:my-32 container mx-auto">
             <div class="container mx-auto">
                <h3 class=" text-3xl lg:text-5xl  text-gris1  w-9/12 mx-auto text-center leading-7  pt-0 lg:pt-3 font-roboto font-semibold ">
                 Únete Gratis </h3>
             </div>
             <div class="mt-4 lg:mt-16 text-justify">
                    <p class=" text-gris1 text-xl lg:text-3xl leading-2 w-11/12 lg:w-9/12 mx-auto font-roboto">Unirse a nuestra
                     comunidad para aprender y mejorar, es muy sencillo. Sigue los pasos y tendrás acceso a mucha información
                      valiosa para encontrar ese camino a una vida más plena. </p>

                            
             </div>
             <div class="mt-8 lg:mt-14 text-justify w-11/12 lg:w-9/12 mx-auto">
                    <h3 class=" text-gris1 font-bold text-xl lg:text-3xl leading-2 font-roboto">Obtendrás contenido exclusivo: </h3>
                     <p class=" text-gris1 text-xl lg:text-3xl ml-1 lg:ml-6 font-roboto mt-5">  - Todas nuestras novedades </p>
                    <p class=" text-gris1 text-xl lg:text-3xl ml-1 lg:ml-6 font-roboto">  - Ebooks Gratis</p>
                    <p class=" text-gris1 text-xl lg:text-3xl ml-1 lg:ml-6 font-roboto"> - Minicursos Gratis </p>
                    <p class=" text-gris1 text-xl lg:text-3xl ml-1 lg:ml-6 font-roboto">- Meditaciones para descargar en Mp4  </p>
                    <p class=" text-gris1 text-xl lg:text-3xl ml-1 lg:ml-6 font-roboto"> - Ofertas y Promociones Especiales </p>
                    <p class=" text-gris1 text-xl lg:text-3xl ml-1 lg:ml-6 font-roboto"> - ...y numerosas herramientas prácticas y funcionales </p>

             </div>

             <div class="mt-4 lg:mt-20 text-center">
                        <a href="{{url('https://percycoronel.com/register')}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-1 px-8 lg:px-10  lg:py-3 focus:outline-none focus:shadow-outline">
                               
                            Únete a Nuestra Comunidad
                                
                        </a>
                            
             </div>

    </article>
    <article class="mb-20 lg:mt-32">
            <div class="container mx-auto">
                <div class=" mt-16 mb-6">
                    <p class="text-gris1 text-center font-bold text-4xl lg:text-5xl font-roboto">BLOG</p>
                </div> 


                <div class="grid  mt-1  pl-6 pr-0 lg:hidden justify-center items-start">

                   
                    <img class="w-full" src="./img/blogg.png" alt="">
                </div>
                <div class="hidden  lg:grid  lg:mt-0 lg:pt-2 px-6  justify-center items-start">
                    
                         
                         <img class="w-full" src="./img/blogdestok.png" alt="">
                    
                    
                </div>

            </div>
    </article>
   
    
    

@stop

    

