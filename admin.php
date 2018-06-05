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


$page_title = "Administration";

// Output page
page_header($page_title, true);


//stats
$sql = 'SELECT count(*) as nb_inscription_candidats FROM alt_profil
 WHERE 1 '
    . ' AND YEAR(date_creation) = YEAR(NOW()) '
    . ' AND MONTH(date_creation) = MONTH(NOW()) '
    . ' AND type_compte = "candidat"'
;
$resultStatsCandidats = $db->sql_query($sql);

$rowCandidats = $db->sql_fetchrow($resultStatsCandidats);


$sql = 'SELECT count(*) as nb_inscription_entreprises FROM alt_profil
 WHERE 1 '
    . ' AND YEAR(date_creation) = YEAR(NOW()) '
    . ' AND MONTH(date_creation) = MONTH(NOW()) '
    . ' AND type_compte = "entreprise"'
;
$resultStatsEntreprises = $db->sql_query($sql);

$rowEntreprises = $db->sql_fetchrow($resultStatsEntreprises);



$template->assign_vars(array(
    'nb_inscription_candidats'	=> intval($rowCandidats['nb_inscription_candidats']),
    'nb_inscription_entreprises'	=> intval($rowEntreprises['nb_inscription_entreprises']),
	
	)
);


$template->set_filenames(array(
    'body' => 'alt_admin.html')
);

page_footer();
 