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

if (!$user->data['is_registered']) {
	// si pas connecté
    redirect(append_sid($phpbb_root_path . "ucp.$phpEx?mode=login"));
    die();
}


//echo "<br><br><br><br><br>action : ". $action;
$template_nom = 'alt_cvtheque_offres.html';


// echo "<br><br><br><br><br><br><br><br>description : ".$annonce->description;


// Assign index specific vars
$template->assign_vars(array(

    'ACTION_FORM_CV_OFFRES' => append_sid($phpbb_root_path ."credit.$phpEx", '')


));


$page_title = "Sélectionnez le type d'annonce que vous souhaitez";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => $template_nom)
);

page_footer();
