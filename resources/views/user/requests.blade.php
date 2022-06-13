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
            <h2 class="underline">Pedidos</h2>

            <table class="table mx-auto my-5">
                <thead>
                    <tr>
                        <th>SKU</th>
                        <th>Nome do Pedido</th>
                        <th>Data do Pedido</th>
                        <th>Status</th>
                        <th>Ultima atualização</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>123</td>
                        <td>Pedido 1</td>
                        <td>12-06-2021 22:32</td>
                        <td>Concluido</td>
                        <td>12-06-2021 22:32</td>
                        <td>
                            <div>
                                <button>Detalhes</button>
                                <button>Pedir reembolso</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>456</td>
                        <td>Pedido 2</td>
                        <td>12-06-2021 22:32</td>
                        <td>Em Reembolso</td>
                        <td>12-06-2021 22:40</td>
                        <td>
                            <div>
                                <button>Detalhes</button>
                                <button>Pedir reembolso</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>789</td>
                        <td>Pedido 3</td>
                        <td>12-06-2021 22:40</td>
                        <td>Em Analise</td>
                        <td>12-06-2021 22:41</td>
                        <td>
                            <div>
                                <button>Detalhes</button>
                                <button>Pedir reembolso</button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

@endsection
