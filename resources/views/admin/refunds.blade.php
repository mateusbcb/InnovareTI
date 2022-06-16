@extends('layouts.admin')

@section('title', 'Reembolsos')

@section('content')

    <div class="text-center">
        <h1>Admin - Reembolsos</h1>
    </div>

    <div class="mx-40 my-20">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SKU</th>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Preço</th>
                    <th>Status</th>
                    <th>data Compra</th>
                    <th>data Pedido</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                @foreach($refunds as $key => $refund)
                    <tr>
                        <th>{{ $refund->id }}</th>
                        <td>{{ $refund->product->sku }}</td>
                        <td>{{ $refund->product->name }}</td>
                        <td>{{ $refund->user->name }}</td>
                        <td>R$ {{ $refund->product->price }}</td>
                        <td>
                            @switch($refund->status)
                                @case(1)
                                    <span class="badge badge-success">
                                        Concluido
                                    </span>
                                    @break

                                @case(2)
                                    <span class="badge badge-warning">
                                        Pendente
                                    </span>
                                    @break

                                @case(3)
                                    <span class="badge badge-danger">
                                        Recusado
                                    </span>
                                    @break

                                @default
                                    <span class="badge badge-info">
                                        inesistente
                                    </span>

                            @endswitch
                        </td>
                        <td>{{ date('d-m-Y', strtotime(  $refund->product->created_at  )) }}</td>
                        <td>{{ date('d-m-Y', strtotime( $refund->created_at  )) }}</td>
                        <td>
                            <div class="flex justify-start">
                                @switch($refund->status)
                                    @case(1)
                                        <a href="#" class="btn text-blue-600" title="Informações">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        <a class="btn text-green-500 cursor-not-allowed" title="Concluido">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </a>
                                        <a class="btn text-green-500 cursor-not-allowed" title="Concluido">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </a>
                                        @break

                                    @case(2)
                                        <a href="#" class="btn text-blue-600" title="Informações">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="btn text-green-600" title="Aprovar">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="btn text-red-600" title="Negar">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        @break

                                    @case(3)
                                        <a href="#" class="btn text-blue-600" title="Informações">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        <a class="btn text-red-600 cursor-not-allowed" title="Recusado">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </a>
                                        <a class="btn text-red-600 cursor-not-allowed" title="Recusado">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </a>
                                        @break
                                @endswitch
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
    <script>

    </script>
@endsection
