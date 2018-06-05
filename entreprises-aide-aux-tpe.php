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

//$userProfilAlt = alt_profil_get();

// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid($phpbb_root_path ."annonces.$phpEx", ''),
    'prenom' => $user->profile_fields['pf_alt_prenom'],
    'user_id' => $user->data['user_id'],
    'DESCRIPTION_PAGE' => 'Plateforme de l’alternance. Découvrez comment bénéficier des aides pour l’embauche des alternants. Contrats de professionnalisation et d’apprentissage.'
   
));




$page_title = "Aide aux TPE";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_entreprises_aide_aux_tpe.html')
);

page_footer();
