@extends('layouts.global')

@section('container')
    <body id="admin">
        <header>
            <nav class="menu border-r-4 border-gray-800">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo-dark.png') }}" alt="" class="invert w-full pr-10 pl-2">
                </a>

                <ul class="mt-5 ml-3">
                    <li class="space-y-4">
                        <a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.products') }}">Produtos</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.refunds') }}">Reembolsos</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users') }}">Usuários</a>
                    </li>
                </ul>
                @guest

                    <ul class="absolute bottom-2 flex justify-between w-2/12 px-5">
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                @endguest

                @auth
                    <ul class="absolute bottom-2 flex justify-between w-2/12 px-5">
                        <li>
                            <a href="{{ route('login') }}" class="flex items-center">
                                {{--  <img src="https://doodleipsum.com/700x933/avatar-3?i=2109956eaa8fe527c053de5986983687" class="rounded-full w-7 h-7 mr-3" />  --}}
                                <img src="https://i.pravatar.cc/150?img=".{{ auth()->user()->id }}."" class="rounded-full w-7 h-7 mr-3" />
                                <span class="text-sm">
                                    {{ auth()->user()->name }}
                                </span>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <button type="submit">
                                    Sair
                                </button>
                            </form>
                        </li>

                    </ul>
                @endauth
            </nav>
        </header>

        <div class="float-left w-10/12 bg-white">

            <div class="flex justify-center items-center shadow-lg p-2">

                <div class="bg-gray-100 border-r-2 border-gray-200 rounded-l-md p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="bg-gray-100 rounded-r-md w-11/12">
                    <input type="search" class="w-full shadow-inner">
                </div>

                {{--  Dark Mode  --}}
                {{--  <div class="flex justify-center">
                    <div class="form-check form-switch">
                        <input class="form-check-input appearance-none w-9 -ml-10 rounded-full float-left h-5 align-top bg-white bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm" type="checkbox" role="switch" id="darkMode">
                        <label class="form-check-label inline-block text-gray-800" for="flexSwitchCheckDefault">Dark Mode</label>
                    </div>
                </div>  --}}
            </div>

        </div>

        <main>
            {{--  Feedback da pagina  --}}
            @component('components.messages')

            @endcomponent

            {{--  conteudo Principal  --}}
            @yield('content')
        </main>

@endsection
