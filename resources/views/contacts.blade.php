@extends('layouts.index')

@section('title', 'Principal')

@section('content')
    <div class="text-center my-28">
        <h1 class="my-5">Contatos</h1>

        <p>Entre em contato</p>

        <button class="btn-primary mt-5">
            <div class="flex items-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-white mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                Enviar
            </div>
        </button>
    </div>

@endsection