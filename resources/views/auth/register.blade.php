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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form action="{{route('register')}}"  method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
         @csrf
        <div class="mb-4">
            <h3 class="text-center font-bold text-2xl" >REGíSTRATE</h3>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="nombre" name="name" type="text" placeholder="Nombre" :value="old('name')" required autofocus>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="pais">
                País
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="pais" name="pais" type="text" placeholder="País" :value="old('pais')" required autofocus>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">
                Correo
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="correo" name="email" type="email" placeholder="Correo" :value="old('email')" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Contraseña
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" name="password" type="password" placeholder="******************"  required autocomplete="new-password">
            
        </div>
        <div class="mb-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Confirmar Contraseña
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password_confirmation"  type="password"
                                name="password_confirmation" required  placeholder="******************"  required autocomplete="new-password">
            
        </div>
        <div class="flex items-center justify-around">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Inicia Sesion') }}
                </a>
             <button type="submit" class="bg-blue-500 hover:bg-azul2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Registrate
             </button> 
         
            
        </div>
    </form>

       
    </x-auth-card>
</x-guest-layout>
@stop