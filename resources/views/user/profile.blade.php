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
                        <td rowspan="6" class="">
                            <img src="{{ auth()->user()->profile_photo_path }}" alt="{{ auth()->user()->name }}" class="w-full">
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Nome</th>
                        <td>
                            <div class="py-5 px-2 rounded-l-lg shadow-inner  bg-white">
                                {{ auth()->user()->name }}
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>E-mail</th>
                        <td>
                            <div class="py-5 px-2 rounded-l-lg shadow-inner  bg-white">
                                {{ auth()->user()->email }}
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Endereço</th>
                        <td>
                            <div class="py-5 px-2 rounded-l-lg shadow-inner  bg-white">
                                @php
                                    foreach (json_decode(auth()->user()->address) as $endereco) {
                                        echo $endereco->Logradouro . ', ' . $endereco->Numero .' '. $endereco->Bairo .' '.$endereco->Estado;
                                    }
                                @endphp
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Data de Criação</th>
                        <td>
                            <div class="py-5 px-2 rounded-l-lg shadow-inner  bg-white">
                                {{ auth()->user()->created_at }}
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <th>Ultima atualização</th>
                        <td>
                            <div class="py-5 px-2 rounded-l-lg shadow-inner  bg-white">
                                {{ auth()->user()->updated_at }}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
