@extends('layouts.admin')

@section('title', 'Usuários')

@section('content')

    <div class="text-center">
        <h1>Admin - Usuários</h1>
    </div>

    <div class="mx-40 my-20">
        <table class="table">
            <thead class="secondary">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Admin</th>
                    <th>data Criação</th>
                    <th>data Atualização</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <th>0</th>
                    <td>Usuario 1</td>
                    <td>Usuario_1@host.com</td>
                    <td>rua 1 n 99, SP - Brasil</td>
                    <td>(99) 99999-9999</td>
                    <td>Não</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>
                        <div>
                            <button> Detalhes </button>
                            <button> Editar </button>
                            <button> Excluir </button>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <th>1</th>
                    <td>Usuario 2</td>
                    <td>Usuario_2@host.com</td>
                    <td>rua 2 n 88, SP - Brasil</td>
                    <td>(99) 88888-8888</td>
                    <td>Não</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>
                        <div>
                            <button> Detalhes </button>
                            <button> Editar </button>
                            <button> Excluir </button>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th>2</th>
                    <td>Usuario 3</td>
                    <td>Usuario_3@host.com</td>
                    <td>rua 3 n 77, SP - Brasil</td>
                    <td>(99) 77777-7777</td>
                    <td class="text-red-600">Sim</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>{{ date('d-m-Y', strtotime( now() )) }}</td>
                    <td>
                        <div>
                            <button> Detalhes </button>
                            <button> Editar </button>
                            <button> Excluir </button>
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