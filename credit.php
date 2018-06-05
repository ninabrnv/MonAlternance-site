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


$userProfilAlt = alt_profil_get();

// $user->get_profile_fields( $user->data['user_id'] );

//$user->data['is_registered']
if ($user->data['is_registered']) {

    $action = request_var('action', '', true);
    $annonce_id = intval(request_var('annonce_id', '', true));
   
    

    if ($action === 'crediterCompte') {


        // Récupération du montant que l'on veut créditer au compte
        $montant = intval(request_var('montant', '', true));
        $objet = 'credit';

        if ($montant < 0) {
            $montant = 100;
        }

        if ($montant > 1000) {
            $montant = 1000;
        }


    } else if ($action === 'payerAnnonce') {

        $annonce = new annonce();
        $annonce->get($annonce_id);

        if (intval($annonce->id) === 0) {
            die('Erreur : Annonce non trouvée');
        }

        $montant = 0;
        $objet = 'annonce';

        if ($annonce->contrat_type === 'Stage') {
            $montant = 60;
        } else if (($annonce->contrat_type === 'Contrat d\'apprentissage') 
                || ($annonce->contrat_type === 'Contrat de professionnalisation')) {
            $montant = 96;
        } else {
            $montant = 96;
        }

        $template->assign_vars(array(
         'CREATION_ANNONCE' => true
        ));

    } else if ($action === 'cvthequeAdhesion') {

        $duree = request_var('duree', '', true);
        $objet = 'cvtheque';
        $annonce_id = 0;

        $montant = 0;

        if ($duree === '15jours') {
            $montant = 240;
        } else if ($duree === '1mois') {
            $montant = 456;
        } else if ($duree === '3mois') {
            $montant = 1080;
        } else {
            $montant = 1080;
        }

        $template->assign_vars(array(
         'CREATION_ANNONCE' => true
        ));
    

    } else {
        die('Erreur ! Action inconnue.');
    }


    
    
        // echo "<br><br><br><br><br><br><br><br>";
        // print_r($user->data);

        // Créatoin d'un transaction
        $sqlTransaction = 'INSERT INTO alt_transaction (user_id, email, transaction_date, montant, statut, annonce_id, objet) 
                VALUES ('. $user->data['user_id'] .', "'. $user->data['user_email']  .'" , NOW(), "'.$montant.'", "en attente", '.$annonce_id.', "'.$objet.'")';
        $result = $db->sql_query($sqlTransaction);

        $transactionId = $db->sql_nextid();
        $transactionId = str_pad($transactionId, 6, "0", STR_PAD_LEFT);

        //
        // Initiation des variables du formulaire de paiement
        //

        $certificat = '9042324489379793';  //prod certification : 9042324489379793 // test certificat '2948137617919086';   //certificat de test "mon-alternance.fr" (https://paiement.systempay.fr/vads-merchant)

        $vads_action_mode = 'INTERACTIVE';
        $vads_amount = $montant.'00';
        $vads_capture_delay = '0';
        $vads_ctx_mode = 'PRODUCTION';  // ou TEST
        $vads_currency = '978';
        $vads_page_action = 'PAYMENT';
        $vads_payment_config = 'SINGLE';
        $vads_return_mode = 'POST';
        $vads_site_id = '72312361';
        $vads_trans_date = date("YmdHis"); 
        $vads_trans_id = $transactionId;    //239848
        $vads_url_return = append_sid(generate_board_url() . "/credit_retour_banque.php", '');
        $vads_version = 'V2';
        $vads_theme_config = 'SUCCESS_FOOTER_MSG_RETURN=Retourner à votre espace personnel;CANCEL_FOOTER_MSG_RETURN=Annuler et retourner à votre espace personnel';


        /*
        vads_action_mode + vads_amount + vads_capture_delay + vads_ctx_mode 
        + vads_currency + vads_page_action + vads_payment_config 
        + vads_return_mode + vads_site_id + vads_trans_date + vads_trans_id 
        + vads_url_return + vads_version + certificate

        INTERACTIVE+5000+0+TEST+978+PAYMENT+SINGLE+GET+72312361+20180129222636+000017
        +http://mon-alternance.fr/credit.php?action=retourBanque&sid=810449ca4ed75eef048c3ce68cab03ad
        +V2+29XXXXXXXXXXXX86        */
        $params = array(
            'vads_action_mode' => $vads_action_mode,
            'vads_amount' => $vads_amount,
            'vads_capture_delay' => $vads_capture_delay,
            'vads_ctx_mode' => $vads_ctx_mode,
            'vads_currency' => $vads_currency,
            'vads_page_action' => $vads_page_action,
            'vads_payment_config' => $vads_payment_config,
            'vads_return_mode' => $vads_return_mode,
            'vads_site_id' => $vads_site_id,
            'vads_trans_date' => $vads_trans_date,
            'vads_trans_id' => $vads_trans_id,
            'vads_url_return' => $vads_url_return,
            'vads_version' => $vads_version,
            'vads_theme_config' => $vads_theme_config,
            'montant' => $montant
        );

        // Détermination de la signature
        $signature = getSignature($params, $certificat);



        $template->assign_vars(array(
            'vads_url_return' => $vads_url_return,
            'user_id' => $user->data['user_id'],
            'vads_action_mode' => $vads_action_mode,
            'vads_amount' => $vads_amount,
            'vads_capture_delay' => $vads_capture_delay,
            'vads_ctx_mode' => $vads_ctx_mode,
            'vads_currency' => $vads_currency,
            'vads_page_action' => $vads_page_action,
            'vads_payment_config' => $vads_payment_config,
            'vads_site_id' => $vads_site_id,
            'vads_trans_date' => $vads_trans_date,
            'vads_trans_id' => $vads_trans_id,
            'vads_version' => $vads_version,
            'vads_return_mode' => $vads_return_mode,
            'vads_theme_config' => $vads_theme_config,
            'signature' => $signature,
            'montant' => $montant,

            'ACTION_FORM_VIREMENT_BANCAIRE' => append_sid($phpbb_root_path ."credit-virement-bancaire.$phpEx", '')
        ));

   



    $page_title = "Créditer mon compte";

    // Output page
    page_header($page_title, true);

    $template->set_filenames(array(
        'body' => 'alt_credit.html')
    );

} else {
    $template->assign_vars(array(

        'MESSAGE_ERREUR' => 'Erreur : vous devez être authentifié pour créditer votre compte'
    ));
}



page_footer();
