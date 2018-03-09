<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.metas')
        @include('partials.styles')
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>
        <section>
            @yield('content')
        </section>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
