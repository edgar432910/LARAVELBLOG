@extends('layouts.base')
@section('titulo', 'login')

@section('contenido') 

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
       <div class="mt-24">
       
       <form action="{{route('login')}}"  method="POST"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="mb-4">
                        <h3 class="text-center font-bold text-2xl" >INICIO DE SESION</h3>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">
                            Correo
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" name="email" :value="old('email')" required autofocus >
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password"   type="password"  name="password" required autocomplete="current-password">
                        
                    </div>
        
                    <div class="mb-6">
                         <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                        </label>
                    </div>
                    
                    <div class="flex items-center justify-around">
                            
                        <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}"> 
                            
                            {{ __('Olvidaste tu contraseña?') }}
                        </a>
                        <button type="submit"  class="bg-blue-500 hover:bg-azul2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                            Inicia Sesión
                        </button>
                        
                    </div>
                </form>
       
       </div> 
       
       
    </x-auth-card>
</x-guest-layout>
@stop