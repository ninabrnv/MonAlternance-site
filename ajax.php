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
$user->setup('viewforum');

$action = request_var('action', '', true);
$annonceId = intval(request_var('annonceId', '', true));
$candidatureId = intval(request_var('candidatureId', '', true));
$elements = request_var('elements', '', true);

if ($user->data['is_registered']) {



    if ($action === 'favoris' && $annonceId !== 0) {

        $sql = 'REPLACE INTO alt_annonce_favoris (user_id, annonce_id) VALUES ('.$user->data['user_id'].','.$annonceId.') ';
        $db->sql_query($sql);


        echo "Succes";

    } else if ($action === 'supprimerFavoris' && $annonceId !== 0) {
        
        $sql = 'DELETE FROM alt_annonce_favoris WHERE user_id = '.$user->data['user_id'].' AND annonce_id = '.$annonceId.' ';
        $db->sql_query($sql);


        echo "Succes";

    } else if ($action === 'postuler' && $annonceId !== 0) {
    
        $commentaire = request_var('commentaire', '', true);

        $sql = 'REPLACE INTO alt_annonce_candidat (user_id, annonce_id, commentaire) 
                        VALUES ('.$user->data['user_id'].','.$annonceId.', "'.$db->sql_escape($commentaire).'") ';
        $db->sql_query($sql);

        echo "Succes";


    } else if ($action === 'candidatureStatutSelectionner' && $candidatureId !== 0) {
    
    
        $sql = 'UPDATE alt_annonce_candidat SET statut = "Sélectionné" WHERE id = '.intval($candidatureId);
        $db->sql_query($sql);

        echo "Succes";

    } else if ($action === 'candidatureStatutRefuser' && $candidatureId !== 0) {
    
    
        $sql = 'UPDATE alt_annonce_candidat SET statut = "Refusé" WHERE id = '.intval($candidatureId);
        $db->sql_query($sql);

        echo "Succes";

    } else if ($action === 'candidatureSuppr' && $candidatureId !== 0) {
    
    
        $sql = 'DELETE FROM alt_annonce_candidat  WHERE id = '.intval($candidatureId);
        $db->sql_query($sql);

        echo "Succes";


    } else if ($action === 'adminDesactiver' && $elements != '') {

        $elementArray = explode(",", $elements);

       foreach($elementArray as $id) {
            if (intval($id) != 0) {
                $sql = 'UPDATE alt_profil SET is_admin = "false" WHERE id = ' . $id;
                $db->sql_query($sql);
            }
        
       }

       
        echo "Succes";
    
    } else if ($action === 'adminActiver' && $elements != '') {

        $elementArray = explode(",", $elements);

       foreach($elementArray as $id) {
            if (intval($id) != 0) {
                $sql = 'UPDATE alt_profil SET is_admin = "true" WHERE id = ' . $id;
                $db->sql_query($sql);
            }
        
       }

        echo "Succes";
       

    } else if ($action === 'annonceDesactiver' && $elements != '') {


        $elementArray = explode(",", $elements);

        foreach($elementArray as $id) {
             if (intval($id) != 0) {

                $annonce = new annonce();
                $annonce->get($id);
                $annonce->updateStatut('Désactivée');
             }
         
        }

    } else if ($action === 'annonceActiver' && $elements != '') {


        $elementArray = explode(",", $elements);

        foreach($elementArray as $id) {
             if (intval($id) != 0) {

                $annonce = new annonce();
                $annonce->get($id);
                $annonce->updateStatut('Active');
             }
         
        }

       
    } else if ($action === 'annonceSupprimer' && $elements != '') {


        $elementArray = explode(",", $elements);

        foreach($elementArray as $id) {
             if (intval($id) != 0) {

                $annonce = new annonce();
                $annonce->get($id);
                $annonce->updateStatut('Supprimée');
             }
         
        }

    } else if ($action === 'compteSupprimer' && $elements != '') {

        
        $elementArray = explode(",", $elements);

        foreach($elementArray as $id) {
            if (intval($id) != 0) {
                
                $sql = 'SELECT user_id FROM alt_profil  WHERE id = ' . $id;
                $result = $db->sql_query($sql);
               // echo "<br>sql = " . $sql;
                while ($row = $db->sql_fetchrow($result)) {
                    $user_id_a_suppr = intval($row['user_id']);
                 //   echo "<br>herrre $user_id_a_supprid";
                    if ($user_id_a_suppr != 57) {
                        $sqlDel = 'DELETE FROM  alt_profil  WHERE user_id = ' . $user_id_a_suppr;
                        $db->sql_query($sqlDel);

                        $sqlDel = 'DELETE FROM  a_users  WHERE user_id = ' . $user_id_a_suppr;
                        $db->sql_query($sqlDel);
                    }
                }
            }
            
        }


    } else {
        echo "ALT : Failed action";
    }



} else {
    echo "ALT : no connected";
}