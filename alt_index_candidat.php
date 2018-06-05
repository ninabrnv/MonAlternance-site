<?php

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}



$onglet = request_var('onglet', '', true);

if ($user->data['is_registered']) {



   // echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>email : " . print_r($user->data);

    //Global
    $template->assign_vars(array(
        'U_ANNONCES' => append_sid("{$phpbb_root_path}annonces.$phpEx", ''),
        'prenom' => $altProfil['prenom'],
        'nom' => $altProfil['nom'],
        'user_email' => $user->data['user_email'],
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
        'region' => $altProfil['region'],	
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
    // Recherche les annonces où j'ai postulés
    //
    $sqlAnnonces = 'SELECT A.id, A.ref,A.titre
    ,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description
    ,A.date_de_debut, A.debut_mois, A.debut_annee
    ,A.duree, A.duree_type, A.duree_nombre
    ,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.poste_le,VILLES.ville_longitude_deg, VILLES.ville_latitude_deg , D.region_nom 
    ,AC.date as "date_postule", A.date_publication 
    
    FROM alt_annonce A
    INNER JOIN alt_annonce_candidat AC ON A.id = AC.annonce_id
    LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
    LEFT JOIN alt_departement D ON A.num_departement = D.num
    WHERE 1 
    AND AC.user_id = '. intval($user->data['user_id']).' 
    GROUP BY A.id
    ORDER BY id DESC 
    ';
    

    $result = $db->sql_query($sqlAnnonces);


    while ($row = $db->sql_fetchrow($result)) {

        $template->assign_block_vars('mesannonces', array(
            'ID' => $row['id'],
            'REF' => $row['ref'],
            'TITRE' => $row['titre'],
            'DOMAINE' =>  $row['domaine'],
            'DOMAINE_ARTISANAT' =>  $row['domaine_artisanat'],
            'DESCRIPTION' => $row['description'],
            'DATE_DE_DEBUT' => $row['date_de_debut'].' '.$row['debut_mois'].' '.$row['debut_annee'],
            'DUREE' =>($row['duree_nombre'] != 0) ?  $row['duree_nombre'].' '.$row['duree_type'] : $row['duree'],
            'LIEU' => $row['ville'],
            'TYPE_CONTRAT' => $row['contrat_type'],
            'DATE_PUBLICATION' => ($row['date_publication'] != null) ? date("d/m/Y", strtotime($row['date_publication'])) : '<i>(non publiée)</i>',
            'DATE_POSTULE' =>  date("d/m/Y", strtotime($row['date_postule'])),
            'LIEN' => append_sid($phpbb_root_path ."annonces.$phpEx?id=".$row['id'], '') 
        ));

    }


    // echo "<br><br><br><br><br><br><br>sqlAnnonces : " . $sqlAnnonces;



    //
    // Recherche les annonces en favoris
    //
    $sqlAnnonces = 'SELECT A.id, A.ref,A.titre
    ,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description,A.date_de_debut,A.duree
    ,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.poste_le,VILLES.ville_longitude_deg, VILLES.ville_latitude_deg , D.region_nom 
    ,AF.date as "date_favoris" , AC.date as "date_postule", A.date_publication
    
    FROM alt_annonce A
    INNER JOIN alt_annonce_favoris AF ON A.id = AF.annonce_id
    LEFT JOIN alt_annonce_candidat AC ON A.id = AC.annonce_id
    LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
    LEFT JOIN alt_departement D ON A.num_departement = D.num
    WHERE 1 
    AND AF.user_id = '. intval($user->data['user_id']). '
        GROUP BY A.id
        ORDER BY id DESC 
    '
    ;


    $result = $db->sql_query($sqlAnnonces);

    // echo "<br><br><br><br><br><br><br>sqlAnnonces : " . $sqlAnnonces;

    while ($row = $db->sql_fetchrow($result)) {

        $template->assign_block_vars('mesfavoris', array(
            'ID' => $row['id'],
            'REF' => $row['ref'],
            'TITRE' => $row['titre'],
            'DOMAINE' =>  $row['domaine'],
            'DOMAINE_ARTISANAT' =>  $row['domaine_artisanat'],
            'DESCRIPTION' => $row['description'],
            'DATE_DE_DEBUT' => $row['date_de_debut'],
            'DUREE' => $row['duree'],
            'LIEU' => $row['ville'],
            'TYPE_CONTRAT' => $row['contrat_type'],
            'DATE_PUBLICATION' => ($row['date_publication'] != null) ? date("d/m/Y", strtotime($row['date_publication'])) : '<i>(non publiée)</i>',
            'BNT_POSTULER_VISIBILITY' => ($row['date_postule'] != '') ? 'hidden' : 'visible',
            'DATE_POSTULE' => date("d/m/Y", strtotime($row['date_postule'])),
            'LIEN' => append_sid($phpbb_root_path ."annonces.$phpEx?id=".$row['id'], '') 
        ));

    }



    ///
    // Onglet Profil
    ///

    $sqlProfil = 'SELECT id,	user_id,		nom,	prenom,	type_compte,	date_creation,	
    ville,ville_proche,region,	date_naissance,	domaine_principal, domaine_artisanat,	niveau_etude,	derniere_ecole,
        tel_mobile,	societe_nom,	societe_adresse,	societe_adresse_suite,	societe_adresse_cp,
        societe_adresse_ville,	societe_adresse_pays,	societe_tel	societe_siret	,
    societe_num_tva_intra,	societe_num_exo_tva,	societe_secteur_activite,	societe_effectif,
    argent, cv_fichier
    FROM alt_profil
    WHERE user_id = ' . intval($user->data['user_id'])
    ;

    $result = $db->sql_query($sqlProfil);

    if ($rowProfil = $db->sql_fetchrow($result)) {

        $template->assign_vars(array(
            'email' => $user->data['email'],
            'nom' => $rowProfil['nom'],
            'prenom' => $rowProfil['prenom'],
            'type_compte' => $rowProfil['type_compte'],
            'typecompte_candidat_selected' => $rowProfil['type_compte'] === 'candidat' ? 'selected' : '',
            'typecompte_entreprise_selected' => $rowProfil['type_compte'] === 'entreprise' ? 'selected' : '',
            'ville' => $rowProfil['ville'],
            'ville_proche' => $rowProfil['ville_proche'],
            'region' => $rowProfil['region'],
            'date_naissance' => $rowProfil['date_naissance'],
            'domaine_principal' => $rowProfil['domaine_principal'],
            'domaine_artisanat' => $rowProfil['domaine_artisanat'],
            'domaine_artisanat_display' => ($rowProfil['domaine_principal'] === 'ARTISANAT') ? 'block' : 'none',
            'niveau_etude' => $rowProfil['niveau_etude'],
            'derniere_ecole' => $rowProfil['derniere_ecole'],
            'tel_mobile' => $rowProfil['tel_mobile'],
            'societe_nom' => $rowProfil['societe_nom'],
            'argent' => $rowProfil['argent'] . ' €',
            'display_candidat' => (($rowProfil['type_compte'] === 'candidat') || ($rowProfil['type_compte'] === '')) ? 'show' : 'hidden',
            'cv_href' => ($rowProfil['cv_fichier'] != '') ? './cv/'.$rowProfil['cv_fichier'] : '#',
            'cv_nom' => ($rowProfil['cv_fichier'] != '') ? 'Mon CV' : '',
            'cv_supprimer_lien' => ($rowProfil['cv_fichier'] != '') ? ' &nbsp;&nbsp;(<a href="'.append_sid("{$phpbb_root_path}compte.$phpEx?action=supprimerCV&onglet=monprofil", '').'">Supprimer le CV</a>)' : ''

        ));

    } else {
        // insert par défaut
        $sqlProfil = 'INSERT INTO alt_profil (date_creation, user_id, email, type_compte) values (
            NOW()
            , '.intval($user->data['user_id']). '
            , "'.$db->sql_escape($user->data['user_email']).'"
            , "candidat"
            )';
        $db->sql_query($sqlProfil);
    }

    $template->assign_vars(array(
        'USER_ID' => intval($user->data['user_id']),
        'ACTION_FORM_PROFIL_SAUVEGARDER' => append_sid($phpbb_root_path ."compte.$phpEx?onglet=monprofil", ''),
        'ACTION_FORM_COMPTE_SAUVEGARDER' => append_sid($phpbb_root_path ."compte.$phpEx?onglet=moncompte", ''),
        'ACTION_COMPTE_SUPPRIMER' => append_sid($phpbb_root_path ."compte.$phpEx?onglet=moncompte&action=compteSupprimer", ''),
        'ONGLET_MES_ANNONCE_SELECTED' => (($onglet === 'mesannonces') || ($onglet === '')) ? ' show active' : '',
        'ONGLET_MES_FAVORIS_SELECTED' => ($onglet === 'mesfavoris') ? ' show active' : '',
        'ONGLET_MON_PROFIL_SELECTED' => ($onglet === 'monprofil') ? ' show active' : '',
        'ONGLET_MON_COMPTE_SELECTED' => ($onglet === 'moncompte') ? ' show active' : '',
        'ALT_SCRIPT_PAGE'			=> '<script src="assets/javascript/alt_candidat.js"></script>'
    ));

    
    ///
    // Villes disponibles
    /// 
    // $sqlVillesDisponibles = 'SELECT ville_nom, ville_nom_reel, ville_code_postal, ville_code_commune FROM alt_villes_france ORDER BY ville_nom';
    // $result = $db->sql_query($sqlVillesDisponibles);

    // while ($row = $db->sql_fetchrow($result)) {
    
    
    //     $template->assign_block_vars('villesDisponibles', array(
    //         'VILLE_NOM' => $row['ville_nom'],
    //         'VILLE_LABEL' => ucfirst(strtolower($row['ville_nom'])) . ' ('. substr($row['ville_code_postal'],0,5) .')',
    //         'VILLE_CODE_POSTAL' => $row['ville_code_postal']
            
    //     ));
    // }


} // if is_registred

?>