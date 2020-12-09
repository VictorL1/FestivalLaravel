@section('title', 'Acceuil - '.env('APP_NAME'))
@extends('app')
@section('content')

 
      <h3 align='center'>Bienvenue sur l'application d'hébergement</h3>
      <p align='center' class='intro'>
      <img src="/images/batiment.png" height="300" width="300" alt="Sports" align='center'/><br>
        

      </p>
      
         
        

         @foreach ($detail as $detaildata)
         <table align="center">
         <tr align="center">
            <th width='40%' > {{ $detaildata -> nomEtab }} </th>
         </tr>
            <tr align="center">
               <td>
                  Id : {{ $detaildata -> idEtab }}
               </td>
            </tr>
            <tr align="center">
               <td>
                  Adresse : {{ $detaildata -> adresseRue }}
               </td>
               </tr>
            <tr align="center">
               <td>
                  Code-Postal : {{ $detaildata -> codePostal }}
               </td>
               </tr>
            <tr align="center">
               <td>
                  Ville : {{ $detaildata -> ville }}
               </td>
               </tr>
            <tr align="center">
               <td>
                  Téléphone : {{ $detaildata -> tel }}
               </td>
               </tr>
            <tr align="center">
               <td>
                  E-mail : {{ $detaildata -> adresseElectronique }}
               </td>
               </tr>
            <tr align="center">
               <td>
                  Type : {{ $detaildata -> type }}
               </td>
               </tr>
            <tr align="center">
               <td>
                  Nom du Responsable : {{ $detaildata -> nomResponsable }}
               </td>
               </tr>
            <tr align="center">
               <td>
                  Chambres Offertes : {{ $detaildata -> nombreChambresOffertes }}
               </td>
               
            </tr>
         @endforeach
      </table>

@endsection





