<?php

/**
* @ignore
*/


define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'alt_class_annonce.' . $phpEx);
//include($phpbb_root_path . 'alt_functions.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!$user->data['is_registered']) {
	// si pas connecté
    redirect(append_sid($phpbb_root_path . "ucp.$phpEx?mode=login"));
    die();
}


//$userProfilAlt = alt_profil_get();

$action = request_var('action', '', true);

//echo "<br><br><br><br><br>action : ". $action;

$id = intval(request_var('id', '', true));

// Hack pour le compte De
$pourLeCompteDe = intval(request_var('pourLeCompteDe', '', true));

$supervisionCompteId = intval(request_var('supervisionCompteId', '', true));
$strSupervisionCompteId = '';

if ($supervisionCompteId != 0) {
    $strSupervisionCompteId = 'supervisionCompteId='.$supervisionCompteId;

 //   die('Super vision compte !!!');

}


if (($pourLeCompteDe != 0) && $action === '')  {

    $sqlCompte = 'SELECT * FROM alt_profil WHERE id = '. $pourLeCompteDe;
    $resultCompte = $db->sql_query($sqlCompte);


    if ($rowPorfilCompte = $db->sql_fetchrow($resultCompte)) {
        $annonce = new annonce();
        $annonce->societe = $rowPorfilCompte['societe_nom'];
        $annonce->adresse = $rowPorfilCompte['societe_adresse'];
        $annonce->adresse_cp = $rowPorfilCompte['societe_adresse_cp'];
        $annonce->adresse_ville = $rowPorfilCompte['societe_adresse_ville'];
        $annonce->adresse_pays = $rowPorfilCompte['societe_adresse_pays'];
        $annonce->client_contact = $rowPorfilCompte['societe_ident_nom']. ' '.$rowPorfilCompte['societe_ident_prenom'];
        $annonce->proprietaire_user_id = $rowPorfilCompte['user_id'];
        $annonce->update();

        $id = $annonce->id;
    }


}




if ($action === 'sauvegarderAnnonce') {

    $annonce_titre = request_var('annonce_titre', '', true);
    $statut_structure = request_var('annonce_statut_structure', '', true);
    $description = request_var('annonce_description', '', true);
    
    $societe = request_var('annonce_societe_nom', '', true);
    $adresse = request_var('annonce_adresse', '', true);
    $adresse_cp = request_var('annonce_adresse_cp', '', true);
    $adresse_ville = request_var('annonce_adresse_ville', '', true);
    $adresse_pays = request_var('annonce_adresse_pays', '', true);
    $contrat_type = request_var('annonce_contrat_type', '', true);
    $domaine = request_var('annonce_domaine', '', true);
    $domaineArtisanat = request_var('annonce_domaine_artisanat', '', true);
    $duree = request_var('annonce_duree', '', true);
    $duree_nombre = request_var('annonce_duree_nombre', '', true);
    $duree_type = request_var('annonce_duree_type', '');
    $date_de_debut = request_var('annonce_date_de_debut', '', true);
    $debut_mois = request_var('annonce_debut_mois', '', true);
    $debut_annee = request_var('annonce_debut_annee', '', true);


     // echo "<br><br><br><br><br><br><br><br>descridn : ".$description;
     $annonce = new annonce();
     $annonce->get($id);
     $annonce->titre = $annonce_titre;
     $annonce->statut_structure = $statut_structure;
     $annonce->description = $description;
     
     $annonce->societe = $societe;
     $annonce->adresse = $adresse;
     $annonce->adresse_cp = $adresse_cp;
     $annonce->adresse_ville = $adresse_ville;
     $annonce->adresse_pays = $adresse_pays;
     $annonce->contrat_type = $contrat_type;
     $annonce->domaine = $domaine;
     $annonce->domaineArtisanat = $domaineArtisanat;
     $annonce->duree = $duree;
     $annonce->duree_nombre = $duree_nombre;
     $annonce->duree_type = $duree_type;
     $annonce->date_de_debut = $date_de_debut;
     $annonce->debut_mois = $debut_mois;
     $annonce->debut_annee = $debut_annee;
     $annonce->update();


    // Vérification que la ville existe en BDD
    $sqlVerifVille = "SELECT ville_nom, ville_departement FROM alt_villes_france WHERE ville_nom = \"".$adresse_ville."\"";
    $resultVerifVille = $db-> sql_query($sqlVerifVille);

    if ($row = $db->sql_fetchrow($resultVerifVille)) {
         // Ville trouvée
         // Suivant si l'annonce a été payé ou non, on va rediriger vers le paiement
         // cas nouveau : si "$pourLeCompteDe" : alors, on redirige vers admin
       
         $departement = $row['ville_departement'];
         $sqlDepartement = "SELECT region_nom FROM alt_departement WHERE num = \"".$departement."\"";
         $resultDepartement = $db-> sql_query($sqlDepartement);
          
         if ($rowDepartement = $db->sql_fetchrow($resultDepartement)) {
            $annonce->region_nom = $rowDepartement['region_nom'];
            $annonce->update();
         }

    

        if (intval($pourLeCompteDe) != 0) {
            redirect(append_sid($phpbb_root_path . "admin-annonces.$phpEx"));
        } else if ($annonce->paye === true) {
            redirect(append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));
        } else {
            // si pas payé, redirection vers le paiement
            redirect(append_sid($phpbb_root_path . "paiement.$phpEx?&annonce_id=".$annonce->id, ''));
        } 

    } else {
        // ville non trouvée, il faut indiquer comme quoi on doit sélectionné
        $template->assign_vars(array(
            'MESSAGE_ERREUR_VILLE_NON_TROUVEE' => 'La ville saisie n\'a pas été trouvée. Veuillez en sélectionner une dans la liste déroulante'
        ));

    } 

   

       
    

} else if ($action === 'supprimerAnnonce') {

  

    $annonce = new annonce();
    $annonce->get($id);
    $annonce->updateStatut('Supprimée');

    redirect(append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));


} else if ($action === 'activerAnnonce') {
 //echo "<br><br><br><br><br><br><br><br>annonce id : ".$id;
   
    $annonce = new annonce();
    $annonce->get($id);

    //echo "<br>annonce id : " . $annonce->id;
   

    if ($annonce->paye === true) {
      // echo "<br>Annonce payé";
       // $annonce->updateStatut('Active');
       $annonce->publication();
    } else {
      // echo "<br>Annonce NON payé";
    }
   
    redirect(append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));

} else if ($action === 'dupliquerAnnonce') {
    //echo "<br><br><br><br><br><br><br><br>annonce id : ".$id;
      
       $annonce = new annonce();
       $annonce->get($id);
   
       $annonce->id = 0;
       $annonce->date_creation = 0;
       $annonce->paye = false;
       $annonce->date_publication = 0;
       $annonce->date_paiement = 0;

       $annonce->update();
       //echo "<br>annonce id : " . $annonce->id;
      
   
      
       redirect(append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));


} else if ($action === 'adminPayerAnnonce') {

    $annonce = new annonce();
    $annonce->get($id);
    $annonce->publication();
    redirect(append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));
} else if ($action === 'desactiverAnnonce') {



    $annonce = new annonce();
    $annonce->get($id);
    $annonce->updateStatut('Désactivée');

    //die (append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));
    redirect(append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));
} else if ($action === 'publierAnnonce') {


    $annonce = new annonce();
    $annonce->get($id);
    $annonce->publication();

    redirect(append_sid($phpbb_root_path . "compte.$phpEx?" . $strSupervisionCompteId));
} else {

    $annonce = new annonce();
    $annonce->get($id);
}


