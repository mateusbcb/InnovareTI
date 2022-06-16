<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inovare - @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- jquery ui css -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <!-- tw-elements CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

    @yield('container')

    <footer>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- jquery 3.6.0 js -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <!-- jquery ui js -->
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

        <script>
            $( function() {
                $( document ).tooltip();
            } );
        </script>

        <script>
            $( function() {
              $( "#darkMode" ).on( "click", function() {
                $( "html" ).toggleClass( "dark", 1000 );
              });
            } );
        </script>

        @yield('scripts')

        <div class="footer">
            © InnovareTI Soluções Inovadoras. Todos os direitos reservados. 2015-2022
        </div>
    </footer>
</body>
</html>
