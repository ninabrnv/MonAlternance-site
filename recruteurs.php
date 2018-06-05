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
$user->setup();

$userProfilAlt = alt_profil_get();

if ($user->data['is_registered']) {
    redirect(append_sid("{$phpbb_root_path}index.$phpEx", ''));
	return;
}




// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid($phpbb_root_path ."annonces.$phpEx", ''),
    'DESCRIPTION_PAGE'			=> 'Offres d’emploi en alternance. Contrats d’apprentissage, de professionnalisation et de stage. Mon-alternance permet de diffuser rapidement votre offre.'
));




$page_title = "Recruteurs";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_recruteurs.html')
);

page_footer();
