@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    <div class="text-center">
        <h1>Admin - Home</h1>
    </div>

    <div class="m-10 p-10 grid space-x-8 space-y-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="card ml-8 mt-8 mb-0 mr-0 flex flex-col justify-between">
            <div>
                <h3>Total de Produtos</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($products->all()) }}
            </div>
        </div>
        <div class="card flex flex-col justify-between">
            <div>
                <h3>Total de Produtos em promoção</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($products->where('promotion', 1)->get()) }}
            </div>
        </div>
        <div class="card flex flex-col justify-between">
            <div>
                <h3>Total de produtos sem promoção</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($products->where('promotion', 2)->get()) }}
            </div>
        </div>
    </div>

    <div class="m-10 p-10 grid space-x-8 space-y-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="card ml-8 mt-8 mb-0 mr-0 flex flex-col justify-between">
            <div>
                <h3>Total de Usuários</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($users->all()) }}
            </div>

        </div>
        <div class="card flex flex-col justify-between">
            <div>
                <h3>Total de usuários comuns</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($users->where('admin', 0)->get()) }}
            </div>
        </div>
        <div class="card flex flex-col justify-between">
            <div>
                <h3>Total de Usuários Admins</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($users->where('admin', 1)->get()) }}
            </div>
        </div>
    </div>

    <div class="m-10 p-10 grid space-x-8 space-y-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="card ml-8 mt-8 mb-0 mr-0 flex flex-col justify-between bg-warning-bg">
            <div>
                <h3>Total reembolsos pendentes</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($requests->where('status', 2)->get()) }}
            </div>
        </div>
        <div class="card flex flex-col justify-between bg-info-bg">
            <div>
                <h3>Total de Reembolsos Aprovados</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($requests->where('status', 4)->get()) }}
            </div>
        </div>
        <div class="card flex flex-col justify-between bg-danger-bg">
            <div>
                <h3>Total de Reembolsos Negados</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                {{ count($requests->where('status', 3)->get()) }}
            </div>
        </div>
    </div>

    <div class="m-10 p-10 grid space-x-8 space-y-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="card ml-8 mt-8 mb-0 mr-0 flex flex-col justify-between">
            <div>
                <h3>Valor total em produtos</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                @php
                    $prices = [];

                    foreach($products->select('price')->get() as $key => $value){
                        array_push($prices, $value->price);
                    }

                    echo "R$ ".number_format(array_sum($prices), 2, ',', '.');
                @endphp
            </div>
        </div>
        <div class="card flex flex-col justify-between">
            <div>
                <h3>Valor total em Reembolsos Aprovados</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                @php
                    $prices_acepts = [];

                    foreach($requests->select('price')->where('status', 4)->get() as $key => $value){
                        array_push($prices_acepts, $value->price);
                    }

                    echo "R$ ".number_format(array_sum($prices_acepts), 2, ',', '.');
                @endphp
            </div>
        </div>
        <div class="card flex flex-col justify-between">
            <div>
                <h3>Valor total em Reembolsos Negados</h3>
                <hr>
            </div>
            <div class="text-center text-4xl p-4 mt-10">
                @php
                    $prices_deny = [];

                    foreach($requests->select('price')->where('status', 3)->get() as $key => $value){
                        array_push($prices_deny, $value->price);
                    }

                    echo "R$ ".number_format(array_sum($prices_deny), 2, ',', '.');
                @endphp
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
