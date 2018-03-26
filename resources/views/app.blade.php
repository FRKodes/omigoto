<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84802922-13"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-84802922-13');
        </script>
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
