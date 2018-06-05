<?php

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}



$onglet = request_var('onglet', '', true);
$action = request_var('action', '', true);




$compteSocieteUserId = $user->data['user_id'];  // par défaut
$supervisionCompteId = intval(request_var('supervisionCompteId', '', true));
$strSupervisionCompteId = "";

if ($supervisionCompteId != 0) {
    $compteSocieteUserId = $supervisionCompteId;
    $strSupervisionCompteId = '&supervisionCompteId='.$supervisionCompteId;
}



if ($user->data['is_registered']) {


    if ($action === 'candidatStatutSelectionne') {

        $id_candidature = request_var('id_candidature', '', true);
      

        // Update
        if ($id_candidature != 0) {
            $sql = 'UPDATE alt_annonce_candidat '
            . ' SET statut = "Sélectionné"'
            . ' WHERE id = ' . $id_candidature
            ;
            $db-> sql_query($sql);
        }

    } else if ($action === 'candidatStatutRefuse') {

        $id_candidature = request_var('id_candidature', '', true);
      

        // Update
        if ($id_candidature != 0) {
            $sql = 'UPDATE alt_annonce_candidat '
            . ' SET statut = "Refusé"'
            . ' WHERE id = ' . $id_candidature
            ;
            $db-> sql_query($sql);
        }

    }  else if ($action === 'candidatStatutTop10') {

        $id_candidature = request_var('id_candidature', '', true);
      

        // Update
        if ($id_candidature != 0) {
            $sql = 'UPDATE alt_annonce_candidat '
            . ' SET statut = "Top 10"'
            . ' WHERE id = ' . $id_candidature
            ;
            $db-> sql_query($sql);
        }

    }  else if ($action === 'candidatStatutNouveau') {

        $id_candidature = request_var('id_candidature', '', true);
      

        // Update
        if ($id_candidature != 0) {
            $sql = 'UPDATE alt_annonce_candidat '
            . ' SET statut = "Nouveau"'
            . ' WHERE id = ' . $id_candidature
            ;
            $db-> sql_query($sql);
        }

    }








   // echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>email : " . print_r($user->data);

    //Global
    $template->assign_vars(array(
        'U_ANNONCES' => append_sid("{$phpbb_root_path}annonces.$phpEx", ''),
        'prenom' => $altProfil['prenom'],
        'nom' => $altProfil['nom'],
        'user_email' => $altProfil['email'], ////    $user->data['user_email'],
        'user_id' => $altProfil['user_id'],
        'date_naissance_15_selected' => ($altProfil['date_naissance'] === '15') ? 'selected' : '',
        'date_naissance_16_selected' => ($altProfil['date_naissance'] === '16') ? 'selected' : '',
        'date_naissance_17_selected' => ($altProfil['date_naissance'] === '17') ? 'selected' : '',
        'date_naissance_18_selected' => ($altProfil['date_naissance'] === '18') ? 'selected' : '',
        'date_naissance_19_selected' => ($altProfil['date_naissance'] === '19') ? 'selected' : '',
        'date_naissance_20_selected' => ($altProfil['date_naissance'] === '20') ? 'selected' : '',
        'date_naissance_21_selected' => ($altProfil['date_naissance'] === '21') ? 'selected' : '',
        'date_naissance_22_selected' => ($altProfil['date_naissance'] === '22') ? 'selected' : '',
        'date_naissance_23_selected' => ($altProfil['date_naissance'] === '23') ? 'selected' : '',
        'date_naissance_24_selected' => ($altProfil['date_naissance'] === '24') ? 'selected' : '',
        'date_naissance_25_selected' => ($altProfil['date_naissance'] === '25') ? 'selected' : '',
        'date_naissance_26_selected' => ($altProfil['date_naissance'] === '26 et +') ? 'selected' : '',
        'ville' => $altProfil['ville'],	
        'societe_region' => $rowProfil['societe_region'],
        'domaine_principal' => $altProfil['domaine_principal'],	
        'derniere_ecole' => $altProfil['derniere_ecole'],
        'tel_mobile' => $altProfil['tel_mobile'],
        
        'niveau_etude_CAP_selected' => ($altProfil['niveau_etude'] === 'CAP') ? 'selected' : '',
        'niveau_etude_BEP_selected' => ($altProfil['niveau_etude'] === 'BEP') ? 'selected' : '',
        'niveau_etude_BACPRO_selected' => ($altProfil['niveau_etude'] === 'BAC professionnel') ? 'selected' : '',
        'niveau_etude_BACGEN_selected' => ($altProfil['niveau_etude'] === 'BAC général et technologique') ? 'selected' : '',
        'niveau_etude_B1_selected' => ($altProfil['niveau_etude'] === 'BAC+1') ? 'selected' : '',
        'niveau_etude_B2_selected' => ($altProfil['niveau_etude'] === 'BAC+2') ? 'selected' : '',
        'niveau_etude_B3_selected' => ($altProfil['niveau_etude'] === 'BAC+3') ? 'selected' : '',
        'niveau_etude_B4_selected' => ($altProfil['niveau_etude'] === 'BAC+4') ? 'selected' : '',
        'niveau_etude_B5_selected' => ($altProfil['niveau_etude'] === 'BAC+5') ? 'selected' : '',
        'niveau_etude_B6_selected' => ($altProfil['niveau_etude'] === 'BAC+6') ? 'selected' : ''
    ));



    //
    // Rechercher les annonces créer par l'entreprise connectée
    //
    $sqlAnnonces = 'SELECT A.id, A.ref,A.titre
    ,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description,A.date_de_debut
    ,A.duree, A.duree_nombre, A.duree_type
    ,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.poste_le, A.paye
    , A.cache_nb_candidatures, A.statut, A.date_publication
    ,VILLES.ville_longitude_deg
    , VILLES.ville_latitude_deg , D.region_nom 
    
    
    FROM alt_annonce A

    LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
    LEFT JOIN alt_departement D ON A.num_departement = D.num
    WHERE 1 
    AND A.proprietaire_user_id = '. intval($compteSocieteUserId)
    . ' GROUP BY A.id '
    . ' ORDER BY id DESC '
    . ' LIMIT 15 '
    ;


    $result = $db->sql_query($sqlAnnonces);


    while ($rowAnnonce = $db->sql_fetchrow($result)) {

        if ($rowAnnonce['statut'] === 'Supprimée') {
            continue;
        }

        //
        // Selection des candidats qui ont postulés à l'annonce
        //
        $sqlCandidats = 'SELECT A.id, AC.date as "date_postule", AC.statut, AC.id as "id_candidature", AC.commentaire
        , P.nom, P.prenom, P.ville, P.date_naissance, P.niveau_etude, P.domaine_principal, P.cv_fichier

        FROM alt_annonce A
        INNER JOIN alt_annonce_candidat AC ON A.id = AC.annonce_id
        INNER JOIN alt_profil P ON AC.user_id = P.user_id
        WHERE 1 AND A.id = '.intval($rowAnnonce['id'])
        ;

        $resultCandidats = $db->sql_query($sqlCandidats);

        $nbCandidat = 0;
        $nbCandidatNouveau = 0;
        $nbCandidatSelectionne = 0;
        $nbCandidatRefuse = 0;
        $nbCandidat10meilleurs = 0;

        while ($rowCandidat = $db->sql_fetchrow($resultCandidats)) {
            
            $rowAnnonce['candidats'][] = $rowCandidat;

            if ($rowCandidat['statut'] === 'Sélectionné') {
                $nbCandidatSelectionne++;
            } else if ($rowCandidat['statut'] === 'Refusé') {
                $nbCandidatRefuse++;
            } else if ($rowCandidat['statut'] === 'Top 10') {
                $nbCandidat10meilleurs++;
            } else {
                $nbCandidatNouveau++;   // statut "Nouveau"
            }


            $nbCandidat++;        
        }

        // echo "<br><br><br><br><br><br>paye = ".$rowAnnonce['paye'];

        $template->assign_block_vars('mesannonces', array(
            'ID' => $rowAnnonce['id'],
            'REF' => $rowAnnonce['ref'] ,   //. '(id : '.$rowAnnonce['id'].')'
            'TITRE' => $rowAnnonce['titre'],
            'LIEU' => $rowAnnonce['ville'],
            'TYPE_CONTRAT' => $rowAnnonce['contrat_type'],
            'DATE_POSTULE' =>  date("d/m/Y", strtotime($rowAnnonce['date_postule'])),
            'DATE_PUBLICATION' =>  ($rowAnnonce['date_publication'] != null) ? date("d/m/Y", strtotime($rowAnnonce['date_publication'])) : '<i>(non publiée)</i>',
            
            'DOMAINE' =>  $rowAnnonce['domaine'],
            'DOMAINE_ARTISANAT' =>  $rowAnnonce['domaine_artisanat'],
            'DESCRIPTION' => $rowAnnonce['description'],
            'DATE_DE_DEBUT' => $rowAnnonce['date_de_debut'],
            'DUREE' => $rowAnnonce['duree'],
            'DUREE_TYPE' => $rowAnnonce['duree_type'],
            'DUREE_NOMBRE' => $rowAnnonce['duree_nombre'],
            
            'PAYE' => ($rowAnnonce['paye'] === 'true') ? true : false,
            'MESSAGE_STATUT' => ($rowAnnonce['statut'] === 'Active') ? 'Annonce publiée depuis le ' . date("d/m/Y", strtotime($rowAnnonce['date_publication'])) : 'Pour activer les 30 jours de votre annonce, veuillez cliquer sur Activer',

            'LIEN_ANNONCE_EDIT' => append_sid($phpbb_root_path ."annonce.$phpEx?id=".$rowAnnonce['id'], ''),
            'LIEN_ANNONCE_DUPLIQUER' => append_sid($phpbb_root_path ."annonce.$phpEx?action=dupliquerAnnonce&id=".$rowAnnonce['id'], ''),
            'LIEN_ANNONCE_VOIR' => append_sid($phpbb_root_path ."annonces.$phpEx?id=".$rowAnnonce['id'], ''),
            'LIEN_ANNONCE_ACTIVER' => append_sid($phpbb_root_path ."annonce.$phpEx?action=activerAnnonce&id=".$rowAnnonce['id'].$strSupervisionCompteId, ''),
            'LIEN_ANNONCE_PAYER' => append_sid($phpbb_root_path ."paiement.$phpEx?&annonce_id=".$rowAnnonce['id'], ''),
            'LIEN_ANNONCE_PAYER_MODERATEUR' => append_sid($phpbb_root_path ."annonce.$phpEx?action=adminPayerAnnonce&id=".$rowAnnonce['id'], ''),
            'LIEN_AJOUTER_CANDIDAT' => append_sid($phpbb_root_path ."ajouter_candidat.$phpEx?annonceId=".$rowAnnonce['id'], ''),
            'LIEN_ANNONCE_DESACTIVER' => append_sid($phpbb_root_path ."annonce.$phpEx?action=desactiverAnnonce&id=".$rowAnnonce['id'].$strSupervisionCompteId, ''),
            'LIEN_ANNONCE_FACTURE' => append_sid($phpbb_root_path ."facture.$phpEx?annonce_id=".$rowAnnonce['id'], ''),
            'LIEN_ANNONCE_SUPPRIMER' => append_sid($phpbb_root_path ."annonce.$phpEx?action=supprimerAnnonce&id=".$rowAnnonce['id'], ''),
            'CACHE_NB_CANDIDATURES' => intval($rowAnnonce['cache_nb_candidatures']),
            'STATUT' => $rowAnnonce['statut'],
            'STATUT_COULEUR' => ($rowAnnonce['statut'] === 'Active') ? 'green' : (($rowAnnonce['statut'] === 'Désactivée') ? 'red' : 'grey'),
            'nbCandidat' => ($nbCandidat != 0) ? '<span class="badge badge-primary">'.$nbCandidat.'</span>' : '',
            'nbCandidatNouveau' => ($nbCandidatNouveau != 0) ? '<span class="badge badge-primary">'.$nbCandidatNouveau.'</span>' : '',
            'nbCandidatSelectionne' => ($nbCandidatSelectionne != 0) ? '<span class="badge badge-primary">'.$nbCandidatSelectionne.'</span>' : '',
            'nbCandidatRefuse' => ($nbCandidatRefuse != 0) ? '<span class="badge badge-primary">'.$nbCandidatRefuse.'</span>' : '',
            'nbCandidat10meilleurs' => ($nbCandidat10meilleurs != 0) ? '<span class="badge badge-primary">'.$nbCandidat10meilleurs.'</span>' : ''
        ));

        if ($rowAnnonce['candidats'] != null) {
            foreach ($rowAnnonce['candidats'] as $candidat => $rowCandidat) {

                $template->assign_block_vars('mesannonces.candidats', array(
                    'id_candidature' => $rowCandidat['id_candidature'],
                    'lienApercu' => append_sid($phpbb_root_path ."candidatures.$phpEx?candidatureId=".$rowCandidat['id_candidature']."&annonceId=".$rowAnnonce['id'], ''),
                    'commentaire' => $rowCandidat['commentaire'],
                    'commentaireDisplay' => ($rowCandidat['commentaire'] !== '') ? 'block' : 'none',
                    'nom' => $rowCandidat['nom'],
                    'prenom' => $rowCandidat['prenom'],
                    'age' => $rowCandidat['date_naissance'],
                    'ville' => $rowCandidat['ville'],
                    'niveau_formation' => $rowCandidat['niveau_etude'],
                    'domaine' => $rowCandidat['domaine_principal'],
                    'cv' => ($rowCandidat['cv_fichier'] != '') ? './cv/'.$rowCandidat['cv_fichier'] : '#',
                    'statut' => ($rowCandidat['statut'] != '') ? $rowCandidat['statut'] : 'Nouveau',
                    'statutColor' => ($rowCandidat['statut'] === 'Sélectionné') ? 'green' : (($rowCandidat['statut'] === 'Refusé') ? 'red' : 'black'),
                    'lien_candidature_statut_nouveau' => append_sid($phpbb_root_path ."compte.$phpEx?action=candidatStatutNouveau&id_candidature=".$rowCandidat['id_candidature']."&id=".$rowAnnonce['id'], ''),
                    'lien_candidature_statut_selectionne' => append_sid($phpbb_root_path ."compte.$phpEx?action=candidatStatutSelectionne&id_candidature=".$rowCandidat['id_candidature']."&id=".$rowAnnonce['id'], ''),
                    'lien_candidature_statut_refuse' => append_sid($phpbb_root_path ."compte.$phpEx?action=candidatStatutRefuse&id_candidature=".$rowCandidat['id_candidature']."&id=".$rowAnnonce['id'], ''),
                    'lien_candidature_statut_top10' => append_sid($phpbb_root_path ."compte.$phpEx?action=candidatStatutTop10&id_candidature=".$rowCandidat['id_candidature']."&id=".$rowAnnonce['id'], '')
                ));
            }
        }
     

    }


    // echo "<br><br><br><br><br><br><br>sqlAnnonces : " . $sqlAnnonces;





    ///
    // Onglet Profil
    ///

    $sqlProfil = 'SELECT id,	user_id,	email,	societe_ident_nom,	societe_ident_prenom,	type_compte,	date_creation,	
    ville,	date_naissance,	domaine_principal,	niveau_etude,	derniere_ecole,
        tel_mobile,	societe_nom,	societe_adresse,	societe_adresse_suite,	societe_adresse_cp,
        societe_adresse_ville,	societe_adresse_pays, societe_region,	societe_tel	societe_siret	, societe_tel,
    societe_num_tva_intra,	societe_num_exo_tva,	societe_secteur_activite,	societe_effectif,
    argent 
    FROM alt_profil
    WHERE user_id = ' . intval($compteSocieteUserId)
    ;
    // echo "<br><br><br><br><br><br><br>sqlProfil : " . $sqlProfil;
    $result = $db->sql_query($sqlProfil);

    if ($rowProfil = $db->sql_fetchrow($result)) {

        $template->assign_vars(array(
            'email' => $rowProfil['email'],     ///  $user->data['email'],
            'societe_ident_nom' => $rowProfil['societe_ident_nom'],
            'societe_ident_prenom' => $rowProfil['societe_ident_prenom'],
            'societe_tel' => $rowProfil['societe_tel'],
            
            'typeCompte' => $rowProfil['type_compte'],
            'typecompte_candidat_selected' => $rowProfil['type_compte'] === 'candidat' ? 'selected' : '',
            'typecompte_entreprise_selected' => $rowProfil['type_compte'] === 'entreprise' ? 'selected' : '',
            'societe_adresse_ville' => $rowProfil['societe_adresse_ville'],
            'societe_region' => $rowProfil['societe_region'],
            'date_naissance' => $rowProfil['date_naissance'],
            'domaine_principal' => $rowProfil['domaine_principal'],
            'societe_secteur_activite' => $rowProfil['societe_secteur_activite'],
            'niveau_etude' => $rowProfil['niveau_etude'],
            'derniere_ecole' => $rowProfil['derniere_ecole'],
            'tel_mobile' => $rowProfil['tel_mobile'],
            'societe_nom' => $rowProfil['societe_nom'],
            'ARGENT' => $rowProfil['argent'] . ' €',
            'FORM_CREDIT_ACTION' => append_sid($phpbb_root_path ."credit.$phpEx", ''),
            'display_candidat' => (($rowProfil['type_compte'] === 'candidat') || ($rowProfil['type_compte'] === '')) ? 'show' : 'hidden'

        ));

        // selecteur d'acivités
      
    } else {
        // insert par défaut
        $sqlProfil = 'INSERT INTO alt_profil (date_creation, user_id, email, type_compte) values (
            NOW()
            , '.intval($compteSocieteUserId). '
            , "'.$db->sql_escape($user->data['user_email']).'"
            , "candidat"
            )';
        $db->sql_query($sqlProfil);
    }


    ///
    // Onglet "Mes factures
    ///
    $sqlProfil = 'SELECT T.id as transaction_id, CONCAT("FA",YEAR(T.transaction_date),"_",T.id) as ref
    , T.montant, T.objet, T.statut, T.transaction_date, T.date_paiement
    , A.ville, A.titre as poste, A.contrat_type, A.id as annonce_id
    FROM alt_transaction T
    INNER JOIN alt_annonce A ON T.annonce_id = A.id
    WHERE T.user_id = ' . intval($compteSocieteUserId)
    ;
    // echo "<br><br><br><br><br><br><br>sqlProfil : " . $sqlProfil;
    $result = $db->sql_query($sqlProfil);

    if ($rowTransactions = $db->sql_fetchrow($result)) {

        $template->assign_block_vars('mesfactures', array(
            'transaction_id' => $rowTransactions['transaction_id'],
            'ref' => $rowTransactions['ref'],
            'montant' => $rowTransactions['montant'] . ' €',
            'objet' => $rowTransactions['objet'],
            'statut' => $rowTransactions['statut'],
            'transaction_date' => $rowTransactions['transaction_date'],
            'date_paiement' => date("d/m/Y", strtotime($rowTransactions['date_paiement'])),

            'lien_annonce' => append_sid($phpbb_root_path ."annonces.$phpEx?id=".$rowTransactions['annonce_id'], ''),
            'lien_facture' => ($rowTransactions['annonce_id'] != 0) ? append_sid($phpbb_root_path ."facture.$phpEx?annonce_id=".$rowTransactions['annonce_id'], '') : '',

            'titre_facture' => ($rowTransactions['annonce_id'] != 0) ? 'Facture' : '',

            'poste' => $rowTransactions['poste'],
            'ville' => $rowTransactions['ville'],
            'contrat_type' => $rowTransactions['contrat_type']
        ));

    }





    $template->assign_vars(array(
        'USER_ID' => intval($compteSocieteUserId),
        'ACTION_FORM_CREER_ANNONCE' => append_sid($phpbb_root_path ."annonce-offres.$phpEx", ''),
        'ACTION_FORM_PROFIL_SAUVEGARDER' => append_sid($phpbb_root_path ."compte.$phpEx?onglet=monprofil", ''),
        'ACTION_FORM_COMPTE_SAUVEGARDER' => append_sid($phpbb_root_path ."compte.$phpEx?onglet=moncompte", ''),
        'ACTION_COMPTE_SUPPRIMER' => append_sid($phpbb_root_path ."compte.$phpEx?onglet=moncompte&action=compteSupprimer", ''),
        'ONGLET_MES_ANNONCE_SELECTED' => (($onglet === 'mesannonces') || ($onglet === '')) ? ' show active' : '',
        'ONGLET_MES_FAVORIS_SELECTED' => ($onglet === 'mesfavoris') ? ' show active' : '',
        'ONGLET_MON_PROFIL_SELECTED' => ($onglet === 'monprofil') ? ' show active' : '',
        'ONGLET_MON_COMPTE_SELECTED' => ($onglet === 'moncompte') ? ' show active' : '',
        'ONGLET_MES_FACTURES_SELECTED' => ($onglet === 'mesfactures') ? ' show active' : '',
        'ONGLET_MES_CV_SELECTED' => ($onglet === 'mescv') ? ' show active' : '',
        'ALT_SCRIPT_PAGE'			=> '<script src="assets/javascript/alt_entreprise.js"></script>',
        'ACCES_CVTHEQUE'    => $altProfil['date_acces_cvtheque'] != '' ? 'SHOW' : '',
        'DATE_ACCESS_CVTHEQUE'  =>  date("d/m/Y", strtotime($altProfil['date_acces_cvtheque']))

    ));

    /*
    ///
    // Villes disponibles
    /// 
    $sqlVillesDisponibles = 'SELECT ville_nom, ville_nom_reel, ville_code_postal, ville_code_commune FROM alt_villes_france ORDER BY ville_nom';
    $result = $db->sql_query($sqlVillesDisponibles);

    while ($row = $db->sql_fetchrow($result)) {
    
    
        $template->assign_block_vars('villesDisponibles', array(
            'VILLE_NOM' => $row['ville_nom'],
            'VILLE_LABEL' => ucfirst(strtolower($row['ville_nom'])) . ' ('. substr($row['ville_code_postal'],0,5) .')',
            'VILLE_CODE_POSTAL' => $row['ville_code_postal']
            
        ));
    }
    */


} // if is_registred

?>