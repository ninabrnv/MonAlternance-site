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


$page_title = "Administration - Candidatures";




$action = request_var('action', '', true);
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




// Output page
page_header($page_title, true);


// selection des annonces
$sqlAnnonces = 'SELECT A.id, A.ref,A.titre
,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description
,A.date_de_debut, A.debut_mois, A.debut_annee
,A.duree, A.duree_nombre, A.duree_type
,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.date_publication,VILLES.ville_longitude_deg, VILLES.ville_latitude_deg
,A.cache_nb_candidatures, A.statut
,D.region_nom
,P.email as "candidat_email", P.nom as "candidat_nom", P.prenom as "candidat_prenom"
,AC.date as "candidature_date", AC.commentaire as "candidature_commentaire", AC.statut as "candidature_statut"

 FROM alt_annonce A
 INNER JOIN alt_annonce_candidat AC ON A.id = AC.annonce_id
 INNER JOIN alt_profil P ON AC.user_id = P.user_id
 LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
 LEFT JOIN alt_departement D ON A.num_departement = D.num

 WHERE 1 '
;

if ($domaine != '') {
    $sqlAnnonces .=  ' AND A.domaine LIKE "'.$db->sql_escape($domaine).'%"'; 
}

if ($domaineArtisanat != '') {
    $sqlAnnonces .=  ' AND A.domaine_artisanat LIKE "'.$db->sql_escape($domaineArtisanat).'%"'; 
}


if ($ville1 != '') {
    $sqlAnnonces .=  ' AND ( A.ville LIKE "'.$db->sql_escape($ville1).'%")'; 
}

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

if ($annonceId != '') {
    $sqlAnnonces .=  ' AND A.id = '.$annonceId;
}



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





// $sqlAnnonces .=  ' AND A.statut = "Active"';

$sqlAnnonces .= ' GROUP BY AC.id ORDER BY AC.id DESC ';


$result = $db->sql_query($sqlAnnonces);


while ($rowCandidature = $db->sql_fetchrow($result)) {

    $template->assign_block_vars('candidatures', array(
        'id'            => $rowCandidature['id'],
        'ref'			=> $rowCandidature['ref'] ,
        'titre'			=> $rowCandidature['titre'] ,
        'titre_court'	=> substr($rowCandidature['titre'],0, 110),
        'region'			=> $rowCandidature['region_nom'] ,
        'ville'			=> $rowCandidature['ville'] ,
        'contrat_type'	=> $rowCandidature['contrat_type'],
        'description_court' => substr($rowCandidature['description'],0, 200) . "...",
        'description'   => $rowCandidature['description'],
        'domaine'       => $rowCandidature['domaine'],
        'region_nom'    => $rowCandidature['region_nom'],
        'client_nom'    => $rowCandidature['client_nom'],
        'client_contact'    => $rowCandidature['client_contact'],
        'cache_nb_candidatures'    => $rowCandidature['cache_nb_candidatures'],

        'statut'    => $rowCandidature['statut'],
        'date_creation'    => $rowCandidature['date_creation'],
        'date_publication'    => $rowCandidature['date_publication'],
        'paye'    => $rowCandidature['paye'],
        'date_paiement'    => $rowCandidature['date_paiement'],
        
        'domaine_artisanat' => ($rowCandidature['domaine_artisanat'] != '') ? '('.$rowCandidature['domaine_artisanat'].')' : '',
        'date_publication'    =>  date("d/m/Y", strtotime($rowCandidature['date_publication'])),
        'lien_annonce'  => append_sid($phpbb_root_path ."annonces.$phpEx?id=".$rowCandidature['id'], ''),
        'date_debut' => $rowCandidature['date_de_debut'].' '.$rowCandidature['debut_mois'].' '.$rowCandidature['debut_annee'],
        'duree' => ($rowCandidature['duree_nombre'] != 0) ?  $rowCandidature['duree_nombre'].' '.$rowCandidature['duree_type'] : $rowCandidature['duree'],

        'candidat_email' => $rowCandidature['candidat_email'],
        'candidat_nom' => $rowCandidature['candidat_nom'],
        'candidat_prenom' => $rowCandidature['candidat_prenom'],
        'candidature_date' => $rowCandidature['candidature_date'],
        'candidature_commentaire' => $rowCandidature['candidature_commentaire'],
        'candidature_statut' => $rowCandidature['candidature_statut']

     
    ));

}



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
    'filtrePaye' => $filtrePaye
));




$template->set_filenames(array(
    'body' => 'alt_admin_candidatures.html')
);

page_footer();
 