@extends('layouts.index')

@section('title', 'Área do Cliente')

@section('content')

    <div class="text-center my-10">
        <h1>Perfil</h1>
    </div>

    <div class="grid grid-cols-5">

        <div class="card">
            @component('components.user-menu')

            @endcomponent
        </div>

        <div class="card col-span-4">
            <table class="w-full">
                <tbody>
                    <tr>
                        <td rowspan="7">
                            <img src="{{ auth()->user()->profile_photo_path }}" onerror="{{ asset('img/no-image-found-360x260.png') }}" class="w-full">
                        </td>
                    </tr>

                    <tr class="bg-gray-200">
                        <th>Nome</th>
                        <td>
                            <div class="py-5 px-2 mr-2 my-2 rounded-lg shadow-inner  bg-white flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ auth()->user()->name }}
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>E-mail</th>
                        <td>
                            <div class="py-5 px-2 mr-2 my-2 rounded-lg shadow-inner  bg-white flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                                {{ auth()->user()->email }}
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Endereço</th>
                        <td>
                            <div class="py-5 px-2 mr-2 my-2 rounded-lg shadow-inner  bg-white">
                                @if(auth()->user()->address != null)
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        @php
                                            foreach (json_decode(auth()->user()->address) as $endereco) {
                                                echo $endereco->Logradouro . ', ' . $endereco->Numero .' '. $endereco->Bairo .' '.$endereco->Estado;
                                            }
                                        @endphp
                                    </div>
                                @else
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        Nenhum endereço adicionado
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Telefone</th>
                        <td>
                            <div class="py-5 px-2 mr-2 my-2 rounded-lg shadow-inner  bg-white">
                                @if(auth()->user()->phone != null)
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        {{ auth()->user()->phone }}
                                    </div>
                                @else
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <p>
                                            (__) _____-____
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Data de Criação</th>
                        <td>
                            <div class="py-5 px-2 mr-2 my-2 rounded-lg shadow-inner bg-white flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ date('d-m-Y h:i:s', strtotime(auth()->user()->created_at)) }}
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Ultima atualização</th>
                        <td>
                            <div class="py-5 px-2 mr-2 my-2 rounded-lg shadow-inner bg-white flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ date('d-m-Y h:i:s', strtotime(auth()->user()->updated_at)) }}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
