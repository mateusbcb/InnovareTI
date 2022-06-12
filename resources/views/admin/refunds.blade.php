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
                    <th>Preço</th>
                    <th>Pendernte</th>
                    <th>data Compra</th>
                    <th>data Pedido</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>0</th>
                    <td>123</td>
                    <td>Produto 1</td>
                    <td>R$ 98,90</td>
                    <td>Não</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>
                        <div>
                            <button> Detalhes </button>
                            <button> Aprovar </button>
                            <button> Negar </button>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <th>1</th>
                    <td>456</td>
                    <td>Produto 2</td>
                    <td>R$ 59,90</td>
                    <td>Não</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>
                        <div>
                            <button> Detalhes </button>
                            <button> Aprovar </button>
                            <button> Negar </button>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th>2</th>
                    <td>789</td>
                    <td>Produto 3</td>
                    <td>R$ 29,99</td>
                    <td class="text-orange-500">Sim</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>
                        <div>
                            <button> Detalhes </button>
                            <button> Aprovar </button>
                            <button> Negar </button>
                        </div>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
    
@endsection

@section('scripts')
    <script>
        
    </script>
@endsection