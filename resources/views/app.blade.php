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
        <script src="js/all.js"></script>
        <script src="js/maps.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap" async defer></script>
    </body>
</html>
