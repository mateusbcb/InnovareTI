@extends('layouts.admin')

@section('title', 'Produtos')

@section('content')

    <div class="text-center">
        <h1>Admin - Produtos</h1>
    </div>

    <div class="mx-40 my-20">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SKU</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Promoção</th>
                    <th>data Criação</th>
                    <th>data Atualização</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $key => $product)
                    <tr class="striped">
                        <th>{{ $product->id }}</th>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->name }}</td>
                        <td>R$ {{ $product->price }}</td>
                        <td>
                            @if ($product->promotion === 1)
                                <span class="badge badge-success">
                                    Sim
                                </span>
                            @else
                                <span>Não</span>
                            @endif
                        </td>
                        <td>{{ date('d-m-Y', strtotime( $product->created_at )) }}</td>
                        <td>{{ date('d-m-Y', strtotime( $product->updated_at )) }}</td>
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
            @if($products->hasPages())
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
                                            @if($products->onFirstPage())
                                                <a href="" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-200 hover:bg-gray-50 hover:cursor-default">
                                                    <span class="sr-only">Previous</span>
                                                    <!-- Heroicon name: solid/chevron-left -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            @else
                                                <a href="{{ $products->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                    <span class="sr-only">Previous</span>
                                                    <!-- Heroicon name: solid/chevron-left -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            @endif
                                            @for($i = 0; $i < $products->lastPage(); $i++)
                                                @if ($products->currentPage() === $i+1)
                                                    <a href="{{ $products->url($i+1) }}" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $i+1 }} </a>
                                                @else
                                                    <a href="{{ $products->url($i+1) }}" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> {{ $i+1 }} </a>
                                                @endif
                                            @endfor
                                            <!-- Button Next -->
                                            @if($products->onLastPage())

                                                <a href="" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-200 hover:bg-gray-50 hover:cursor-default">
                                                    <span class="sr-only">Next</span>
                                                    <!-- Heroicon name: solid/chevron-right -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            @else

                                                <a href="{{ $products->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
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
