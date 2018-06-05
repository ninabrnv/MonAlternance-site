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

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('viewforum');


if (!$user->data['is_registered']) {
	// si pas connecté
    redirect(append_sid($phpbb_root_path . "ucp.$phpEx?mode=login"));
    die();
}

$userProfilAlt = alt_profil_get();
if ($userProfilAlt['is_admin'] !== 'true') {
    echo "non autorisé";
    die;
}


$page_title = "Administration - Annonces";



$action = request_var('action', '', true);

$candidatSelectionne = intval(request_var('candidatSelectionne', '', true));
$annoncesselectionnees = request_var('annoncesselectionnees', '', true);

$filtreRef = request_var('filtreRef', '', true);
$filtreTitre = request_var('filtreTitre', '', true);
$filtreStatut = request_var('filtreStatut', '', true);
$filtreTypeContrat = request_var('filtreTypeContrat', '', true);
$filtreVille = request_var('filtreVille', '', true);
$filtreDomaineActivite = request_var('filtreDomaineActivite', '', true);
$filtreDomaineArtisanat = request_var('filtreDomaineArtisanat', '', true);
$filtreRegion = request_var('filtreRegion', '', true);
$filtreEntreprise = request_var('filtreEntreprise', '', true);
$filtreContact = request_var('filtreContact', '', true);
$filtrePaye = request_var('filtrePaye', '', true);

$filtreCandidat = request_var('filtreCandidat', '', true);


if (($action == 'postulerPourLeCandidat') && ($candidatSelectionne != 0)) {

   // echo '<br>candidatSelectionne : ' .$candidatSelectionne;
   // echo '<br>annoncesselectionnees : ' .$annoncesselectionnees;
   
    $tmpAnnonceId = 0;
    $tabAnnonces = explode(",", $annoncesselectionnees);

    foreach($tabAnnonces as $tmpAnnonceId) {

        $tmpAnnonceId = intval($tmpAnnonceId);

        if ($tmpAnnonceId != 0) {

            $sqlPostuler = 'REPLACE INTO alt_annonce_candidat (annonce_id, user_id) VALUES ('.$tmpAnnonceId.', '.$candidatSelectionne.')';
            $db->sql_query($sqlPostuler);
            //echo '<br>sql = '.$sqlPostuler;
        }
    }

    $message = 'Les candidatures ont été effectuées!';
}





// Output page
page_header($page_title, true);



// Selection des comptes entreprises
$sql = 'SELECT P.id,P.user_id, P.societe_nom, P.societe_adresse_ville 
    FROM alt_profil P
    WHERE type_compte = "entreprise" ';
 $sql .= ' ORDER BY P.societe_nom';

$resultEntreprises = $db->sql_query($sql);


while ($rowEntreprises = $db->sql_fetchrow($resultEntreprises)) {

    if ($rowEntreprises['societe_nom'] != '' && $rowEntreprises['user_id'] != 57) {
        $template->assign_block_vars('liste_entreprises', array(
            'societe_nom' => $rowEntreprises['societe_nom']. ' ('. $rowEntreprises['societe_adresse_ville'].')',
            'id' => $rowEntreprises['id']
        ));
    }

}



// Selection des comptes candidats
$sql = 'SELECT P.id, P.user_id, P.nom, P.prenom, P.ville, P.domaine_principal
    FROM alt_profil P
    WHERE type_compte = "candidat" ';

if ($filtreCandidat != '') {

    $sql .= ' AND (P.nom LIKE "%'.$filtreCandidat.'%" OR P.prenom LIKE "%'.$filtreCandidat.'%")  ' ;
}

 $sql .= ' ORDER BY P.domaine_principal, P.nom, P.prenom';

$resultCandidats = $db->sql_query($sql);


