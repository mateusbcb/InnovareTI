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
            <div class="grid grid-cols-2">

                <div class="card">
                    <h4>Total de Produtos</h4>
                    <div class="absolute bg-slate-800 bg-opacity-20 text-white mx-auto  p-28 z-50">
                        {{ count($products->all()) }}
                    </div>
                    <div class="border-2 w-60 h-64 bg-gray-700" ></div>
                </div>

                <div class="card">
                    <h4>Seus Pedidos</h4>
                    <div class="absolute bg-slate-800 bg-opacity-20 text-white mx-auto  p-28 z-50">
                        {{ count($requests->where('user_id', auth()->user()->id)->get()) }}
                    </div>
                    <div class="border-2 w-60 h-64 bg-gray-700" ></div>
                </div>

                <div class="card">
                    <h4>Pedidos aguardando reembolso</h4>
                    <div class="absolute bg-slate-800 bg-opacity-20 text-white mx-auto  p-28 z-50">
                        {{ count( $requests->where('user_id', auth()->user()->id)->where('status', 2)->get() ) }}
                    </div>
                    <div class="border-2 w-60 h-64 bg-gray-700" ></div>
                </div>

                <div class="card">
                    <h4>Pedidos recebidos</h4>
                    <div class="absolute bg-slate-800 bg-opacity-20 text-white mx-auto  p-28 z-50">
                        {{ count( $requests->where('user_id', auth()->user()->id)->where('status', 1)->get() ) }}
                    </div>
                    <div class="border-2 w-60 h-64 bg-gray-700" ></div>
                </div>

            </div>
        </div>


    </div>

@endsection
