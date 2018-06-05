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

$montant = request_var('montant', '', true);

// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid($phpbb_root_path ."annonces.$phpEx", ''),
    'montant' => $montant
));


$page_title = "Virement bancaire";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_credit_virement_bancaire.html')
);

page_footer();