// echo "<br><br><br><br><br><br><br><br>description : ".$annonce->description;


// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid("{$phpbb_root_path}annonces.$phpEx", ''),
    'ALT_SCRIPT_PAGE'			=> '<script src="assets/javascript/alt_annonce.js"></script>',
    'TITRE_CREATION_MODIFICATION_ANNONCE' => ($id === 0) ? 'Création de votre annonce' : 'Modification de votre annonce',
    'CREATION_ANNONCE' => ($annonce->paye === false) ? true : false,
    'user_id' => $user->data['user_id'],
    'ACTION_FORM_ANNONCE' => append_sid($phpbb_root_path ."annonce.$phpEx", ''),
    'annonce_id' => intval($annonce->id),
    'annonce_titre' => $annonce->titre,
    'annonce_societe_nom' => $annonce->societe,
    'annonce_description' => $annonce->description,
    'annonce_adresse' => $annonce->adresse,
    'annonce_adresse_cp' => $annonce->adresse_cp,
    'annonce_adresse_ville' => $annonce->adresse_ville,
    'annonce_adresse_pays' => $annonce->adresse_pays,
    'annonce_contrat_type' => $annonce->contrat_type,
    'annonce_domaine' => $annonce->domaine,
    'annonce_domaine_artisanat' => $annonce->domaineArtisanat,
    'show_domaine_artisanat' => ($annonce->domaine === 'ARTISANAT') ? 'block' : 'none',
    'annonce_duree' => $annonce->duree,
    'annonce_duree_nombre' => $annonce->duree_nombre,
    'annonce_duree_type' => $annonce->duree_type,
    'annonce_date_de_debut' => $annonce->date_de_debut,
    'annonce_debut_mois' => $annonce->debut_mois,
    'annonce_debut_annee' => $annonce->debut_annee,
    'pourLeCompteDe' => $pourLeCompteDe,

    'display_pourLeCompteDe' => ($pourLeCompteDe != 0) ? true : false,

    'annonce_statut_structure_asso_checked' => ($annonce->statut_structure === 'Association') ? 'selected' : '',
    'annonce_statut_structure_autre_checked' => ($annonce->statut_structure === 'Autre') ? 'selected' : '',
    'annonce_statut_structure_ecole_checked' => ($annonce->statut_structure === 'Ecole') ? 'selected' : '',
    'annonce_statut_structure_entreprise_checked' => ($annonce->statut_structure === 'Entreprise') ? 'selected' : '',
    'annonce_statut_structure_publique_checked' => ($annonce->statut_structure === 'Structure publique') ? 'selected' : '',

    'annonce_contrat_type_pro_checked' => ($annonce->contrat_type === 'Contrat de professionnalisation') ? 'selected' : '',
    'annonce_contrat_type_apr_checked' => ($annonce->contrat_type === 'Contrat d\'apprentissage') ? 'selected' : '',
    'annonce_contrat_type_stage_checked' => ($annonce->contrat_type === 'Stage') ? 'selected' : ''

));


/*
///
// Villes disponibles
/// 
$sqlVillesDisponibles = 'SELECT ville_nom, ville_nom_reel, ville_code_postal, ville_code_commune FROM alt_villes_france ORDER BY ville_nom';
$result = $db->sql_query($sqlVillesDisponibles);

while ($row = $db->sql_fetchrow($result)) {
 
 
    $template->assign_block_vars('villesDisponibles', array(
		'VILLE_NOM' => $row['ville_nom'],
		'VILLE_LABEL' => $row['ville_nom'] . ' ('. substr($row['ville_code_postal'],0,5) .')',
		'VILLE_CODE_POSTAL' => $row['ville_code_postal']
        
    ));
}
*/



$page_title = "Annonce";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_annonce.html')
);

page_footer();
