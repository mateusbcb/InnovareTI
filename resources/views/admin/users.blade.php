@extends('layouts.admin')

@section('title', 'Usuários')

@section('content')

    <div class="text-center">
        <h1>Admin - Usuários</h1>
    </div>

    <div class="mx-10 my-20">
        <table class="table small">
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
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>rua 1 n 99, SP - Brasil</td>
                        <td>(99) 99999-9999</td>
                        <td>
                            @if ($user->admin == 0)
                                <span class="badge badge-secondary">
                                    Não
                                </span>
                            @else
                                <span class="badge badge-primary">
                                    Sim
                                </span>
                            @endif
                        </td>
                        <td>{{ date('d-m-Y', strtotime( $user->created_at )) }}</td>
                        <td>{{ date('d-m-Y', strtotime( $user->updated_at )) }}</td>
                        <td>
                            <div>
                                <button class="btn text-blue-600" title="Detalhes">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="btn text-green-600" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="btn text-red-600" title="Excluir">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
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
