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
                <ul class="float-right">
                    <li class="space-x-4">
                        <a href="{{ route('login') }}">
                            @if(auth()->user()->admin == 1)
                                Admin
                            @else
                                Área do cliente
                            @endif
                        </a>
                    </li>
                </ul>
            @endauth
        </nav>
    </header>

    {{--  Feedback da pagina  --}}

    <main>
        @component('components.messages')

        @endcomponent
        @component('components.messages')

        @endcomponent
        @yield('content')
    </main>

    <footer>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @yield('scripts')

        <div class="footer">
            © InnovareTI Soluções Inovadoras. Todos os direitos reservados. 2015-2022
        </div>
    </footer>
</body>
@endsection
