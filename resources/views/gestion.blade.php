@section('title', 'Acceuil - '.env('APP_NAME'))
@extends('app')
@section('content')

 
      <h3 align='center'>Bienvenue sur l'application d'hébergement</h3>
      <p align='center' class='intro'>
      <img src="/images/batiment.png" height="300" width="300" alt="Sports" align='center'/><br>
        

      </p>
      <table>
         <tr>
            <th width='40%' align="left">Etablissements : </th>
            <th width='15%'> </th>
            <th width='15%'> </th>
            <th width='30%'>Chambres libres : </th>
         </tr>
         
        

         @foreach ($etablissement as $etablissementdata)
            <tr width='16%' align='left'>
               
            
               <td>
                  {{ $etablissementdata -> nomEtab }}
               </td>
               <td>
                  <a href="detailEtablissement?id={{$etablissementdata -> idEtab}}"> Voir Details </a>
               </td>
               <td>
                  <a href="modificationEtablissement?id={{$etablissementdata -> idEtab}}"> Modifier </a>
               </td>
               <td align="center">
                  {{ $etablissementdata -> nombreChambresOffertes }}
               </td>
               
            </tr>
         @endforeach
      </table>
</br></br></br></br></br></br></br></br>
 <a href="creationEtablissement"> Création d'un établissement </a>
@endsection