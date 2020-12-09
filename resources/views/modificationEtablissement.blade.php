@section('title', 'Acceuil - '.env('APP_NAME'))
@extends('app')
@section('content')

 
      <h3 align='center'>Bienvenue sur l'application d'hébergement</h3>
      <p align='center' class='intro'>
      <img src="/images/batiment.png" height="300" width="300" alt="Sports" align='center'/><br>
        

      </p>


   
<form method="post" action="updateetablissement">
   @csrf
   @foreach ($modifetablissement as $modifetablissementdata)
   <table width='85%' align='center' cellspacing='0' cellpadding='0' class='styled-table'>
      <thead>
         <tr>
            <td colspan='3'><strong>Nouvel établissement</strong></td>
         </tr>
      </thead>
      <tbody>
         <input type="hidden"  name="id" size="50" maxlength="45" value="{{$modifetablissementdata -> idEtab}}">
      <tr>
         <td> Nom: </td>
         <td><input type="text"  name="nom" size="50" maxlength="45" value="{{$modifetablissementdata -> nomEtab}}"></td>
      </tr>
      <tr>
         <td> Adresse: </td>
         <td><input type="text" name="adresseRue" size="50" maxlength="45" value="{{$modifetablissementdata -> adresseRue}}"></td>
      </tr>
      <tr>
         <td> Code postal: </td>
         <td><input type="text" name="codePostal" size="4" maxlength="5" value="{{$modifetablissementdata -> codePostal}}"></td>
      </tr>
      <tr>
         <td> Ville: </td>
         <td><input type="text" name="ville" size="40" maxlength="35" value="{{$modifetablissementdata -> ville}}"></td>
      </tr>
      <tr>
         <td> Téléphone: </td>
         <td><input type="text" name="tel" size ="20" maxlength="10" value="{{$modifetablissementdata -> tel}}"></td>
      </tr>
      <tr>
         <td> E-mail: </td>
         <td><input type="text" name="adresseElectronique" size ="75" maxlength="70" value="{{$modifetablissementdata -> adresseElectronique}}"></td>
      </tr>
      <tr>
         <td> Type: </td>
         <td>
            <?php
            $type = $modifetablissementdata ->type;
            if ($type == 0)
            {
               echo"<input type='radio' name='type' value='0' checked>Etablissement Scolaire</radio>";
               echo "<input type='radio' name='type' value='1'>Autre</radio>";
            }
            else if ($type == 1)
            {
               echo"<input type='radio' name='type' value='0'>Etablissement Scolaire</radio>";
               echo "<input type='radio' name='type' value='1' checked>Autre</radio>";  
            }
               
               ?>
         </td>
      </tr>
      <tr>
         <td colspan='2' ><strong>Responsable:</strong></td>
      </tr>
      <tr>
         <td> Civilité: </td>
         <td>
            <select class="form-control" name='civiliteResponsable'>
               <?php
            $civilite = $modifetablissementdata ->civiliteResponsable;
            if ($civilite == "M.")
            {
               echo"<option selected>M.</option>
               <option>Mlle</option>
               <option>Mme</option>";
            }
            else if ($civilite == "Mlle")
            {
               echo"<option>M.</option>
               <option selected>Mlle</option>
               <option>Mme</option>";
            }
            else if ($civilite == "Mme")
            {
               echo"<option>M.</option>
               <option>Mlle</option>
               <option selected>Mme</option>";
            }  
               ?>
               
               
            </select>
                        
         Nom : <input type="text" name="Nomres" value="{{$modifetablissementdata -> nomResponsable}}">
         Prenom : <input type="text" name="Prenomres" value="{{$modifetablissementdata -> prenomResponsable}}"></td>
      </tr>
      <tr>
         <td> Nombre chambres offertes: </td>
         <td><input type="text" name="nombreChambresOffertes" size ="2" maxlength="3" value="{{$modifetablissementdata -> nombreChambresOffertes}}"></td>
      </tr>
      </tbody>
   </table>
   
   <table align='center' cellspacing='15' cellpadding='0'>
      <tr>
         <td align='right'><input type='submit' value='Valider' name='valider'></td>
         <td align='left'><input type='reset' value='Annuler' name='annuler'></td>
      </tr>
      <tr>
         <td colspan='2' align='center'><a href="gestion">Retour</a>
         </td>
      </tr>
   </table>
</form>
@endforeach
@endsection

