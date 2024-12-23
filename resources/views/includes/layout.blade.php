<html>
    <link href = "{{asset('css/layout.css')}}" rel="stylesheet">
    <head>
        @yield('head')
    </head>
    <header>
        @include('includes.header')
    </header>
    <body>
        
        <main>
            @yield('content')
        </main>

        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>

