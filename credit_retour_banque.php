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

// $user->get_profile_fields( $user->data['user_id'] );

//$userProfilAlt = alt_profil_get();

//$user->data['is_registered']
//if ($user->data['is_registered']) {

    $action = request_var('action', '', true);
    $annonce_id = intval(request_var('annonce_id', '', true));
    $transaction_id = intval(request_var('vads_trans_id', '', true));
    $montant_reelement_paye = intval(request_var('vads_effective_amount', '', true));
    $vads_auth_result = request_var('vads_auth_result', '', true);

    if ($vads_auth_result == '00') {


     
        if ($transaction_id != 0) {
            
            // Retour de la banque avec un identifiant de connexion
            // Si trouvé, on met à jour le statut de la transaction
            // Si dans la transaction, il y a une annonce, on change en "publier"
        // die('transaction trouvée !!:' . $transaction_id);
            
            $sqlTransaction = 'SELECT  user_id, email, transaction_date, montant, statut, annonce_id, objet FROM alt_transaction 
            WHERE id = '.$transaction_id; 
            $result = $db->sql_query($sqlTransaction);

            if ($rowTransaction = $db->sql_fetchrow($result)) {

                // Mise à jour de la transaction comme quoi elle a bien été payée
                $sqlUpdatetransaction = 'UPDATE alt_transaction SET statut = "Payé", date_paiement = NOW()
                    , montant_reelement_paye = "'.$montant_reelement_paye.'"
                WHERE id = '.$transaction_id; 
                $resultUpdatetransaction = $db->sql_query($sqlUpdatetransaction);


                //
                // Paiement annonce
                //
                if ($rowTransaction['objet'] == 'annonce') {
                    // Update du statut de l'annonce à publié
                    $sqlUpdateAnnonce = 'UPDATE alt_annonce SET statut = "Désactivée", paye = "True", date_paiement = NOW() 
                    
                    WHERE id = '.intval($rowTransaction['annonce_id']); 
                    $resultUpdateAnnonce = $db->sql_query($sqlUpdateAnnonce);

                    //Votre compte a bien été crédité. Pour activer votre annonce, cliquer sur le bouton "Actions" puis "Activer"

                    $message = 'Votre compte a bien été crédité. Pour activer votre annonce, cliquer sur le bouton "<b>Actions</b>" puis "<b>Activer</b>" sur la page de vos annonces.<br><a href="'.append_sid("{$phpbb_root_path}compte.$phpEx?onglet=mesannonces", '').'">Retour à vos annonces</a>';
                    $color = 'green';

                } else if ($rowTransaction['objet'] == 'cvtheque') {

                    $dateAcces = 'NOW() + INTERVAL 1 DAY';

                    if ($rowTransaction['montant'] == 240) {
                        $dateAcces = 'NOW() + INTERVAL 15 DAY';
                    } else if ($rowTransaction['montant'] == 456) {
                        $dateAcces = 'NOW() + INTERVAL 1 MONTH';
                    } else if ($rowTransaction['montant'] == 1080) {
                        $dateAcces = 'NOW() + INTERVAL 3 MONTH';
                    }


                    $sqlUser = 'UPDATE alt_profil SET date_acces_cvtheque = '.$dateAcces.' WHERE user_id = ' . $rowTransaction['user_id'];
                    $resUser = $db->sql_query($sqlUser);

                    $sqlDateAccess = 'SELECT date_acces_cvtheque FROM alt_profil WHERE user_id = ' . $rowTransaction['user_id'];
                    $resDateAccess = $db->sql_query($sqlDateAccess);

                    $rowDate = $db->sql_fetchrow($resDateAccess);

                   // echo "<br><br><br><br><br><br> date = " . $rowDate['date_acces_cvtheque'];

                    $strDate = date("d/m/Y", strtotime($rowDate['date_acces_cvtheque']));

                    $message = 'Votre compte a bien été crédité. Vous avez à présent accès à la CVThèque jusqu\'au '.$strDate.' <br><a href="'.append_sid("{$phpbb_root_path}cvtheque.$phpEx", '').'">Consulter la CVThèque</a>';
                    $color = 'green';

                } else {

                    $message = 'Erreur ! transaction "'.$transaction_id.'" traitement de l objet "'.$rowTransaction['objet'].'" incoonu.';
                    $color = 'red';

                }



            } else {    

                $message = 'Erreur ! transaction "'.$transaction_id.'" inconnue.';
                $color = 'red';
            }
            
            
            
            
        
            /* Liste des variables en retour de la banque
            vads_amount = 3000
            vads_auth_mode = FULL
            vads_auth_number = 3fb0de
            vads_auth_result = 00
            vads_capture_delay = 0
            vads_card_brand = VISA
            vads_card_number = 497010XXXXXX0000
            vads_payment_certificate = a50d15063b5ec6cb140043138b8d7576470b71a9
            vads_ctx_mode = TEST
            vads_currency = "978" />
            vads_effective_amount = 3000
            vads_site_id = 12345678
            vads_trans_date = 20140902094139
            vads_trans_id = 454058
            vads_validation_mode = 0
            vads_version = V2
            vads_warranty_result = YES
            vads_payment_src = EC
            vads_sequence_number = 1
            vads_contract_used = 5785350
            vads_trans_status = AUTHORISED
            vads_expiry_month = 6
            vads_expiry_year = 2015
            vads_bank_code = 17807
            vads_bank_product = A
            vads_pays_ip = FR
            vads_presentation_date = 20140902094202
            vads_effective_creation_date = 20140902094202
            vads_operation_type = DEBIT
            vads_threeds_enrolled = Y
            vads_threeds_cavv = Q2F2dkNhdnZDYXZ2Q2F2dkNhdnY=
            vads_threeds_eci = 05
            vads_threeds_xid = WXJsVXpHVjFoMktzNmw5dTd1ekQ=
            vads_threeds_cavvAlgorithm = 2
            vads_threeds_status = Y
            vads_threeds_sign_valid = 1
            vads_threeds_error_code =
            vads_threeds_exit_status = 10
            vads_risk_control = CARD_FRAUD=OK;COMMERCIAL_CARD=OK
            vads_result = 00
            vads_extra_result = 00
            vads_card_country = "FR"
            vads_language = fr
            vads_hash = 299d81f4b175bfb7583d904cd19ef5e38b2b79b2373d9b2b4aab74e5753b10bc
            vads_url_check_src = PAY
            vads_action_mode = INTERACTIVE
            vads_payment_config = SINGLE
            vads_page_action = PAYMENT
            signature = 3132f1e451075f2408cda41f2e647e9b4747d421

            */
        } else {
            $message = 'Erreur ! transaction id inconnue : "'.$transaction_id.'" (Code erreur banque : '.$vads_auth_result.') <br><a href="'.append_sid("{$phpbb_root_path}compte.$phpEx?onglet=mesannonces", '').'">Retour à vos annonces</a>';
            $color = 'red';
        }
    } else {
        $message = '(Code erreur banque : "'.$vads_auth_result.'") 
        <br>Un problème de facturation s\'est produit lors de la procédure de paiement.
        <br>Veuillez réeasayer ou modifier vos données de facturation afin de résoudre le problème.
        <br>Si le problème persiste, vous pouvez <a href="'.append_sid($phpbb_root_path ."contact.$phpEx", '').'">nous contacter</a>.
        <br><br>L\'équipe de Mon-Alternance.fr vous remercie de votre confiance.
        <br>
        <br><a href="'.append_sid($phpbb_root_path ."compte.$phpEx?onglet=mesannonces", '').'">Retour à vos annonces</a>';

        $color = 'red';
    }


// } else {
//     $message =  'Erreur : vous devez être authentifié pour créditer votre compte';
//     $color = 'red';
// }


    $template->assign_vars(array(

        'MESSAGE' => $message,
        'COLOR' => $color
    ));



    $page_title = "Retour paiement banque";

    // Output page
    page_header($page_title, true);

    $template->set_filenames(array(
        'body' => 'alt_credit_retour_banque.html')
    );




page_footer();
