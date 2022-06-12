<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inovare - @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body id="user">
    <header>
        <nav class="menu">
            <img src="{{ asset('img/logo-dark.png') }}" alt="">
            
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

            @auth
                <ul class="float-right">
                    <li class="space-x-4">
                        <a href="{{ route('login') }}">Area do cliente</a>
                    </li>
                </ul>
            @endauth

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
</html>