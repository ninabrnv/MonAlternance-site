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

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();


$action = request_var('action', '', true);
$annonce_id = intval(request_var('annonce_id', '', true));

if ($annonce_id === 0) {
    die('Erreur : Annonce non déterminée');
}

$annonce = new annonce();
$annonce->get($annonce_id);

if (intval($annonce->id) === 0) {
    die('Erreur : Annonce non trouvée');
}

//echo "<br><br><br><br><br>action : ". $action;
$template_nom = 'alt_paiement.html';

if ($action === 'paiementAnnonce') {

    if (!$user->data['is_registered']) {
        die('Erreur : Vous devez être connecté pour payer une annonce');
    }

    $userProfilAlt = alt_profil_get();

    $montant = 0;

    if ($annonce->contrat_type === 'Stage') {
        $montant = 60;
    } else if (($annonce->contrat_type === 'Contrat d\'apprentissage') 
            || ($annonce->contrat_type === 'Contrat de professionnalisation')) {
        $montant = 96;
    } else {
        $montant = 0;
    }

    /*
    $codePaiement = $annonce->paiement($user->data['user_id'], $montant);

    if ($codePaiement === 'PAIEMENT_OK') {
        $template_nom = 'alt_paiement_ok.html';
    } else if ($codePaiement === 'PAIEMENT_SOLDE_NEGATIF') {
        $template_nom = 'alt_paiement_erreur.html';
    } else {
        $template_nom = 'alt_paiement_erreur.html';
    }

    redirect(append_sid($phpbb_root_path . "compte.$phpEx"));
    */
} 


// echo "<br><br><br><br><br><br><br><br>description : ".$annonce->description;


// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid("{$phpbb_root_path}annonces.$phpEx", ''),
    'user_id' => $user->data['user_id'],
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
    'annonce_date_de_debut' => $annonce->date_de_debut.' '.$annonce->debut_mois.' '.$annonce->debut_annee,
    'annonce_duree' => ($annonce->duree_nombre != 0) ?  $annonce->duree_nombre.' '.$annonce->duree_type : $annonce->duree,

    'ACTION_FORM_MODIFIER_ANNONCE' => append_sid("{$phpbb_root_path}annonce.$phpEx", ''),
    'ACTION_FORM_VALIDER_ANNONCE' => ($annonce->paye === true) ? append_sid("{$phpbb_root_path}compte.$phpEx", '') :  append_sid("{$phpbb_root_path}credit.$phpEx", ''),

    'CREATION_ANNONCE' => ($annonce->paye === true) ? false : true


));





$page_title = "Paiement d'une annonce";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => $template_nom)
);

page_footer();
