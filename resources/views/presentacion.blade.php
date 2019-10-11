<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Presentacion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: lightskyblue;
                color: #636b6f;
                font-family: 'Consolas', sans-serif;
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
        </style>
    </head>
    <body>
        <h1> Prueba de una plantilla de vistas en LARAVEL! </h1>
        <h2> Hecho por Jorge Ortega Nieto </h2>
        <?php 
            echo "<h3>Hoy es ". date('l jS \of F Y h:i A') . "</h3>" ;

        ?>
    </body>
</html>