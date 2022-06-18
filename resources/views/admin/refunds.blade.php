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
                    <tr class="striped">
                        <th>{{ $refund->id }}</th>
                        <td>{{ $refund->product->sku }}</td>
                        <td>{{ $refund->product->name }}</td>
                        <td>{{ $refund->user->name }}</td>
                        <td>R$ {{ $refund->product->price }}</td>
                        <td>
                            @switch($refund->status)
                                @case(1)
                                    <span class="badge badge-success">
                                        Entregue
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
                                @case(4)
                                    <span class="badge badge-info">
                                        Aprovado
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
                                    @case(4)
                                        <a href="#" class="btn text-blue-600" title="Informações">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        <a class="btn text-green-500 cursor-not-allowed" title="Entregue">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </a>
                                        <a class="btn text-green-500 cursor-not-allowed" title="Entregue">
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
                                        <a href="{{ route('admin.refund_approve', ['id' => $refund->id]) }}" class="btn text-green-600" title="Aprovar">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.refund_deny', ['id' => $refund->id]) }}" class="btn text-red-600" title="Negar">
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
            @if($refunds->hasPages())
                <tfoot>
                    <tr>
                        <td colspan="9">
                            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                                <div class="flex-1 flex justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
                                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
                                </div>
                                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-end">
                                    <div>
                                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                            <!-- Button Previous -->
                                            @if($refunds->onFirstPage())
                                                <a href="" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-200 hover:bg-gray-50 hover:cursor-default">
                                                    <span class="sr-only">Previous</span>
                                                    <!-- Heroicon name: solid/chevron-left -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            @else
                                                <a href="{{ $refunds->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                    <span class="sr-only">Previous</span>
                                                    <!-- Heroicon name: solid/chevron-left -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            @endif
                                            @for($i = 0; $i < $refunds->lastPage(); $i++)
                                                @if ($refunds->currentPage() === $i+1)
                                                    <a href="{{ $refunds->url($i+1) }}" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $i+1 }} </a>
                                                @else
                                                    <a href="{{ $refunds->url($i+1) }}" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $i+1 }} </a>
                                                @endif
                                            @endfor
                                            <!-- Button Next -->
                                            @if($refunds->onLastPage())

                                                <a href="" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-200 hover:bg-gray-50 hover:cursor-default">
                                                    <span class="sr-only">Next</span>
                                                    <!-- Heroicon name: solid/chevron-right -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            @else

                                                <a href="{{ $refunds->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                    <span class="sr-only">Next</span>
                                                    <!-- Heroicon name: solid/chevron-right -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            @endif
                                        </nav>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                </tfoot>
            @endif
        </table>
    </div>

@endsection

@section('scripts')
    <script>

    </script>
@endsection
