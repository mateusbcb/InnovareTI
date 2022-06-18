@extends('layouts.index')

@section('title', 'Área do Cliente')

@section('content')

    <div class="text-center my-10">
        <h1>Meus Pedidos</h1>
    </div>

    <div class="grid grid-cols-5">

        <div class="card">
            @component('components.user-menu')

            @endcomponent
        </div>

        <div class="card col-span-4">
            <table class="table mx-auto my-5">
                <thead>
                    <tr>
                        <th>SKU</th>
                        <th>Nome do Pedido</th>
                        <th>Data da Compra</th>
                        <th>Preço</th>
                        <th>Status</th>
                        <th>Ultima atualização</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $key => $request)
                        <tr class="striped">
                            <td>{{ $request->product->sku }}</td>
                            <td>{{ $request->product->name }}</td>
                            <td>{{ date('d-m-Y h:i:s', strtotime($request->created_at)) }}</td>
                            <td>R$ {{ number_format($request->price, 2, ',', '.') }}</td>
                            <td>
                                @switch($request->status)
                                    @case(1)
                                        <span class="badge badge-success">
                                            Entregue
                                        </span>
                                        @break
                                    @case(2)
                                        <span class="badge badge-warning">
                                            Em Análise
                                        </span>
                                        @break
                                    @case(3)
                                        <span class="badge badge-danger">
                                            Recusado
                                        </span>
                                        @break
                                    @case(4)
                                        <span class="badge badge-info">
                                            Aceito
                                        </span>
                                        @break
                                @endswitch
                            </td>
                            <td>{{ date('d-m-Y h:i:s', strtotime($request->updated_at)) }}</td>
                            <td>
                                <div class="flex justify-start">
                                    <a href="#" class="btn text-blue-600" title="Informações">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="py-4 text-right">
                            <a href="{{ route('user.refund_request') }}" class="btn btn-primary">
                                Pedir Reembolso
                            </a>
                        </td>
                        @if($requests->hasPages())
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
                                                @if($requests->onFirstPage())
                                                    <a href="" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-200 hover:bg-gray-50 hover:cursor-default">
                                                        <span class="sr-only">Previous</span>
                                                        <!-- Heroicon name: solid/chevron-left -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                @else
                                                    <a href="{{ $requests->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                        <span class="sr-only">Previous</span>
                                                        <!-- Heroicon name: solid/chevron-left -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                @endif
                                                @for($i = 0; $i < $requests->lastPage(); $i++)
                                                    @if ($requests->currentPage() === $i+1)
                                                        <a href="{{ $requests->url($i+1) }}" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $i+1 }} </a>
                                                    @else
                                                        <a href="{{ $requests->url($i+1) }}" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $i+1 }} </a>
                                                    @endif
                                                @endfor
                                                <!-- Button Next -->
                                                @if($requests->onLastPage())

                                                    <a href="" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-200 hover:bg-gray-50 hover:cursor-default">
                                                        <span class="sr-only">Next</span>
                                                        <!-- Heroicon name: solid/chevron-right -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                @else

                                                    <a href="{{ $requests->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
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
                        @endif
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>

@endsection
