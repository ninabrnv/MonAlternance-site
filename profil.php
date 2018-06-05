<?php

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'alt_functions.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');

$user->get_profile_fields( $user->data['user_id'] );

$userProfilAlt = alt_profil_get();


//id	user_id	email	nom	prenom	type_compte	date_creation	
//ville	date_naissance	domaine_principal	niveau_etude	derniere_ecole
//	tel_mobile	societe_nom	societe_adresse	societe_adresse_suite	societe_adresse_cp
//	societe_adresse_ville	societe_adresse_pays	societe_tel	societe_siret	
//societe_num_tva_intra	societe_num_exo_tva	societe_secteur_activite	societe_effectif



$sqlProfil = 'SELECT id,	user_id,	email,	nom,	prenom,	type_compte,	date_creation,	
 ville,	date_naissance,	domaine_principal,	niveau_etude,	derniere_ecole,
	tel_mobile,	societe_nom,	societe_adresse,	societe_adresse_suite,	societe_adresse_cp,
	societe_adresse_ville,	societe_adresse_pays,	societe_tel	societe_siret	,
societe_num_tva_intra,	societe_num_exo_tva,	societe_secteur_activite,	societe_effectif,
argent 
FROM alt_profil
WHERE user_id = ' . intval($user->data['user_id'])
;

$result = $db->sql_query($sqlProfil);

if ($rowProfil = $db->sql_fetchrow($result)) {

    $template->assign_vars(array(
        'EMAIL' => $rowProfil['email'],
        'NOM' => $rowProfil['nom'],
        'PRENOM' => $rowProfil['prenom'],
        'TYPE_COMPTE' => $rowProfil['type_compte'],
        'VILLE' => $rowProfil['ville'],
        'DATE_NAISSANCE' => $rowProfil['date_naissance'],
        'DOMAINE_PRINCIPAL' => $rowProfil['domaine_principal'],
        'NIVEAU_ETUDE' => $rowProfil['niveau_etude'],
        'DERNIERE_ECOLE' => $rowProfil['derniere_ecole'],
        'TEL_MOBILE' => $rowProfil['tel_mobile'],
        'SOCIETE_NOM' => $rowProfil['societe_nom'],
        'ARGENT' => $rowProfil['argent'] . ' €',
        'FORM_CREDIT_ACTION' => append_sid("{$phpbb_root_path}credit.$phpEx", ''),
        'display_candidat' => (($rowProfil['type_compte'] === 'candidat') || ($rowProfil['type_compte'] === '')) ? 'show' : 'hidden'

    ));

} else {
    // insert par défaut
    $sqlProfil = 'INSERT INTO alt_profil (date_creation, user_id, email) values (
        NOW()
        , '.intval($user->data['user_id']). '
        , "'.$db->sql_escape($user->data['user_email']).'"
        
        )';
    $db->sql_query($sqlProfil);
}

$template->assign_vars(array(
    'USER_ID' => intval($user->data['user_id']),
    'U_ANNONCES' => append_sid("{$phpbb_root_path}annonces.$phpEx", '')

   
));




$page_title = "Annonces";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_profil.html')
);

page_footer();
