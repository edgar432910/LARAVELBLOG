@extends('layouts.base')
@section('titulo', 'ProsperaMente')
@section('color', '')

@section('contenido')           
           
           
<article class="fondo2 font-roboto">
        <div class="container mx-auto"> 
            <div class="grid  lg:grid-cols-2 gap-x-4 pt-20 lg:pt-12 px-6 ">
               
                <div class=" px-2 pt-24 lg:pt-6 ">
                     <p><img src="./img/Logo-Color.png" class="w-9/12 my-1 mt-5 lg:w-7/12" alt=""></p>
                     <h1 class=" text-3xl lg:text-5xl leading-none text-gris1 font-bold w-10/12 font-roboto"> ProsperaMente </h1>
                        
                    <div class="">
                    <p class="text-sm mt-4 lg:text-xl text-justify leading-4 lg:w-11/12 font-roboto">
                         ¡Bienvenido a este programa de acompañamiento con el cual iniciarás tu transformación positiva y cambio de consciencia!
                    </p>
                    <p class="text-sm mt-2 lg:text-xl text-justify leading-4 lg:w-11/12 font-roboto ">
                         Mi propósito es acompañarte a que puedas “darte cuenta” de todo aquello que te detiene a prosperar.
                    </p>

                    </div>
                  

                    <div class="my-48 lg:my-20 text-center">
                       
                        
                            
                    </div>

                </div>
                <div class="hidden lg:flex lg:flex-row lg:space-x-2 lg:justify-around ">
                             
                        <img src="./img/Percy1.png" class="max-w-72 max-h-72" alt="">
                        <img src="./img/Percy2.png" class="max-w-72 max-h-72" alt="">
                        
                </div>
            </div>    

        </div>
       
    </article> 
<article class="  lg:my-14 container mx-auto">
              <h2 class="text-azul1 text-center mt-16 lg:mt-10 font-bold text-3xl lg:text-5xl font-roboto ">  Dale click y descarga los pdfs</h2>
           <div class="container mx-auto  lg:w-12/12 mb-10 lg:mb-0">
                    <div class="grid lg:grid-cols-2  justify-center items-start lg:my-5 ">
                        @foreach($pdfs as $pdf)
                        @if (is_null($pdf->url))
                        <div class="text-center my-6 lg:mb-12" lg:mt-1>
                           <div class=" text-center">
                                 
                                 <img class="w-80 h-96 md:w-64 md:h-80 mx-auto my-4 lg:my-5 lg:w-80 lg:h-96" src="{{ url('pdfs/image/'.$pdf->imagen) }}" alt="{{$pdf->imagen}}">
                                
                                 <a href="archivos/{{$pdf->pdf}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline" download="{{$pdf->name}}.pdf">
                              
                                    Descarga Gratis                                      
                                    
                                 </a>
                            </div>
                         </div>
                        @else
                        <div class="text-center my-6 lg:mb-12" lg:mt-1>
                           <div class=" text-center">
                                 
                                 <img class="w-80 h-96 md:w-64 md:h-80 mx-auto my-4 lg:my-5 lg:w-80 lg:h-96" src="{{ url('pdfs/image/'.$pdf->imagen) }}" alt="{{$pdf->imagen}}">
                                
                                 <a href="{{$pdf->url}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline" target="blank_">
                                    Compra Ahora        
                                 </a>
                                 
                                
                            </div>
                         </div>
                           
                        @endif

                   
                  @endforeach
                     </div>
             </div>


    </article>

     
           
   
    <article class="">
   
        <div class="container mx-auto  lg:w-12/12  lg:px-6 mt-0 lg:mt-28">
       

              <h2 class="text-azul1 text-center mt-16 lg:mt-10 font-bold text-3xl lg:text-5xl font-roboto ">  Dale click y escucha los Audios</h2>


          <div class="grid md:grid-cols-2  justify-center items-start lg:my-5 ">
               
                   @foreach($spotifys as $spotify)
                       
                        <div class="text-center my-6 lg:mb-12" lg:mt-1>
                           <div class=" text-center">
                                 
                                 <img class="w-80 h-96 md:w-64 md:h-80 mx-auto my-4 lg:my-5 lg:w-80 lg:h-96" src="{{ url('spotify/image/'.$spotify->imagen) }}" alt="{{$spotify->imagen}}">
                                
                                 <a href="{{$spotify->url}}" class="inline-block rounded-full text-xl lg:text-3xl bg-azul3 hover:bg-black text-white font-bold font-roboto py-2 px-14 lg:px-24  lg:py-3 focus:outline-none focus:shadow-outline" target="blank_">
                                    Escuchar Ahora        
                                 </a>
                                 
                                
                            </div>
                         </div>
                           
                        

                   
                  @endforeach
                   
           </div>
        </div>


    </article>

    <article>
        <div class="container mx-auto  lg:px-6 mt-0 lg:mt-28 ">                 
        <div class="mt-10">
                    <p class="text-azul1 text-center font-bold text-2xl lg:text-5xl font-roboto">Algunos Extractos de mis Sesiones </p>
		    <p class="text-celeste -my-1  text-center  text-1xl lg:text-3xl leading-4 w-11/12 lg:w-11/12 mx-auto font-roboto">Comprensión y acción para inspirar tu cambio y evolución  </p>
                </div>
            
            <!-- <div class="grid lg:grid-cols-2  gap-7  bg-orange-600  mb-10 lg:mb-40 items-center "> -->
            <div class="grid lg:grid-cols-2 mt-6 gap-7 lg:pt-2 mb-10 lg:mb-40  bg-orange-600   items-center lg:mt-20">
                   
                    @foreach($youtubes as $youtube)          
                    <div class=" px-1 mt-4 text-center">
				        <iframe class="w-full lg:w-11/12 mx-auto " height="350" src="{{$youtube->urlweb}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                    </div> 
                                   
                                
              
                    @endforeach
                    
            </div>
        </div>
       
