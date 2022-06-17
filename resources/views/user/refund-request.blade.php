@extends('layouts.index')

@section('title', 'Área do Cliente')

@section('content')

    <div class="text-center my-10">
        <h1>Solicitação de Reembolso</h1>
    </div>

    <div class="grid grid-cols-5">

        <div class="card">
            @component('components.user-menu')

            @endcomponent
        </div>

        <div class="card col-span-4">
            <form action="{{ route('user.send_refund_request') }}" method="post">
                @csrf

                <div class="card">
                    <div class="grid grid-cols-2 w-1/2 mx-auto space-y-2">
                        <label for="name">
                            Nome
                        </label>
                        <input type="text" name="name" id="name" placeholder="Nome" value="{{ auth()->user()->name }}" readonly>

                        <label for="address">
                            Endereço
                        </label>
                        <input type="text" name="addres" id="address" placeholder="Endereço"
                            value="@php foreach (json_decode(auth()->user()->address) as $endereco) { echo $endereco->Logradouro . ', ' . $endereco->Numero .' '. $endereco->Bairo .' '.$endereco->Estado;} @endphp" readonly>

                        <label for="phone">
                            Telefone
                        </label>
                        <input type="tel" name="phone" id="phone" placeholder="Telefone" value="{{ auth()->user()->phone }}" readonly>
                    </div>
                </div>

                <div class="card">
                    <div id="allProducts">

                        <div class="grid grid-cols-2 w-1/2 mx-auto space-y-2" id="product">
                            <label for="products">
                                Produtos
                            </label>
                            <select name="products[]" id="products" class="" onchange="updatePrice(this)">
                                <option value="--">Selecione o Produto</option>
                                @foreach($requests as $key => $request)
                                    <option value="{{ $request->product->id }}" id="{{ $request->id }}">{{ $request->product->name }}</option>
                                @endforeach
                            </select>

                            <label for="price">
                                Valor
                            </label>
                            <input type="text" name="prices[]" id="price" placeholder="Preço" value="0.00" readonly>

                            <label for="invoice">
                                Nota Fiscal
                            </label>
                            <input type="image" name="invoices[]" id="invoice">
                        </div>

                    </div>
                    <button class="btn btn-primary" onclick="addLine()">
                        Adicionar Produto
                    </button>
                </div>

                <div class="card">
                    <div class="grid grid-cols-2 w-1/2 mx-auto space-y-2">
                        <label for="comments">
                            Observações
                        </label>
                        <textarea name="comments" id="comments">

                        </textarea>

                        <label for="photo">
                            Foto do Produto (se necessário para análise)
                        </label>
                        <input type="image" name="photo" id="photo">
                    </div>
                </div>

                <div class="card">
                    <div class="grid grid-cols-2 w-1/2 mx-auto space-x-4">
                        <button type="submit" class="btn btn-success">
                            Enviar
                        </button>

                        <a href="{{ route('user.requests') }}" class="btn btn-secondary">
                            Cancelar
                        </a>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        var j = 0; // variável que será necessária para inserir ID´s dinâmicos

        function updatePrice(event)
        {
            // pega o proximo irmão do evento selecionado
            var next = event.nextElementSibling;

            // pega o irmão do proximo evento depois de selecionar (pois o primeiro irmão é o label)
            var price_id = next.nextElementSibling.id;

            // utiliza o balde para pegar o Json dos requests (recebido via php)
            var products = @json($requests);

            // verifica se o value do evento não é '--'
            if (event.value != '--') {
                // pega o 'price' do json
                var product_price = products[event.options.selectedIndex-1].price;
                // pega o elemento pelo id dinâmico
                document.getElementById(price_id).value = product_price;

            }else {
                document.getElementById(price_id).value = '0.00';
            }

        }

        function addLine(){

            event.preventDefault();
            // incrementa o valor de 'j' para criar os ID´s dinâmicos
            j++;

            var select = document.getElementById('product'); // seleciona a div product para clonar
            var clone = select.cloneNode(true); // clona toda a div e seus filhos
            var newId = "product_" + j; // altera a id da div de forma que não repita

            clone.setAttribute("id", newId); // seta o novo ID
            // altera os demais ID´s para que não se repitão
            clone.getElementsByTagName('select')[0].id = "products_" + j;
            clone.getElementsByTagName("input")[0].id = "price_" + j;
            clone.getElementsByTagName('input')[1].id = "invoice_" + j;

            // pega o elemento que envolve a dive product e insere o novo objeto clonado, com as novas ID´s
            document.getElementById("allProducts").appendChild(clone);
        }

    </script>

@endsection
