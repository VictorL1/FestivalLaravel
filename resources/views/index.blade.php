

@section('title', 'Acceuil - '.env('APP_NAME'))
@extends('app')
@section('content')

 
      <h3 align='center'>Bienvenue sur l'application d'hébergement</h3>
      <p align='center' class='intro'>
      <img src="/images/sports.png" height="300" width="300" alt="Sports" align='center'/><br>
        La Maison des Ligues organise un festival de sports nature en septembre, le festival Sp'Or.<br>
        Sur cette application, vous avez accès à :
        <li align='center' class='intro' > <a href='gestion'> Gestion des établissements </a> </li>

        <li align='center' class='intro'><a href='attributions'> Attributions des chambres </a> </li>
      </p>
@endsection
