<?php

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');




$page_title = "Contctez-nous";

// Output page
page_header($page_title, true);

$action = request_var('action', '');
$prenom = request_var('prenom', '');
$nom = request_var('nom', '');
$objet = request_var('objet', '');
$email = request_var('email', '');
$contenu = request_var('contenu', '');
$tel = request_var('tel', '');
$ville = request_var('ville', '');
$type_compte = request_var('type_compte', '');


$messageMail = '';

// echo "<br><br><br><br><br><br><br><br> contenu : " .$contenu;

$config['email_enable'] = true;

if ($action === 'sendmail') {

    include_once($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);

    $messenger = new messenger(NOTIFY_EMAIL, false);
    //$messenger->template('alt_contact');
    $messenger->template('alt_contact');
    $messenger->to('frederic.vincent.pro@gmail.com');
    $messenger->to('fred13vince@gmail.com');
    $messenger->anti_abuse_headers($config, $user);
   
   $messenger->assign_vars(array(
        'prenom'    => htmlspecialchars_decode($prenom),
        'nom'    => htmlspecialchars_decode($nom),
        'email'    => htmlspecialchars_decode($email),
        'objet'    => htmlspecialchars_decode($objet),
        'contenu'    => htmlspecialchars_decode($contenu),
        'tel'    => htmlspecialchars_decode($tel),
        'ville'    => htmlspecialchars_decode($ville),
        'date' => date("d/m/Y", strtotime("now")),
        'type_compte' => htmlspecialchars_decode($type_compte)
    ));


    if ($messenger->send()) {
        $messageMail = 'Message envoyé !';
    } else {
        $messageMail = 'Error : Message NON envoyé...';
    }

    
}

// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid("{$phpbb_root_path}annonces.$phpEx", ''),
    'prenom' => $user->profile_fields['pf_alt_prenom'],
    'user_id' => $user->data['user_id'],
    'FORM_CONTACT' => append_sid("{$phpbb_root_path}contact.$phpEx", ''),
    'messageMail' => $messageMail,
    'email_enable' => $config['email_enable'] === true ? 'email activé' : 'email non activé'
));


$template->set_filenames(array(
	'body' => 'alt_contact.html')
);

page_footer();