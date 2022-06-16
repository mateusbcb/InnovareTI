@extends('layouts.index')

@section('title', 'Produtos')

@section('content')
    <div class="text-center my-28">
        <h1 class="my-5">Produtos</h1>
    </div>

    <div class="grid grid-cols-4">
        @foreach($products as $key => $product)

            <div class="card flex flex-col justify-between bg-gray-50">
                <h2>{{ $product->name }}</h2>

                <div>
                    @foreach ((array)json_decode($product->images) as $item)
                        @php
                            if ( strpos($item, 'svg') ) {
                                echo $item;
                            }else {
                                echo "<img src='".$item."' alt='".$product->name."'>";
                            }
                        @endphp
                    @endforeach

                    <p class="text-2xl">
                        R$ {{ $product->price }}
                    </p>
                </div>

                <div>
                    <button class="btn-primary">
                        Comprar
                    </button>
                </div>
            </div>
        @endforeach

    </div>

@endsection
