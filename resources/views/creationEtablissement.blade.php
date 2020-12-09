@section('title', 'Acceuil - '.env('APP_NAME'))
@extends('app')
@section('content')

 
      <h3 align='center'>Bienvenue sur l'application d'hébergement</h3>
      <p align='center' class='intro'>
      <img src="/images/batiment.png" height="300" width="300" alt="Sports" align='center'/><br>
        

      </p>


   
<form method="post" action="creationexec">
   @csrf
   <table width='85%' align='center' cellspacing='0' cellpadding='0' class='styled-table'>
      <thead>
         <tr>
            <td colspan='3'><strong>Nouvel établissement</strong></td>
         </tr>
      </thead>
      <tbody>
      <tr>
         <td> Id: </td>
         <td><input type='text'  name='id' size ='10' maxlength='8'></td>
      </tr>
      <tr>
         <td> Nom: </td>
         <td><input type="text"  name="nom" size="50" maxlength="45"></td>
      </tr>
      <tr>
         <td> Adresse: </td>
         <td><input type="text" name="adresseRue" size="50" maxlength="45"></td>
      </tr>
      <tr>
         <td> Code postal: </td>
         <td><input type="text" name="codePostal" size="4" maxlength="5"></td>
      </tr>
      <tr>
         <td> Ville: </td>
         <td><input type="text" name="ville" size="40" maxlength="35"></td>
      </tr>
      <tr>
         <td> Téléphone: </td>
         <td><input type="text" name="tel" size ="20" maxlength="10"></td>
      </tr>
      <tr>
         <td> E-mail: </td>
         <td><input type="text" name="adresseElectronique" size ="75" maxlength="70"></td>
      </tr>
      <tr>
         <td> Type: </td>
         <td>
               <input type="radio" name='type' value="0" checked>Etablissement Scolaire</radio>
               <input type="radio" name='type' value="1">Autre</radio>
         </td>
      </tr>
      <tr>
         <td colspan='2' ><strong>Responsable:</strong></td>
      </tr>
      <tr>
         <td> Civilité: </td>
         <td>
            <select class="form-control" name='civiliteResponsable'>
               <option>M.</option>
               <option>Mlle</option>
               <option>Mme</option>
            </select>
                        
         Nom : <input type="text" name="Nomres">
         Prenom : <input type="text" name="Prenomres"></td>
      </tr>
      <tr>
         <td> Nombre chambres offertes: </td>
         <td><input type="text" name="nombreChambresOffertes" size ="2" maxlength="3"></td>
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

@endsection

