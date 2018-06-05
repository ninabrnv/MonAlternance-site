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
    echo "non authorisé";
    die;
}




$page_title = "Administration - Admins";

// Output page
page_header($page_title, true);


// selection des comptes entreprises
$sql = 'SELECT * FROM alt_profil
 WHERE 1 '
 . ' AND 	is_admin = "true"' 
 . ' ORDER BY id DESC'
;
$result = $db->sql_query($sql);


while ($row = $db->sql_fetchrow($result)) {

    if ($row['user_id'] != 57) {

        $template->assign_block_vars('admins', array(
            'id'    => $row['id'],
            'prenom' => $row['prenom'],
            'nom' => $row['nom'],
            'email' => $row['email'],
            'tel_mobile' => $row['tel_mobile'],
            'cv_href' => ($row['cv_fichier'] != '') ? './cv/'.$row['cv_fichier'] : '#',
            'cv_nom' => ($row['cv_fichier'] != '') ? 'CV' : '',
            'date_creation' =>  date("d/m/Y", strtotime($row['date_creation']))
        
        ));
    }
}


// $template->assign_vars(array(
   
// ));



$template->set_filenames(array(
    'body' => 'alt_admin_admins.html')
);

page_footer();
 