@extends('layouts.index')

@section('title', 'Área do Cliente')

@section('content')

    <div class="text-center my-10">
        <h1>{{ auth()->user()->name }}</h1>
    </div>

    <div class="grid grid-cols-5">

        <div class="card">
            @component('components.user-menu')

            @endcomponent
        </div>

        <div class="card col-span-4">
            <h2 class="underline">Perfil</h2>

            <table class="table w-1/2 mx-auto my-5">
                <tbody>
                    <tr>
                        <th>Nome</th>
                        <td>{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Data de Criação</th>
                        <td>{{ auth()->user()->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Ultima atualização</th>
                        <td>{{ auth()->user()->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
