@extends('layouts.index')

@section('title', 'Área do Cliente')

@section('content')

    <div class="text-center my-10">
        <h1>Meus Pedidos</h1>
    </div>

    <div class="grid grid-cols-5">

        <div class="card">
            @component('components.user-menu')

            @endcomponent
        </div>

        <div class="card col-span-4">
            <table class="table mx-auto my-5">
                <thead>
                    <tr>
                        <th>SKU</th>
                        <th>Nome do Pedido</th>
                        <th>Data da Compra</th>
                        <th>Preço</th>
                        <th>Status</th>
                        <th>Ultima atualização</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $key => $request)
                        <tr>
                            <td>{{ $request->product->sku }}</td>
                            <td>{{ $request->product->name }}</td>
                            <td>{{ $request->created_at }}</td>
                            <td>R$ {{ number_format($request->price, 2, ',', '.') }}</td>
                            <td>
                                @switch($request->status)
                                    @case(1)
                                        <span class="badge badge-success">
                                            Entregue
                                        </span>
                                        @break
                                    @case(2)
                                        <span class="badge badge-warning">
                                            Em Análise
                                        </span>
                                        @break
                                @endswitch
                            </td>
                            <td>{{ $request->updated_at }}</td>
                            <td>
                                <div class="flex justify-start">
                                    <a href="#" class="btn text-blue-600" title="Informações">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <a href="{{ route('user.refund_request') }}" class="btn btn-primary" title="Pedir Reembolso">
                                Pedir Reembolso
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>

@endsection
