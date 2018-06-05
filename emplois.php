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

$user->get_profile_fields( $user->data['user_id'] );

$userProfilAlt = alt_profil_get();


// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid($phpbb_root_path ."annonces.$phpEx", ''),
    'prenom' => $user->profile_fields['pf_alt_prenom'],
    'user_id' => $user->data['user_id'],
    'DESCRIPTION_PAGE' => 'Les offres d\'emploi en alternance',
    'U_ALT_OFFRES_ALTERNANCE_GRENOBLE' => append_sid($phpbb_root_path ."offres-alternance-grenoble.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_AIX' => append_sid($phpbb_root_path ."offres-alternance-aix-en-provence.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_ANGERS' => append_sid($phpbb_root_path ."offres-alternance-angers.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_RENNES' => append_sid($phpbb_root_path ."offres-alternance-rennes.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_BORDEAUX' => append_sid($phpbb_root_path ."offres-alternance-bordeaux.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_CLERMONT' => append_sid($phpbb_root_path ."offres-alternance-clermont-ferrant.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_GRENOBLE' => append_sid($phpbb_root_path ."offres-alternance-grenoble.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_LILLE' => append_sid($phpbb_root_path ."offres-alternance-lille.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_MARSEILLE' => append_sid($phpbb_root_path ."offres-alternance-marseille.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_MONTPELLIER' => append_sid($phpbb_root_path ."offres-alternance-montpellier.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_NANTES' => append_sid($phpbb_root_path ."offres-alternance-nantes.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_NICE' => append_sid($phpbb_root_path ."offres-alternance-nice.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_PARIS' => append_sid($phpbb_root_path ."offres-alternance-paris.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_POITIERS' => append_sid($phpbb_root_path ."offres-alternance-poitiers.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_STRASBOURG' => append_sid($phpbb_root_path ."offres-alternance-strasbourg.$phpEx", ''),
    'U_ALT_OFFRES_ALTERNANCE_TOULOUSE' => append_sid($phpbb_root_path ."offres-alternance-toulouse.$phpEx", '')
));


$page_title = "Offres d'emploi en alternance";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_emplois.html')
);

page_footer();
