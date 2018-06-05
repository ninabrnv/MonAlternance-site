<?php

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
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

$userProfilAlt = alt_profil_get();
if ($userProfilAlt['is_admin'] !== 'true') {
    echo "non autorisé";
    die;
}


$page_title = "Administration - Entreprises";


$action = request_var('action', '', true);
$filtrePrenom = request_var('filtrePrenom', '', true);
$filtreNom = request_var('filtreNom', '', true);
$filtreEmail = request_var('filtreEmail', '', true);
$filtreTel = request_var('filtreTel', '', true);
$filtreVille = request_var('filtreVille', '', true);
$filtreCP = request_var('filtreCP', '', true);
$filtreRegion = request_var('filtreRegion', '', true);
$filtreDomaineActivite = request_var('filtreDomaineActivite', '', true);
$filtreEntreprise = request_var('filtreEntreprise', '', true);
$filtreSiret = request_var('filtreSiret', '', true);


// Output page
page_header($page_title, true);


// selection des comptes entreprises
$sql = 'SELECT * FROM alt_profil
 WHERE 1 '
 . ' AND type_compte = "entreprise"' 
 . ' AND is_admin = "false"';


 if ($filtrePrenom != '')
    $sql .= ' AND societe_ident_prenom LIKE "'.$filtrePrenom.'%"';
 
if ($filtreNom != '')
    $sql .= ' AND 	societe_ident_nom LIKE "'.$filtreNom.'%"';

    if ($filtreEmail != '')
    $sql .= ' AND email LIKE "'.$filtreEmail.'%"';

    if ($filtreTel != '')
    $sql .= ' AND societe_tel LIKE "'.$filtreTel.'%"';

    if ($filtreVille != '')
    $sql .= ' AND ville LIKE "'.$filtreVille.'%"';

    if ($filtreRegion != '')
    $sql .= ' AND societe_region LIKE "'.$filtreRegion.'%"';

    if ($filtreDomaineActivite != '')
    $sql .= ' AND domaine_principal LIKE "'.$filtreDomaineActivite.'%"';
    
    if ($filtreCP != '')
    $sql .= ' AND societe_adresse_cp LIKE "'.$filtreCP.'%"';

    if ($filtreEntreprise != '')
    $sql .= ' AND societe_nom LIKE "%'.$filtreEntreprise.'%"';

    if ($filtreSiret != '')
    $sql .= ' AND societe_siret LIKE "'.$filtreSiret.'%"';


 $sql .= ' ORDER BY id DESC'
;
$result = $db->sql_query($sql);


while ($row = $db->sql_fetchrow($result)) {

    if ($row['user_id'] != 57) {

        $template->assign_block_vars('entreprises', array(
            'id'    => $row['id'],
            'societe_nom' => $row['societe_nom'],
            'domaine_principal' => $row['domaine_principal'],
            'email' => $row['email'],
            'societe_tel' => $row['societe_tel'],
            'societe_ident_prenom' => $row['societe_ident_prenom'],
            'societe_ident_nom' => $row['societe_ident_nom'],
            'societe_adresse' => $row['societe_adresse'],
            'societe_adresse_cp' => $row['societe_adresse_cp'],
            'societe_adresse_ville' => $row['societe_adresse_ville'],
            'societe_region' => $row['societe_region'],
            'societe_adresse_pays' => $row['societe_adresse_pays'],
            'societe_siret' => $row['societe_siret'],
            'societe_effectif' => $row['societe_effectif'],
            'date_creation' =>  date("d/m/Y", strtotime($row['date_creation'])),
            'lien_compte_entreprise' => append_sid($phpbb_root_path . "compte.$phpEx?supervisionCompteId=".$row['user_id'])
        
        ));
    }

}



$template->assign_vars(array(
    'filtrePrenom' => $filtrePrenom,
    'filtreNom' => $filtreNom, 
    'filtreEmail' => $filtreEmail,
    'filtreTel' => $filtreTel,
    'filtreVille' => $filtreVille, 
    'filtreRegion' => $filtreRegion, 
    'filtreDomaineActivite' => $filtreDomaineActivite,
    'filtreEntreprise' => $filtreEntreprise,
    'filtreCP' => $filtreCP, 
    'filtreSiret' => $filtreSiret
));




$template->set_filenames(array(
    'body' => 'alt_admin_entreprises.html')
);

page_footer();
 