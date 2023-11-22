<html>
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
        <link rel="stylesheet" href="/style/app.css">
        <!-- <script type="module" src="js/app.js"></script> -->
    </head>
    <body>
        <header class="header">
            <div class="header-principal">
                <div class="header-name">
                    <h1>Detectib</h1>
                </div>
                <div class="header-title">
                    <h1>Clientes</h1>
                </div>
                <div class="menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>menu</title><path
                            d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>