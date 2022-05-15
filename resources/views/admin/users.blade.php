@extends('layouts.base')
@section('titulo', 'Users')
    
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
<div class="container mx-auto">
    <div class="my-4 text-center">
        <form action="{{route('users.index')}}" method="GET">
            <div class="cont">
                <label class="font-bold mr-2">Buscar</label>
                <input class="rounded-full" type="search" id="search" name="texto"  placeholder="  Usuarios" title="Presione Esc para supender la búsqueda">
                {{-- <input type="submit" value="buscar"> --}}
            </div>

        </form>
        
    </div>
    
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col mb-10 lg:mb-20">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Correo 
                </th>
               
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Delete</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              
                 
                  @foreach ($users as $item)
                  <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                              {{$item->name}}
                          </div>
                          
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$item->email}}</div>
                    
                  </td>
                  
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    {{-- <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                    <form action="{{route('user.destroy', ['user' => $item->id] ) }}" method="POST">
                        @csrf
                       @method('DELETE')
                           <button type="submit" class="text-sm lg:text-lg inline-block rounded-full bg-azul1 hover:bg-gris2 text-white font-bold px-1">Reset </button>
                      </form>
                  </td>
                </tr>
                  @endforeach
                
                  {{--  --}}
  
              <!-- More people... -->
            </tbody>
          </table>
          {{-- paginacion --}}
          
        </div>
        <div class="px-6 py-3">
            {{ $users->links() }}

          </div>
      </div>
    </div>
  </div>
  

</div>
@stop