</article>
    
    

     <article>
        <div class="container mx-auto"> 
                       
            <div class="grid  mt-28 lg:pt-2  bg-orange-600   items-center">
                <div class="">
                    <p class="text-gris1 text-center font-bold text-4xl lg:text-5xl font-roboto">Nuestros Cursos</p>
                </div>

                <div class="grid  mt-16  pl-6 pr-6 lg:hidden justify-center items-start">

                  
                    <img class="w-full" src="./img/Cursosmb.png" alt="">
                </div>
                <div class="hidden  lg:grid  lg:mt-12  px-6  justify-center items-start">

    
                     <img class="w-full" src="./img/Cursosdt.png" alt="">


                </div>


                <div class="mt-20 mb-16 text-center">
                    
                    <a href="{{url('/prosperamente')}}">
                            <span class="py-1 inline-block rounded-full bg-gris2 hover:bg-gray-500 text-white font-bold text-xl lg:text-3xl px-10 lg:px-18 lg:py-3 focus:outline-none focus:shadow-outline font-roboto">
                                Explora todos los cursos
                            </span>
                    </a>
                </div>


            </div>
        </div>
       
    </article>
    <article>
        <div class="container mx-auto"> 
                       
            <div class="grid  mt-28  px-1  ">
                <div class="">
                    <p class="text-azul1 text-center font-bold text-2xl lg:text-4xl leading-4 font-roboto">Conoce la experiencia de nuestros suscriptores</p>
                </div>
                <div class="mt-3 lg:mt-2">
                    <p class="text-celeste text-center  text-xl lg:text-2xl w-10/12 leading-4 mx-auto font-roboto">Nos sentimos honrados por todas las personas que hemos podido ayudar</p>
                </div>

                <div class="mt-20">
                    <p class="text-gris1 text-center font-bold text-xl lg:text-3xl font-roboto">Nuestros consultantes indican</p>
                </div>                           


            </div>
            <div class="grid  mt-8  px-4   w-11/12 lg:w-9/12 bg-hueso rounded-xl mb-6 mx-auto">
                                        
                    <div class="flex justify-between mt-3"> 
                        <div><span class="text-xs  lg:text-2xl text-gris1 font-bold font-roboto"  >Maria Christina Araque-Ecuador</span>
                        </div>
                        <div><span class="text-xs lg:text-xl text-gris1 font-bold font-roboto">21 Enero, 2021</span>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 text-xs lg:text-lg">
                        <p class="text-justify lg:leading-5 text-gris2 font-roboto">
                        Hace algunos meses atrás sentía que había llegado a un punto de confusión y dolor muy profundos en mi vida, en ese momento invadida por las dudas y la incertidumbre tuve la oportunidad de conocer a Percy, quien siempre estuvo presto a escucharme. Con las reuniones que hemos tenido, donde pacientemente ha sabido escucharme, he podido encontrar la guía, la orientación y el acompañamiento que tanto necesitaba ya que a través de sus valiosas palabras, consejos e información, ha renacido en mi  la luz que pensaba extinta.
                        Es poco lo que estas palabras pueden expresar respecto a la inmensa gratitud que siento por quien considero mi mentor en este camino llamado vida.
                         </p>
                         
                    </div>

            </div>
            <div class="grid  mt-4  px-4   w-11/12 lg:w-9/12 bg-hueso rounded-xl mb-6 mx-auto">
                                        
                    <div class="flex justify-between mt-3"> 
                        <div><span class="text-xs  lg:text-2xl text-gris1 font-bold font-roboto"  >Maria Alejandra Ramos EE.UU</span>
                        </div>
                        <div><span class="text-xs lg:text-xl text-gris1 font-bold font-roboto">07 Marzo, 2021</span>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 text-xs lg:text-lg">
                        <p class="text-justify lg:leading-5 text-gris2 font-roboto">
                        Recuerdo con perfecta nitidez cuando asistía a clases virtuales de EMA, el nombre “Percy” no se hacia esperar cuando se necesitaba una información u alguna participación, siempre listo y dispuesto, allí estaba entregando lo que se pedía. Hay palabras en nuestro lenguaje que describen a la perfección a algunas personas en nuestras vidas, personas que llegan a ser clave, personas que por mas que pasen días y con ellos años jamás podrás olvidar en tu memoria. Facilitador :“… aquel que posee herramientas y las dispone para hacer fácil cualquier cosa o situación que requiera de asistencia.” Esta palabra encaja y describe al señor Coronel con completa precisión.
                        Tenia yo mucha información en mis manos, y cómo no? Llevaba ya un buen tiempo desde que tuve la maravillosa correspondencia de encontrar nuestra adorada escuela de magia del amor. Y desde entonces,   </p>
                    </div>

            </div>

            <div class="grid  mt-4  px-4   w-11/12 lg:w-9/12 bg-hueso rounded-xl mb-6 mx-auto">
                                        
                    <div class="flex justify-between mt-3"> 
                        <div><span class="text-xs  lg:text-2xl text-gris1 font-bold font-roboto"  >Gloria Torres EE.UU</span>
                        </div>
                        <div><span class="text-xs lg:text-xl text-gris1 font-bold font-roboto">01 Enero, 2021</span>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 text-xs lg:text-lg">
                        <p class="text-justify lg:leading-5 text-gris2 font-roboto">
                        Yo he querido ser mejor persona, entender un poco más de lo que en realidad es la vida, percy me fue llevando poco a poco entender el porqué la vida funciona cómo funciona, cómo es posible vivir una vida más feliz, más amena, si comprendemos estos conceptos básicos. hemos estudiado el eneagrama con mucha paciencia y me ayudó a entender un poco más sobre mi personalidad Y como la podría orientar a mi beneficio.
                         </p>
                    </div>

            </div>
             <div class="grid  mt-4  px-4   w-11/12 lg:w-9/12 bg-hueso rounded-xl mb-6 mx-auto">
                                        
                    <div class="flex justify-between mt-3"> 
                        <div><span class="text-xs  lg:text-2xl text-gris1 font-bold font-roboto"  > Cristina Moreno – Peru  </span>
                        </div>
                        <div><span class="text-xs lg:text-xl text-gris1 font-bold font-roboto">  20 Diciembre, 2020 </span>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 text-xs lg:text-lg">
                        <p class="text-justify lg:leading-5 text-gris2 font-roboto">
                        No ha pasado mucho tiempo desde que recibí información valiosa y asesoría personalizada con Percy, sin embargo, desde ese momento siento que mi vida empezó a ser otra. Pasan los días y cada vez compruebo más y más de manera tangible los cambios y avances en mí, agradezco infinitamente el privilegio de tenerlo como coach de vida.
                        </p>
                    </div>

            </div>
            <div class="grid  mt-4  px-4   w-11/12 lg:w-9/12 bg-hueso rounded-xl mb-6 mx-auto">
                                        
                    <div class="flex justify-between mt-3"> 
                        <div><span class="text-xs  lg:text-2xl text-gris1 font-bold font-roboto"  >  Magaly Vite - Peru </span>
                        </div>
                        <div><span class="text-xs lg:text-xl text-gris1 font-bold font-roboto"> 24 OCtubre, 2020  </span>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 text-xs lg:text-lg">
                        <p class="text-justify lg:leading-5 text-gris2 font-roboto">
                        Tengo un gran testimonio de vida con una persona muy querida y especial para mí, nunca olvidaré las palabras o la frase que cuando el alumno está preparado para cambiar desde el fondo de su corazón, aparece su guía, o maestro y es ahí donde conocí más que un maestro un padre que me dio claridad para determinar decisiones  de mi vida que no hubiera sido fácil para mí sin la ayuda de un consejero, profesional, amigo que gracias a él puedo reconocer todos los sucesos y experiencias y decisiones que tomé en adelante con mi vida y así poder vivir cada proceso evolutivo con más confianza, certeza y responsabilidad, paz y mucho amor, descubrí que la vida es maravillosa, bendita.  Hay tantas cosas que decir, gracias por todo mi querido maestro, es difícil encontrar en alguien una persona como tú, gracias por tu infinito amor y paciencia q tiene nuestro padre contigo y eso tú lo revelas. 
                        </p>
                    </div>

            </div>
            <div class="grid  mt-4  px-4   w-11/12 lg:w-9/12 bg-hueso rounded-xl mb-10 mx-auto lg:mb-20">
                                        
                    <div class="flex justify-between mt-3"> 
                        <div><span class="text-xs  lg:text-2xl text-gris1 font-bold font-roboto"  > Jorge Razuri - Peru  </span>
                        </div>
                        <div><span class="text-xs lg:text-xl text-gris1 font-bold font-roboto"> 12 Octubre, 2020  </span>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 text-xs lg:text-lg">
                        <p class="text-justify lg:leading-5 text-gris2 font-roboto">
                        Quiero expresar mi agradecimiento a mi gran amigo Percy Coronel a quien conocí hace 1 año gracias a los caminos que el Padre tiene para nosotros, ambos hemos venido teniendo un gran crecimiento espiritual a través de la información de escuela de magia de amor. En lo personal me gustaría compartir el testimonio personal, hace 3 años llegué a un punto de saturación quedando sin recursos y con deudas, mis relaciones eran fatales y pasaba por un proceso divorcio y separación de mi hijo que era lo que más me dolía, sin embargo llegó a mí una información de sabiduría que fue mi medicina en ese momento junto a una guía espiritual, el cual haciendo un trabajo interior profundo de limpieza interna y comprensión de la perfección de todo, me ayudó a salir de todos esos resultados desastrosos que inconsciente había generado en lo propia vida. En la actualidad puedo decir que económicamente vivo bien y siempre en crecimiento, que mis relaciones con el mundo y las personas son espectaculares, cada vez soy correspondiente con muchas situaciones hermosas y asumo con totalidad mi vida y todo lo que sucede en ella, comprendo perfectamente que cada suceso tiene una maravillosa oportunidad de aprendizaje y crecimiento que es favorable para mí. Agradezco a mi gran amigo Percy Coronel porque he contado con él en muchas ocasiones donde me enredaba y gracias a su profunda comprensión de sabiduría y su gran servicio incondicional he podido seguir creciendo y salir del caos que en ese momento había en mi vida. Gracias Percy por siempre estar dispuesto a servir y aconsejar desde tu paciencia, amor y sabiduría.
                        </p>
                    </div>

            </div>
            <!--
            <div class="grid  mt-4  px-4   w-11/12 lg:w-9/12 bg-hueso rounded-xl mb-6 mx-auto">
                                        
                    <div class="flex justify-between mt-3"> 
                        <div><span class="text-xs  lg:text-2xl text-gris1 font-bold"  >   </span>
                        </div>
                        <div><span class="text-xs lg:text-xl text-gris1 font-bold">   </span>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 text-xs lg:text-lg">
                        <p class="text-justify lg:leading-5 text-gris2">

                        </p>
                    </div>

            </div>
            -->
           




          

            
            
            


            

        </div>
       
    </article>

@stop    