while ($rowCandidats = $db->sql_fetchrow($resultCandidats)) {

    if ($rowCandidats['nom'] != '') {
        $template->assign_block_vars('liste_candidats', array(
            'candidat_nom_prenom' => '['.$rowCandidats['domaine_principal'].'] '.$rowCandidats['nom'].' '.$rowCandidats['prenom'].' ('. $rowCandidats['ville'].')',
            'user_id' => $rowCandidats['user_id']
        ));
    }

}







// selection des annonces
$sqlAnnonces = 'SELECT A.id, A.ref,A.titre
,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description
,A.date_de_debut, A.debut_mois, A.debut_annee
,A.duree, A.duree_nombre, A.duree_type
,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.date_publication,VILLES.ville_longitude_deg, VILLES.ville_latitude_deg
,A.cache_nb_candidatures, A.statut, A.paye, A.date_paiement, A.date_creation
,D.region_nom

 FROM alt_annonce A
 LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
 LEFT JOIN alt_departement D ON A.num_departement = D.num

 WHERE 1 '
;

if ($filtreDomaineActivite != '') {
    $sqlAnnonces .=  ' AND A.domaine LIKE "'.$db->sql_escape($filtreDomaineActivite).'%"'; 
}

if ($filtreDomaineArtisanat != '') {
    $sqlAnnonces .=  ' AND A.domaine_artisanat LIKE "'.$db->sql_escape($filtreDomaineArtisanat).'%"'; 
}


if ($filtreVille != '') {
    $sqlAnnonces .=  ' AND ( A.ville LIKE "'.$db->sql_escape($ville).'%")'; 
}

if ($filtreTypeContrat != '')
    $sqlAnnonces .=  ' AND ( A.	contrat_type LIKE "%'.$db->sql_escape($filtreTypeContrat).'%")'; 

/*
if ($typeContratPro === '' || $typeContratApprentissage === '' ||  $typeContratStage === '') {
    $sqlAnnonces .=  ' AND A.contrat_type IN ("" ';
    
        if ($typeContratPro !== '') {
            $sqlAnnonces .=  ',"Contrat de professionnalisation"';
        }

        if ($typeContratApprentissage !== '') {
            $sqlAnnonces .=  ',"Contrat d\'apprentissage"';
        }

        if ($typeContratStage !== '') {
            $sqlAnnonces .=  ',"Stage"';
        }

    $sqlAnnonces .= ')';

}
*/

if ($filtreRef != '') 
    $sqlAnnonces .=  ' AND ( A.ref LIKE "'.$db->sql_escape($filtreRef).'%")'; 

if ($filtreTitre != '') 
    $sqlAnnonces .=  ' AND ( A.titre LIKE "%'.$db->sql_escape($filtreTitre).'%")'; 

if ($filtreStatut != '') 
    $sqlAnnonces .=  ' AND ( A.statut LIKE "%'.$db->sql_escape($filtreStatut).'%")'; 

if ($filtreRegion != '') 
    $sqlAnnonces .=  ' AND ( A.region_nom LIKE "%'.$db->sql_escape($filtreRegion).'%")'; 

if ($filtreEntreprise != '') 
    $sqlAnnonces .=  ' AND ( A.client_nom LIKE "%'.$db->sql_escape($filtreEntreprise).'%")'; 
 
if ($filtreContact != '') 
    $sqlAnnonces .=  ' AND ( A.client_contact LIKE "%'.$db->sql_escape($filtreContact).'%")'; 
 
if ($filtrePaye != '') 
$sqlAnnonces .=  ' AND ( A.paye LIKE "'.$db->sql_escape($filtrePaye).'%")'; 



    

 
if ($annonceId != '') {
    $sqlAnnonces .=  ' AND A.id = '.$annonceId;
}

// $sqlAnnonces .=  ' AND A.statut = "Active"';

$sqlAnnonces .= ' GROUP BY A.id ORDER BY A.id DESC LIMIT 100 ';


$result = $db->sql_query($sqlAnnonces);


