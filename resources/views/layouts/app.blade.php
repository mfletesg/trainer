<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>LaraDex - @yield('title')</title> <!-- Mustra contenido de una seccion -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand">LaraDex</a>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
