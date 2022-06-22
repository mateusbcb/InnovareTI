@extends('layouts.index')

@section('title', 'Área do Cliente')

@section('content')

    <div class="text-center my-10">
        <h1>Dashboard</h1>
    </div>

    <div class="grid grid-cols-4">

        <div class="card">
            @component('components.user-menu')

            @endcomponent
        </div>


        <div class="card col-span-3">
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
                        <h3>Seus Pedidos</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        {{ count($requests->where('user_id', auth()->user()->id)->get()) }}
                    </div>
                </div>
                <div class="card flex flex-col justify-between">
                    <div>
                        <h3>Pedidos Entregues</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        {{ count( $requests->where('user_id', auth()->user()->id)->where('status', 1)->get() ) }}
                    </div>
                </div>
                <div class="card flex flex-col justify-between">
                    <div>
                        <h3>Reembolsos Aceitos</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        {{ count( $requests->where('user_id', auth()->user()->id)->where('status', 4)->get() ) }}
                    </div>
                </div>
                <div class="card flex flex-col justify-between">
                    <div>
                        <h3>Reembolsos em Análise</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        {{ count( $requests->where('user_id', auth()->user()->id)->where('status', 2)->get() ) }}
                    </div>
                </div>
                <div class="card flex flex-col justify-between">
                    <div>
                        <h3>Reembolsos Recusados</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        {{ count( $requests->where('user_id', auth()->user()->id)->where('status', 3)->get() ) }}
                    </div>
                </div>
                <div class="card flex flex-col justify-between">
                    <div>
                        <h3>Valor total de seus pedidos</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        @php
                            $prices = [];

                            foreach($requests->select('price')->where('user_id', auth()->user()->id)->where('status', 1)->get() as $key => $value){
                                array_push($prices, $value->price);
                            }

                            echo "R$ ".number_format(array_sum($prices), 2, ',', '.');
                        @endphp
                    </div>
                </div>
                <div class="card flex flex-col justify-between">
                    <div>
                        <h3>Valor total de Reembolsos Aceitos</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        @php
                            $prices = [];

                            foreach($requests->select('price')->where('user_id', auth()->user()->id)->where('status', 4)->get() as $key => $value){
                                array_push($prices, $value->price);
                            }

                            echo "R$ ".number_format(array_sum($prices), 2, ',', '.');
                        @endphp
                    </div>
                </div>
                <div class="card flex flex-col justify-between">
                    <div>
                        <h3>Valor total de Reembolsos Recusados</h3>
                        <hr>
                    </div>
                    <div class="text-center text-4xl p-4 mt-10">
                        @php
                            $prices = [];

                            foreach($requests->select('price')->where('user_id', auth()->user()->id)->where('status', 3)->get() as $key => $value){
                                array_push($prices, $value->price);
                            }

                            echo "R$ ".number_format(array_sum($prices), 2, ',', '.');
                        @endphp
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection
