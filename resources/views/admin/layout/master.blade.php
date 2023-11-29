<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Panel de administracion</title>
        <meta name="description"
            content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" content="palabras clave, separadas, por comas">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Panel de administracion" />
        <meta property="og:description"
            content="descripción de la web, se recomienda 90 caracteres" />
        <meta property="og:image"
            content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvw0X4yJapeK0gpLZnfxP0fBEcrbb4Qe0otYQXk0fnOA&s" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
            rel="stylesheet">
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        @include('admin.layout.partials.header')
        
        <main>
            @yield('content')
        </main>
    </body>
</html>