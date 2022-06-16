@extends('layouts.global')

@section('container')
<body id="user">
    <header>
        <nav class="menu">
            <img src="{{ asset('img/logo-dark.png') }}" alt="" class="dark:invert">

            <ul class="float-left flex space-x-4">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('products') }}">Produtos</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">Sobre</a>
                </li>
                <li>
                    <a href="{{ route('contacts') }}">Contatos</a>
                </li>
            </ul>

            @guest
                <ul class="float-right flex space-x-4">
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            @endguest

            @auth
                <ul id="subMenu" class=" w-48">
                    <li>
                        <div>
                            <a href="{{ route('user.profile') }}">
                                {{ auth()->user()->name }}
                            </a>
                        </div>
                        <ul class="w-48">
                            <li>
                                <div>
                                    @if(auth()->user()->admin == 1)
                                        <a href="{{ route('dashboard') }}">
                                            Admin
                                        </a>
                                    @else
                                        <a href="{{ route('user.dashboard') }}">
                                            Área do cliente
                                        </a>
                                    @endif
                                </div>
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
                    </li>

                </ul>
            @endauth
        </nav>
    </header>

    {{--  Feedback da pagina  --}}

    <main>
        @component('components.messages')

        @endcomponent

        @yield('content')
    </main>

    @section('scripts')
    <script>
        $( function() {
          $( "#subMenu" ).menu({
            position: { my: "bottom", at: "top" },
            icons: { submenu: "ui-icon-caret-1-s" }
          });
        });
    </script>
    @endsection
@endsection
