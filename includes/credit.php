<?php

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'alt_functions.' . $phpEx);
include($phpbb_root_path . 'alt_class_annonce.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// $user->get_profile_fields( $user->data['user_id'] );


if ($user->data['is_registered']) {

    $action = request_var('action', '');
    $annonce_id = intval(request_var('annonce_id', ''));



    if ($action === 'crediterCompte') {


        // Récupération du montant que l'on veut créditer au compte
        $montant = intval(request_var('montant', ''));

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

        if ($annonce->contrat_type === 'Stage') {
            $montant = 50;
        } else if (($annonce->contrat_type === 'Contrat d\'apprentissage') 
                || ($annonce->contrat_type === 'Contrat de professionnalisation')) {
            $montant = 80;
        } else {
            $montant = 80;
        }

    } else if ($action === 'retourBanque') {
        die('Retour banque...');
    } else {
        die('Erreur ! Action inconnue.');
    }


    

    // echo "<br><br><br><br><br><br><br><br>";
    // print_r($user->data);

    // Créatoin d'un transaction
    $sqlTransaction = 'INSERT INTO alt_transaction (user_id, email, transaction_date, montant, statut, annonce_id) 
            VALUES ('. $user->data['user_id'] .', "'. $user->data['user_email']  .'" , NOW(), "'.$montant.'", "en attente", '.$annonce_id.')';
    $result = $db->sql_query($sqlTransaction);

    $transactionId = $db->sql_nextid();
    $transactionId = str_pad($transactionId, 6, "0", STR_PAD_LEFT);

    //
    // Initiation des variables du formulaire de paiement
    //

    $certificat = '2948137617919086';   //certificat de test "mon-alternance.fr" (https://paiement.systempay.fr/vads-merchant)

    $vads_action_mode = 'INTERACTIVE';
    $vads_amount = $montant.'00';
    $vads_capture_delay = '0';
    $vads_ctx_mode = 'TEST';
    $vads_currency = '978';
    $vads_page_action = 'PAYMENT';
    $vads_payment_config = 'SINGLE';
    $vads_return_mode = 'GET';
    $vads_site_id = '72312361';
    $vads_trans_date = date("YmdHis"); 
    $vads_trans_id = $transactionId;    //239848
    $vads_url_return = append_sid("http://mon-alternance.fr/credit.php?action=retourBanque", '');
    $vads_version = 'V2';

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
        'vads_version' => $vads_version
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
        'signature' => $signature,
        'montant' => $montant
    ));

} else {
    $template->assign_vars(array(

        'MESSAGE_ERREUR' => 'Erreur : vous devez être authentifié pour créditer votre compte'
    ));
}


    $page_title = "Créditer mon compte";

// Output page
page_header($page_title, true);

$template->set_filenames(array(
	'body' => 'alt_credit.html')
);

page_footer();
