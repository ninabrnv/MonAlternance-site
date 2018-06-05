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
$user->setup('viewforum');

if (!$user->data['is_registered']) {
	// si pas connecté
    redirect(append_sid($phpbb_root_path . "ucp.$phpEx?mode=login"));
    die();
}


$annonce_id = intval(request_var('annonce_id', '', true));

if ($annonce_id === 0) {
    echo "<br>Erreur : Annonce non déterminée";
    die;
}

$userProfilAlt = alt_profil_get();

// Selection des informations de la facture (dans la table annonce)
$annonce = new annonce();
$annonce->get($annonce_id);


if (($annonce->id === 0) || ($annonce->paye === false)) {
    echo "<br>Erreur : Facture non trouvée";
    die;
}


$facture_ligne_montant_ht = 0;
$facture_ligne_montant_tva = 0;
$facture_ligne_montnat_ttc = 0;

$facture_total_ht = 0;
$facture_total_tva = 0;
$facture_total_ttc = 0;

// Suivant le type de bien, on détermine le m=montant HT / TVA /TTC
if ($annonce->contrat_type === 'Contrat de professionnalisation') {

    $facture_ligne_montant_ht = 80;
    $facture_ligne_montant_tva = 16;
    $facture_ligne_montnat_ttc = 96;
    
    $facture_total_ht = 80;
    $facture_total_tva = 16;
    $facture_total_ttc = 96;

} else if ($annonce->contrat_type === 'Contrat d\'apprentissage') {

    $facture_ligne_montant_ht = 80;
    $facture_ligne_montant_tva = 16;
    $facture_ligne_montnat_ttc = 96;
    
    $facture_total_ht = 80;
    $facture_total_tva = 16;
    $facture_total_ttc = 96;


} else if ($annonce->contrat_type === 'Stage') {

    $facture_ligne_montant_ht = 50;
    $facture_ligne_montant_tva = 10;
    $facture_ligne_montnat_ttc = 60;
    
    $facture_total_ht = 50;
    $facture_total_tva = 10;
    $facture_total_ttc = 60;


} else {
    echo "<br>Erreur : Type de contrat non déterminé";
    die;
}



// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid($phpbb_root_path ."annonces.$phpEx", ''),
    'prenom' => $user->profile_fields['pf_alt_prenom'],
    'user_id' => $user->data['user_id'],
    'DESCRIPTION_PAGE' => 'Facture',
    'facture_nom' => $annonce->societe,
    'facture_adresse_ligne1' => $annonce->adresse,
    'facture_adresse_ligne2' => '',
    'facture_adresse_cp' => $annonce->adresse_cp,
    'facture_adresse_ville' => $annonce->adresse_ville,
    'facture_date' => date("d/m/Y", strtotime($annonce->date_paiement)),
    'facture_compte' => '',
    'facture_ref' => 'FA2018_'.$annonce->id,
    'facture_ligne_description' => 'Annonce '.$annonce->contrat_type,
    'facture_ligne_quantite' => 1,
    'facture_ligne_montant_ht' => $facture_ligne_montant_ht,
    'facture_ligne_montant_tva' => $facture_ligne_montant_tva,
    'facture_ligne_montnat_ttc' => $facture_ligne_montnat_ttc,
    'facture_total_ht' => $facture_total_ht,
    'facture_total_tva' => $facture_total_tva,
    'facture_total_ttc' => $facture_total_ttc

));




$page_title = "Facture";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_facture.html')
);

page_footer();
