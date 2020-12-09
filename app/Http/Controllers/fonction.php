<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fonction extends Controller
{
    public function etablissement() {
    	$etablissement = DB::select('SELECT idEtab, nomEtab,nombreChambresOffertes FROM etablissement ORDER BY idEtab');
    	return view('gestion', compact('etablissement'));
    }

    public function modifetablissement() {
    	$modifetablissement = DB::select('SELECT * FROM etablissement where idEtab = "'.$_GET["id"].'"');
    	return view('modificationEtablissement', compact('modifetablissement'));
    }

    public function updateetablissement() {

    $id = $_POST["id"];
	$nom = $_POST["nom"];
	$adresseRue = $_POST["adresseRue"];
	$codePostal = $_POST["codePostal"];
	$ville = $_POST["ville"];
	$tel = $_POST["tel"];
	$adresseElectronique = $_POST["adresseElectronique"];
	$type = $_POST["type"];
	$civiliteResponsable = $_POST["civiliteResponsable"];
	$Nomres = $_POST["Nomres"];
	$Prenomres = $_POST["Prenomres"];
	$nombreChambresOffertes = $_POST["nombreChambresOffertes"];

    	$updateetablissement = DB::select('UPDATE etablissement SET nomEtab = "'.$nom.'", adresseRue = "'.$adresseRue.'", codePostal = "'.$codePostal.'", ville = "'.$ville.'", tel = "'.$tel.'", adresseElectronique = "'.$adresseElectronique.'", type ='.$type.', civiliteResponsable = "'.$civiliteResponsable.'", nomResponsable = "'.$Nomres.'", prenomResponsable = "'.$Prenomres.'", nombreChambresOffertes = '.$nombreChambresOffertes.' WHERE idEtab = "'.$id.'"');
    	$etablissement = DB::select('SELECT idEtab, nomEtab,nombreChambresOffertes FROM etablissement ORDER BY idEtab');
    	return view('gestion', compact('etablissement'));
    }
    

    public function obtenirDetailEtablissement() {
    	$detail = DB::select('SELECT * from etablissement where idEtab = "'.$_GET["id"].'"');
    	return view('detailEtablissement', compact('detail'));
    }


public function creationexec() {

	$id = $_POST["id"];
	$nom = $_POST["nom"];
	$adresseRue = $_POST["adresseRue"];
	$codePostal = $_POST["codePostal"];
	$ville = $_POST["ville"];
	$tel = $_POST["tel"];
	$adresseElectronique = $_POST["adresseElectronique"];
	$type = $_POST["type"];
	$civiliteResponsable = $_POST["civiliteResponsable"];
	$Nomres = $_POST["Nomres"];
	$Prenomres = $_POST["Prenomres"];
	$nombreChambresOffertes = $_POST["nombreChambresOffertes"];

    	DB::insert('INSERT INTO etablissement VALUES ("'.$id.'", "'.$nom.'", "'.$adresseRue.'", "'.$codePostal.'", "'.$ville.'", "'.$tel.'", "'.$adresseElectronique.'", '.$type.', "'.$civiliteResponsable.'", "'.$Nomres.'", "'.$Prenomres.'", '.$nombreChambresOffertes.') ');
    	return back();
    }


}
