<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
define('PAGE_ACCUEIL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
//include($phpbb_root_path . 'alt_functions.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');

// $userProfilAlt = alt_profil_get();


// Assign index specific vars
$template->assign_vars(array(
	'S_LOGIN_ACTION'			=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login'),
	'U_SEND_PASSWORD'           => ($config['email_enable']) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=sendpassword') : '',
	'S_INDEX'					=> true,
	'U_ANNONCES'				=> append_sid("{$phpbb_root_path}annonces.$phpEx", ''),
	'ALT_SCRIPT_PAGE'			=> '<script src="assets/javascript/alt_index.js"></script>',
	'DESCRIPTION_PAGE'			=> 'Spécialiste de l\'alternance | + de 5000 postes à pourvoir | Mon-Alternance.fr Offres d\'emploi en alternance. Trouve ton contrat de professionnalisation, contrat d\'apprentissage, stage en entreprise partout en France. '
	)
);

// $page_title = ($config['board_index_text'] !== '') ? $config['board_index_text'] : $user->lang['INDEX'];
$page_title = 'Mon alternance';

/**
* You can use this event to modify the page title and load data for the index
*
* @event core.index_modify_page_title
* @var	string	page_title		Title of the index page
* @since 3.1.0-a1
*/
//$vars = array('page_title');
//extract($phpbb_dispatcher->trigger_event('core.index_modify_page_title', compact($vars)));

// Output page
page_header($page_title, false);


///
// Régions
/// 
/*
$sqlRegions = 'SELECT code, nom FROM alt_region ';
$result = $db->sql_query($sqlRegions);

while ($row = $db->sql_fetchrow($result)) {
 
    if ($row['code'] === $region) {
        $selected = 'SELECTED';
    } else {
        $selected = '';
    }
 
    $template->assign_block_vars('regions', array(
        'CODE' => $row['code'],
        'NOM' => $row['nom'],
        'SELECTED' => $selected
    ));
}
*/

///
// Villes disponibles
/// 
// $sqlVillesDisponibles = 'SELECT ville_nom, ville_nom_reel, ville_code_postal, ville_code_commune FROM alt_villes_france ORDER BY ville_nom';
// $result = $db->sql_query($sqlVillesDisponibles);

// while ($row = $db->sql_fetchrow($result)) {
 
 
//     $template->assign_block_vars('villesDisponibles', array(
// 		'VILLE_NOM' => $row['ville_nom'],
// 		'VILLE_LABEL' => ucfirst(strtolower($row['ville_nom']))  . ' ('. substr($row['ville_code_postal'],0,5) .')',
// 		'VILLE_CODE_POSTAL' => $row['ville_code_postal']
       
//     ));
// }


// Selection du template en fonction :
// - non connecté
// - candidat
// - recruteur
// - admin

$templatePage = 'index_site.html';


/*
$action = request_var('action', '', true);

if ($user->data['is_registered']) {
	
	//
	// Les actions
	//

	$message = '';
	$messageErreur = '';

	if ($action === 'profilSauvegarder') {
		
		alt_profil_sauvegarder();
		
		$template->assign_vars(array(
			'MONPROFIL_MESSAGE' => $message,
			'MONPROFIL_MESSAGE_ERREUR' => $messageErreur
		));
	} else if ($action === 'compteSauvegarder') {
		
		alt_compte_sauvegarder();
		
		$template->assign_vars(array(
			'MONCOMPTE_MESSAGE' => $message
		));
    } else if ($action === 'compteSupprimer') {
		
		alt_compte_desactiver();
		
		$template->assign_vars(array(
			'MONCOMPTE_MESSAGE' => $message
		));
	}


	//
	// Profil Get
	//
	$altProfil = alt_profil_get();

	
}
*/
$template->set_filenames(array(
	'body' => $templatePage)
);

page_footer();
