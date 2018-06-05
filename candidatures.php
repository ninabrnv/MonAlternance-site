<?php


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

$userProfilAlt = alt_profil_get();

$candidatureId = intval(request_var('candidatureId', '', true));
$annonceId = intval(request_var('annonceId', '', true));



// $page_title = ($config['board_index_text'] !== '') ? $config['board_index_text'] : $user->lang['INDEX'];

$page_title = 'Candidatures';

// Output page
page_header($page_title, false);

$action = request_var('action', '', true);

if ($user->data['is_registered']) {
	

        //
        // Selection des candidats qui ont postulés à l'annonce
        //
        $sqlCandidats = 'SELECT A.id, A.titre, A.description
        
        , AC.date as "date_postule", AC.statut, AC.id as "id_candidature", AC.commentaire
        , P.nom, P.prenom, P.ville, P.email, P.tel_mobile, P.date_naissance, P.niveau_etude
        , P.domaine_principal, P.domaine_artisanat, P.cv_fichier

        FROM alt_annonce A
        INNER JOIN alt_annonce_candidat AC ON A.id = AC.annonce_id
        INNER JOIN alt_profil P ON AC.user_id = P.user_id
        WHERE 1 AND A.id = '.intval($annonceId)
          // . ' AND AC.id = '.intval($candidatureId)
        ;
        $resultCandidats = $db->sql_query($sqlCandidats);

        //echo "<br><br><br><br><br><br><br><br> sql =".$sqlCandidats;

        $premierId = 0;
        $precedentId = 0;
        $courantId = 0;
        $suivantId = 0;
        $nbCandidatures = 0;
        $indice = 0;    // indique le numero que l'on regarde parmis cette liste

        while ($rowCandidat = $db->sql_fetchrow($resultCandidats)) {

            
            
            $nbCandidatures++;

            if ($premierId == 0) {
                $premierId  = $rowCandidat['id_candidature'];
            }

            //echo "<br><br><br><br><br> Candidat [".$rowCandidat['id_candidature']."] = ".print_r($rowCandidat);
            // echo "<br> id =" .$candidatureId;
    
            if ($courantId == 0) {
                $precedentId = $rowCandidat['id_candidature'];  // par défaut
            }

            if ($rowCandidat['id_candidature'] == $candidatureId) {
                
                $courantId = $rowCandidat['id_candidature'];

                $template->assign_vars(array(
                    'id_candidature' => $rowCandidat['id_candidature'],
                    'lienApercu' => append_sid($phpbb_root_path ."candidatures.$phpEx?candidatureId=".$rowCandidat['id_candidature']."&annonceId=".$rowAnnonce['id'], ''),
                    'commentaire' => $rowCandidat['commentaire'],
                    'commentaireDisplay' => ($rowCandidat['commentaire'] !== '') ? 'block' : 'none',
                    'nom' => $rowCandidat['nom'],
                    'prenom' => $rowCandidat['prenom'],
                    'age' => $rowCandidat['date_naissance'],
                    'ville' => $rowCandidat['ville'],
                    'tel' => $rowCandidat['tel_mobile'],
                    'candidat_email' => $rowCandidat['email'],
                    'niveau_etude' => $rowCandidat['niveau_etude'],
                    'domaine' => $rowCandidat['domaine_principal'],
                    'domaine_artisanat' => $rowCandidat['domaine_artisanat'],
                   
                    'cv' => ($rowCandidat['cv_fichier'] != '') ? './cv/'.$rowCandidat['cv_fichier'] : '#',
                    'cv_pdf' => (strpos($rowCandidat['cv_fichier'], '.pdf')) || (strpos($rowCandidat['cv_fichier'], '.jpg')) ? '<iframe width="100%" height="500px" src="./cv/'.$rowCandidat['cv_fichier'].'"></iframe>' : '',

                    'statut' => ($rowCandidat['statut'] != '') ? $rowCandidat['statut'] : '',
                    'display_rangerDans' => ($rowCandidat['statut'] != '') ? 'block' : 'none',

                    'annonce_titre' => $rowCandidat['titre'],
                    'annonce_description' => $rowCandidat['description']
                  
                ));



            } else {

                $suivantId = $rowCandidat['id_candidature'];

            }
  
            // echo "<br><br><br><br><br><br> indice : " .$indice;
            if ($courantId != 0) {
                $indice++;
            }

        }

        // Si le dernier est celui affiché, alors, le dernier sera le 1er
        if (($suivantId == $courantId) || ($suivantId == 0)) {
            $suivantId = $premierId;
        }

 


        $template->assign_vars(array(
            'lien_precedent' => append_sid($phpbb_root_path ."candidatures.$phpEx?candidatureId=".$precedentId."&annonceId=".$annonceId, ''),
            'lien_suivant' => append_sid($phpbb_root_path ."candidatures.$phpEx?candidatureId=".$suivantId."&annonceId=".$annonceId, ''),
            'nb_candidatures' => $nbCandidatures,
            'indice' => $indice
        ));


        if ($nbCandidatures == 0) {
            redirect(append_sid($phpbb_root_path . "compte.$phpEx"));
        }



    $templatePage = 'alt_candidatures.html';

    $template->set_filenames(array(
        'body' => $templatePage)
    );

    page_footer();


} else {
	// si pas connecté
	redirect(append_sid($phpbb_root_path . "ucp.$phpEx?mode=login"));

}
