<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Laravel @yield('TituloPag')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html{
                background-color: lightskyblue;
                color: #636b6f;
                font-family: 'Consolas';
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            h1, h2 {
                text-align: center;
                color: green;
            }

            h3 {
                text-align: center;
                color: red;
            }

            p{
                color: black;
                text-align: center;
            }

            header{
                width: auto;
                height: 15%;
                border: 3px solid red;
            }

            div.cuerpo {
                width: auto;
                height: 75%;
                border: 3px solid white;
            }

            footer{
                width: auto;
                height: 10%;
                border: 3px solid green;
            }
            aside{
                width: 10%;
                height: 10%;
                float: left;
                border: 2px solid blue;
            }

        </style>
    </head>
    <body>
        <header>
            <h1> Header Here! </p>
        </header>
        <div class="cuerpo">
        <aside> <h5> Publicidad here! </h5></aside>
        <h1> Prueba de una plantilla de vistas en LARAVEL! </h1>
        <?php 
            echo "<h3>Hoy es ". date('l jS \of F Y h:i A') . "</h3>" ;
        ?>
        
        </div>
        <footer>
             @yield('Footer')
        </footer>
    </body>
</html>