@extends('layouts.index')

@section('title', 'Principal')

@section('content')
    <div class="text-center mt-28">
        <h1 class="my-5">Não importa o desafio <br> da sua empresa</h1>

        <p>Nós temos a solução ideal para o seu problema,</p>
        <p>seja com nossos produtos, ou desenvolvimento de sistemas web,</p>
        <p>aplicativos móveis, e integrações de sistemas do zero.</p>

        <button class="btn-primary mt-5">
            <div class="flex items-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-white mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                Explore nossas áreas de atuação
            </div>
        </button>
    </div>

    <div class="flex justify-between my-36">
        <div class="mx-20">
            <img src="{{ asset('img/app_e_admin.webp') }}" alt="">
        </div>
        
        <div class="mx-15">
            <h2>
                Reserve uma sala de reunião ou estação <br> de trabalho em menos de 1 minuto
            </h2>
            <h3>
                Conheça nossa solução ideal para o
                retorno ao trabalho presencial ou híbrido.

                Planos a partir de R$190*
            </h3>

            <button class="btn-primary mt-5">
                <div class="flex items-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-white mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                    Quero conhecer o Invitee
                </div>
                
            </button>
        </div>
    </div>

@endsection