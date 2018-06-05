<?php


die('désactivé');


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

$page_title = "Ajouter candidat";

$userProfilAlt = alt_profil_get();


// Output page
page_header($page_title, true);

$annonceId = intval(request_var('annonceId', '', true));
$action = request_var('action', '', true);
$prenom = request_var('prenom', '', true);
$nom = request_var('nom', '', true);
$objet = request_var('objet', '', true);
$email = request_var('email', '', true);
$contenu = request_var('contenu', '', true);
$tel_mobile = request_var('tel_mobile', '', true);
$ville = request_var('ville', '', true);
$region = request_var('region', '', true);
$type_compte = 'candidat';
$date_naissance = request_var('date_naissance', '', true);
$domaine_principal = request_var('domaine_principal', '', true);
$domaine_artisanat = request_var('domaine_artisanat', '', true);
$niveau_etude = request_var('niveau_etude', '', true);
$derniere_ecole = request_var('derniere_ecole', '', true);

if (($action == 'ajouterCandidat') && ($annonceId != 0)) {


    $sql = 'INSERT INTO alt_profil (	

        email,
        nom,
        prenom,
        type_compte,
        date_creation,
        ville,
        region,
        date_naissance,
        domaine_principal,
        domaine_artisanat,
        niveau_etude,
        derniere_ecole,
        tel_mobile
        )
        
        VALUES (
            "'.$email.'","'.$nom.'","'.$prenom.'","'.$type_compte.'",NOW(),"'.$ville.'"
            ,"'.$region.'"
            ,"'.$date_naissance.'"
            ,"'.$domaine_principal.'"
            ,"'.$domaine_artisanat.'"
            ,"'.$niveau_etude.'"
            ,"'.$derniere_ecole.'"
            ,"'.$tel_mobile.'"

        )
         ';

    //die ('SQL : '. $sql);

    $db->sql_query($sql);

    $sql = "INSERT INTO `a_users` (`user_id`, `user_type`, `group_id`, `user_permissions`
    , `user_perm_from`, `user_ip`, `user_regdate`
    , `username`, `username_clean`, `user_password`
    , `user_passchg`, `user_email`, `user_email_hash`
    , `user_birthday`, `user_lastvisit`, `user_lastmark`
    , `user_lastpost_time`, `user_lastpage`, `user_last_confirm_key`
    , `user_last_search`, `user_warnings`, `user_last_warning`
    , `user_login_attempts`, `user_inactive_reason`, `user_inactive_time`, `user_posts`
    , `user_lang`, `user_timezone`, `user_dateformat`, `user_style`, `user_rank`, `user_colour`
    , `user_new_privmsg`, `user_unread_privmsg`, `user_last_privmsg`, `user_message_rules`
    , `user_full_folder`, `user_emailtime`, `user_topic_show_days`, `user_topic_sortby_type`
    , `user_topic_sortby_dir`, `user_post_show_days`, `user_post_sortby_type`, `user_post_sortby_dir`
    , `user_notify`, `user_notify_pm`, `user_notify_type`, `user_allow_pm`, `user_allow_viewonline`
    , `user_allow_viewemail`, `user_allow_massemail`, `user_options`, `user_avatar`, `user_avatar_type`
    , `user_avatar_width`, `user_avatar_height`, `user_sig`, `user_sig_bbcode_uid`, `user_sig_bbcode_bitfield`
    , `user_jabber`, `user_actkey`, `user_newpasswd`, `user_form_salt`, `user_new`, `user_reminded`
    , `user_reminded_time`) VALUES (NULL, '0', '3', '', '0', '', '0', '', '', '', '0', '', '0', '', '0', '0', '0'
    , '', '', '0', '0', '0', '0', '0', '0', '0', '', '', 'd M Y H:i', '0', '0', '', '0', '0', '0'
    , '0', '-3', '0', '0', 't', 'd', '0', 't', 'a', '0', '1', '0', '1', '1', '1', '1', '230271', ''
    , '', '0', '0', '', '', '', '', '', '', '', '1', '0', '0')";
    $db->sql_query($sql);
    $fakeUserId = $db->sql_nextid();  


    $sql = 'INSERT INTO alt_annonce_candidat (annonce_id, user_id) VALUES ('.$annonceId.', '.$fakeUserId.')';
    $db->sql_query($sql);

    redirect(append_sid($phpbb_root_path . "compte.$phpEx?" ));
         

}





// Assign index specific vars
$template->assign_vars(array(
    'U_ANNONCES' => append_sid("{$phpbb_root_path}annonces.$phpEx", ''),
    'annonceId' => $annonceId
    
));


$template->set_filenames(array(
    'body' => 'alt_ajouter_candidat.html'
));

page_footer();