while ($rowAnnonce = $db->sql_fetchrow($result)) {

    
    if ($rowAnnonce['statut'] === 'Active') {
        $statut_color = 'green';
    } else if ($rowAnnonce['statut'] === 'Supprimée') {
        $statut_color = 'grey';
    } else if ($rowAnnonce['statut'] === 'Désactivée') {
        $statut_color = 'red';
    } else {
        $statut_color = 'black';
    }

    $template->assign_block_vars('annonces', array(
        'id'            => $rowAnnonce['id'],
        'ref'			=> $rowAnnonce['ref'] ,
        'titre'			=> $rowAnnonce['titre'] ,
        'titre_court'	=> substr($rowAnnonce['titre'],0, 110),
        'region'			=> $rowAnnonce['region_nom'] ,
        'ville'			=> $rowAnnonce['ville'] ,
        'contrat_type'	=> $rowAnnonce['contrat_type'],
        'description_court' => addslashes(substr($rowAnnonce['description'],0, 200) . "..."),
        'description'   => addslashes($rowAnnonce['description']),
        'domaine'       => $rowAnnonce['domaine'],
        'region_nom'    => $rowAnnonce['region_nom'],
        'client_nom'    => $rowAnnonce['client_nom'],
        'client_contact'    => $rowAnnonce['client_contact'],
        'cache_nb_candidatures'    => $rowAnnonce['cache_nb_candidatures'],

        'statut'    => $rowAnnonce['statut'],
        'statut_color' => $statut_color,
        'date_creation'    => date("d/m/Y", strtotime($rowAnnonce['date_creation'])),
        'paye'    => $rowAnnonce['paye'] === 'true' ? 'Oui' : 'Non',
        'date_paiement'    => date("d/m/Y", strtotime($rowAnnonce['date_paiement'])),
        
        'domaine_artisanat' => ($rowAnnonce['domaine_artisanat'] != '') ? '('.$rowAnnonce['domaine_artisanat'].')' : '',
        'date_publication'    =>  date("d/m/Y", strtotime($rowAnnonce['date_publication'])),
        'lien_annonce'  => append_sid($phpbb_root_path ."annonce.$phpEx?id=".$rowAnnonce['id'], ''),
        'date_debut' => $rowAnnonce['date_de_debut'].' '.$rowAnnonce['debut_mois'].' '.$rowAnnonce['debut_annee'],
        'duree' => ($rowAnnonce['duree_nombre'] != 0) ?  $rowAnnonce['duree_nombre'].' '.$rowAnnonce['duree_type'] : $rowAnnonce['duree']
    ));

}

$template->assign_vars(array(
    'LIEN_CREATION_ANNONCE_POUR_COMPTE' => append_sid($phpbb_root_path ."annonce.$phpEx", ''),
    'LIEN_POSTULER_AVEC_LE_CANDIDAT' => append_sid($phpbb_root_path ."admin-annonces.$phpEx", ''),
    'LIEN_FILTRE_CANDIDAT' => append_sid($phpbb_root_path ."admin-annonces.$phpEx", ''),
    'MESSAGE' => $message
));


$template->assign_vars(array(
    'filtreRef' => $filtreRef,
    'filtreTitre' => $filtreTitre, 
    'filtreStatut' => $filtreStatut,
    'filtreTypeContrat' => $filtreTypeContrat,
    'filtreVille' => $filtreVille, 

    'filtreDomaineActivite' => $filtreDomaineActivite,
    'filtreDomaineActiviteArtisanat' => $filtreDomaineActiviteArtisanat,
    'filtreRegion' => $filtreRegion, 
    'filtreEntreprise' => $filtreEntreprise,
    'filtreContact' => $filtreContact,
    'filtrePaye' => $filtrePaye,

    'FILTRE_CANDIDAT' => $filtreCandidat
));



$template->set_filenames(array(
    'body' => 'alt_admin_annonces.html')
);

page_footer();
 