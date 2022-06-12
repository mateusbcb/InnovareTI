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
<body id="admin">
    <header>
        <nav class="menu border-r-4 border-gray-800">
            <img src="{{ asset('img/logo-dark.png') }}" alt="" class="invert w-full pr-10 pl-2">

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
            @auth
                <ul class="absolute bottom-2 flex justify-between w-2/12 px-5">
                    <li>
                        <a href="{{ route('login') }}" class="flex items-center">
                            <img src="https://i.pravatar.cc/150?img=0" class="rounded-full w-7 h-7 mr-3">
                            <span class="text-sm">
                                {{ "Nome de Usuário" }}
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

        </div>

    </div>

    {{--  Feedback da pagina  --}}

    <main>
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