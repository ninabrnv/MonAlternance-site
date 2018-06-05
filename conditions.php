<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
require($phpbb_root_path . 'includes/functions_module.' . $phpEx);
//include($phpbb_root_path . 'alt_functions.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('ucp');

$userProfilAlt = alt_profil_get();


$page_title = "Conditions d'utilisation";


page_header($page_title, true);

$template->assign_vars(array(
    'CONDITIONS'	=> sprintf($user->lang['CONDITIONS'], $config['sitename'], generate_board_url()),
));


$template->set_filenames(array(
    'body' => 'alt_conditions.html')
);

page_footer();
        

?>