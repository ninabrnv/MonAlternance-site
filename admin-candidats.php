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


$page_title = "Administration - Candidats";



$action = request_var('action', '', true);
$filtrePrenom = request_var('filtrePrenom', '', true);
$filtreNom = request_var('filtreNom', '', true);
$filtreEmail = request_var('filtreEmail', '', true);
$filtreTel = request_var('filtreTel', '', true);
$filtreVille = request_var('filtreVille', '', true);
$filtreVilleProche = request_var('filtreVilleProche', '', true);
$filtreDomaineActivite = request_var('filtreDomaineActivite', '', true);
$filtreDomaineActiviteArtisanat = request_var('filtreDomaineActiviteArtisanat', '', true);
$filtreNiveauEtude = request_var('filtreNiveauEtude', '', true);
$filtreAge = request_var('filtreAge', '', true);
$filtreRegion = request_var('filtreRegion', '', true);

//echo "<br><br><br><br><br><br><br><br> action = ".$action   ;

// Output page
page_header($page_title, true);



// selection des comptes entreprises
$sql = 'SELECT * FROM alt_profil
 WHERE 1 '
 . ' AND type_compte = "candidat"' 
 . ' AND is_admin = "false"';

 if ($filtrePrenom != '')
    $sql .= ' AND prenom LIKE "'.$filtrePrenom.'%"';
 
if ($filtreNom != '')
    $sql .= ' AND nom LIKE "'.$filtreNom.'%"';

    if ($filtreEmail != '')
    $sql .= ' AND email LIKE "'.$filtreEmail.'%"';

    if ($filtreTel != '')
    $sql .= ' AND tel_mobile LIKE "'.$filtreTel.'%"';

    if ($filtreVille != '')
    $sql .= ' AND ville LIKE "'.$filtreVille.'%"';

    if ($filtreVilleProche != '')
    $sql .= ' AND ville_proche LIKE "'.$filtreVilleProche.'%"';

    if ($filtreRegion != '')
    $sql .= ' AND region LIKE "'.$filtreRegion.'%"';


    if ($filtreDomaineActivite != '')
    $sql .= ' AND domaine_principal LIKE "'.$filtreDomaineActivite.'%"';

    
    if ($filtreDomaineActiviteArtisanat != '')
    $sql .= ' AND domaine_artisanat LIKE "'.$filtreDomaineActiviteArtisanat.'%"';

    if ($filtreNiveauEtude != '')
    $sql .= ' AND niveau_etude LIKE "%'.$filtreNiveauEtude.'%"';

    if ($filtreAge != '')
    $sql .= ' AND date_naissance LIKE "'.$filtreAge.'%"';


 $sql .= ' ORDER BY id DESC'
;
$result = $db->sql_query($sql);

//echo "<br><br><br><br><br><br><br> sql = ".$sql;

while ($row = $db->sql_fetchrow($result)) {

    if ($row['user_id'] != 57) {

        $template->assign_block_vars('candidats', array(
            'id'    => $row['id'],
            'prenom' => $row['prenom'],
            'nom' => $row['nom'],
            'email' => $row['email'],
            'tel_mobile' => $row['tel_mobile'],
            'age' => $row['date_naissance'],
            'ville' => $row['ville'],
            'ville_proche' => $row['ville_proche'],
            'region' => $row['region'],
            'domaine_principal' => $row['domaine_principal'],
            'domaine_artisanat' => $row['domaine_artisanat'],
            'niveau_etude' => $row['niveau_etude'],
            'derniere_ecole' => $row['derniere_ecole'],
            'domaine_artisanat' => $row['domaine_artisanat'],
            'domaine_artisanat' => $row['domaine_artisanat'],
            'cv_href' => ($row['cv_fichier'] != '') ? './cv/'.$row['cv_fichier'] : '#',
            'cv_nom' => ($row['cv_fichier'] != '') ? 'CV' : '',
            'date_creation' =>  date("d/m/Y", strtotime($row['date_creation']))
        
        ));
    }
}

$template->assign_vars(array(
    'filtrePrenom' => $filtrePrenom,
    'filtreNom' => $filtreNom, 
    'filtreEmail' => $filtreEmail,
    'filtreTel' => $filtreTel,
    'filtreVille' => $filtreVille, 
    'filtreVilleProche' => $filtreVilleProche,
    'filtreDomaineActivite' => $filtreDomaineActivite,
    'filtreDomaineActiviteArtisanat' => $filtreDomaineActiviteArtisanat,
    'filtreNiveauEtude' => $filtreNiveauEtude, 
    'filtreAge' => $filtreAge,
    'filtreRegion' => $filtreRegion
));



$template->set_filenames(array(
    'body' => 'alt_admin_candidats.html')
);

page_footer();
 