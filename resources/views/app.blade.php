<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Application')</title>

        
    </head>
    <div class="navbar" align="center">
      <a href="/">Accueil</a>
      <a href="gestion">Gestion</a>
      <a href="attributions">Attributions</a>
    <div>

    <body class="antialiased">

   @yield('content')
            
    </body>
</html>