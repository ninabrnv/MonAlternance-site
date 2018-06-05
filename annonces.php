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

$page_title = "Les annonces en alternance, stages";

//$userProfilAlt = alt_profil_get();

// Output page
page_header($page_title, true);

$domaine = request_var('domaine', '', true);
$domaineArtisanat = request_var('domaineArtisanat', '', true);
$ville1 = request_var('ville1', '', true);
$ville2 = request_var('ville2', '', true);
$ville3 = request_var('ville3', '', true);
$region = request_var('region', '', true);
$region_nom = '';


$annonceId = intval(request_var('id', '', true));

// HAck temporaire
if ($domaine == '' && $ville1 == '' && $annonceId == '') {
    $erreurAucunCritere = true;
}

// Hack : remplace "espace" par des "-" pour les villes.
// exemple : AIX EN PROVENCE --> AIX-EN-PROVENCE
// $ville1 = str_replace(' ','-', $ville1);
// $ville2 = str_replace(' ','-', $ville2);
// $ville3 = str_replace(' ','-', $ville3);

// exemple : AIX EN PROVENCE --> AIX-EN-PROVENCE
//$ville1 = str_replace('AIX EN PROVENCE','AIX-EN-PROVENCE', strtoupper($ville1));
//$ville2 = str_replace('AIX EN PROVENCE','AIX-EN-PROVENCE', strtoupper($ville2));
//$ville3 = str_replace('AIX EN PROVENCE','AIX-EN-PROVENCE', strtoupper($ville3));

// HAck pour recherhce des nom de villes sans tirets et en minuscule
$ville1_simple = str_replace('-',' ', strtolower($ville1));
$ville2_simple = str_replace('-',' ', strtolower($ville2));
$ville3_simple = str_replace('-',' ', strtolower($ville3));




$domaine = strtoupper(htmlspecialchars(addslashes(trim($domaine))));
$domaineArtisanat = strtoupper(htmlspecialchars(addslashes(trim($domaineArtisanat))));

$typeContratPro = request_var('typeContratPro', '', true);
$typeContratApprentissage = request_var('typeContratApprentissage', '', true);
$typeContratStage = request_var('typeContratStage', '', true);

if ($typeContratPro === '' && $typeContratApprentissage === '' && $typeContratStage === '') {
    $typeContratPro = 'Pro';
    $typeContratApprentissage = 'Apprentissage';
    $typeContratStage = 'Stage';
}



// Récupération des infos profils
$altProfil = alt_profil_get();

$template->assign_vars(array(
    'CV'		=> $altProfil['cv_fichier'],
    'TYPE_COMPTE_RECRUTEUR' => ($altProfil['type_compte'] === 'entreprise') ? 'True' : '',
    'TYPE_COMPTE_CANDIDAT' => ($altProfil['type_compte'] === 'candidat') ? 'True' : ''
));

///
// Régions
/// 

/*
$sqlRegions = 'SELECT code, nom FROM alt_region ';
$result = $db->sql_query($sqlRegions);

while ($row = $db->sql_fetchrow($result)) {
 
    if ($row['code'] === $region) {
        $selected = 'SELECTED';
        $region_nom = $row['nom'];
    } else {
        $selected = '';
    }
 
    $template->assign_block_vars('regions', array(
        'CODE' => $row['code'],
        'NOM' => $row['nom'],
        'SELECTED' => $selected
    ));
}
*/


///
// Villes disponibles
/// 
// $sqlVillesDisponibles = 'SELECT ville_nom, ville_nom_reel, ville_code_postal, ville_code_commune FROM alt_villes_france ORDER BY ville_nom';
// $result = $db->sql_query($sqlVillesDisponibles);

// while ($row = $db->sql_fetchrow($result)) {
 
 
//     $template->assign_block_vars('villesDisponibles', array(
// 		'VILLE_NOM' => $row['ville_nom'],
// 		'VILLE_LABEL' => ucfirst(strtolower($row['ville_nom'])) . ' ('. substr($row['ville_code_postal'],0,5) .')',
// 		'VILLE_CODE_POSTAL' => $row['ville_code_postal']
        
//     ));
// }




///
// Annonces : Recherche par 3 requetes et non plus sur une seule, pour pouvoir plus facilement trier les résutlats
///
$annonces = array();


//
// Recherche ville 1
//
$sqlAnnonces = 'SELECT A.id, A.ref,A.titre
,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description
,A.date_de_debut, A.debut_mois, A.debut_annee
,A.duree, A.duree_nombre, A.duree_type
,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.date_publication,VILLES.ville_longitude_deg, VILLES.ville_latitude_deg
,A.region_nom as "annonce_region_nom"
,D.region_nom
,AC.id as "id_candidature"
,AF.id as "id_favoris"
 FROM alt_annonce A
 LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
 LEFT JOIN alt_departement D ON A.num_departement = D.num
 LEFT JOIN alt_annonce_candidat AC ON (A.id = AC.annonce_id and AC.user_id = '.intval($user->data['user_id']).')
 LEFT JOIN alt_annonce_favoris AF ON (A.id = AF.annonce_id and AF.user_id = '.intval($user->data['user_id']).')
 WHERE 1 '
;

if ($domaine != '') {
    $sqlAnnonces .=  ' AND A.domaine LIKE "'.$db->sql_escape($domaine).'%"'; 
}

if ($domaineArtisanat != '') {
    $sqlAnnonces .=  ' AND A.domaine_artisanat LIKE "'.$db->sql_escape($domaineArtisanat).'%"'; 
}


if ($ville1 != '') {
    $sqlAnnonces .=  ' AND ( VILLES.ville_nom_simple LIKE "'.$db->sql_escape($ville1_simple).'%")'; 
}

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

if ($annonceId != 0) {
    $sqlAnnonces .=  ' AND A.id = '.$annonceId;
}

$sqlAnnonces .=  ' AND A.statut = "Active"';

$sqlAnnonces .= ' GROUP BY A.id ORDER BY A.id DESC LIMIT 1000 ';



 //echo "<br><br><br><br><br><br><br>sql annonces =" . $sqlAnnonces;


if (($erreurAucunCritere === true) && ($annonceId === 0)) {
    $result = null;

    $erreurAucunCritere = true;     

} else {
    $result = $db->sql_query($sqlAnnonces);
}   


// $result = $db->sql_query($sqlAnnonces);



$nbAnnonces = 0;

$indiceVille = 0;   // augmente à chaque nouvelle ville
$precedenteVille = '';


// print('<br><br><br><br><br><br><br>');

while ($row = $db->sql_fetchrow($result))
{
    $ville = strtoupper($row['ville']);

    // Hack qui permet de créer des onglets "régions" pour ranger les annonces si recherche France entière
    if ($ville1 === '') {
        $ville = $row['region_nom']; 
    }

    if ($ville != '') {

        // si c est une nouvelle ville
        if (($ville != $precedenteVille) && ($precedenteVille != '')) {
            $indiceVille++;
            $annonces[$ville] = array('ville' => $ville
                                    , 'annonces' => array()
                                    );
        }

        $annonces[$ville]['annonces'][] = $row;
        
        $precedenteVille = $ville;
        $nbAnnonces++;
    }
}



//
// Recherche ville 2
//
if ($ville2 !== '') {
    $sqlAnnonces = 'SELECT A.id, A.ref,A.titre
    ,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description
    ,A.date_de_debut, A.debut_mois, A.debut_annee
    ,A.duree, A.duree_nombre, A.duree_type
    ,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.poste_le, VILLES.ville_longitude_deg, VILLES.ville_latitude_deg
    ,A.region_nom as "annonce_region_nom"
    ,D.region_nom 
    ,AC.id as "id_candidature"
    ,AF.id as "id_favoris"
    FROM alt_annonce A
    LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
    LEFT JOIN alt_departement D ON A.num_departement = D.num
    LEFT JOIN alt_annonce_candidat AC ON (A.id = AC.annonce_id and AC.user_id = '.intval($user->data['user_id']).')
    LEFT JOIN alt_annonce_favoris AF ON (A.id = AF.annonce_id and AF.user_id = '.intval($user->data['user_id']).')
    WHERE 1 '
    ;

    if ($domaine != '') {
        $sqlAnnonces .=  ' AND A.domaine LIKE "'.$db->sql_escape($domaine).'%"'; 
    }

    if ($domaineArtisanat != '') {
        $sqlAnnonces .=  ' AND A.domaine_artisanat LIKE "'.$db->sql_escape($domaineArtisanat).'%"'; 
    }


 
    $sqlAnnonces .=  ' AND ( VILLES.ville_nom_simple LIKE "'.$db->sql_escape($ville2_simple).'%")'; 

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

    $sqlAnnonces .=  ' AND A.statut = "Active"';

    // echo "<br><br><br><br><br><br><br>sql =" . $sqlAnnonces;
    $sqlAnnonces .= ' GROUP BY A.id ORDER BY A.id DESC LIMIT 1000';

    $result = $db->sql_query($sqlAnnonces);
        



    $indiceVille = 0;   // augmente à chaque nouvelle ville
    $precedenteVille = '';

    // print('<br><br><br><br><br><br><br>');

    while ($row = $db->sql_fetchrow($result))
    {
        $ville = strtoupper($row['ville']);
        if ($ville != '') {

            // si c est une nouvelle ville
            if (($ville != $precedenteVille) && ($precedenteVille != '')) {
                $indiceVille++;
                $annonces[$ville] = array('ville' => $ville
                                        , 'annonces' => array()
                                        );
            }

            $annonces[$ville]['annonces'][] = $row;
            
            $precedenteVille = $ville;
            $nbAnnonces++;
        }
    }

} // ville2 !== ''



//
// Recherche ville 3
//
if ($ville3 !== '') {
    $sqlAnnonces = 'SELECT A.id, A.ref,A.titre
    ,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description
    ,A.date_de_debut, A.debut_mois, A.debut_annee
    ,A.duree, A.duree_nombre, A.duree_type
    ,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.date_publication,VILLES.ville_longitude_deg, VILLES.ville_latitude_deg
    ,A.region_nom as "annonce_region_nom"
    ,D.region_nom 
    ,AC.id as "id_candidature"
    ,AF.id as "id_favoris"
    FROM alt_annonce A
    LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
    LEFT JOIN alt_departement D ON A.num_departement = D.num
    LEFT JOIN alt_annonce_candidat AC ON (A.id = AC.annonce_id and AC.user_id = '.intval($user->data['user_id']).')
    LEFT JOIN alt_annonce_favoris AF ON (A.id = AF.annonce_id and AF.user_id = '.intval($user->data['user_id']).')
    WHERE 1 '
    ;

    if ($domaine != '') {
        $sqlAnnonces .=  ' AND A.domaine LIKE "'.$db->sql_escape($domaine).'%"'; 
    }

    if ($domaineArtisanat != '') {
        $sqlAnnonces .=  ' AND A.domaine_artisanat LIKE "'.$db->sql_escape($domaineArtisanat).'%"'; 
    }


 
    $sqlAnnonces .=  ' AND ( VILLES.ville_nom_simple LIKE "'.$db->sql_escape($ville3_simple).'%")'; 

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

    $sqlAnnonces .=  ' AND A.statut = "Active"';

    $sqlAnnonces .= ' GROUP BY A.id ORDER BY A.id DESC LIMIT 1000 ';

    // echo "<br><br><br><br><br><br><br>sql =" . $sqlAnnonces;


    $result = $db->sql_query($sqlAnnonces);
        



    $indiceVille = 0;   // augmente à chaque nouvelle ville
    $precedenteVille = '';

    // print('<br><br><br><br><br><br><br>');

    while ($row = $db->sql_fetchrow($result))
    {
        $ville = strtoupper($row['ville']);
        if ($ville != '') {

            // si c est une nouvelle ville
            if (($ville != $precedenteVille) && ($precedenteVille != '')) {
                $indiceVille++;
                $annonces[$ville] = array('ville' => $ville
                                        , 'annonces' => array()
                                        );
            }

            $annonces[$ville]['annonces'][] = $row;
            
            $precedenteVille = $ville;
            $nbAnnonces++;
        }
    }

} // ville3 !== ''


///
// Cas particulier : Si aucune annonce trouvé, on va rechercher les annonces
// du département
//

if (($nbAnnonces === 0) && ($ville1 != '')) {

    $rechercheParDepartemant = true;    // indique comme quoi on n'a pas trouvé d'offre, on élargi la recherche par département

    $numDepartement = 0;    // numéro du département où se trouve la ville1 recherchée

    $sqlDep = 'SELECT VILLES.ville_departement, DEP.nom as "departement_nom"
                FROM alt_villes_france VILLES 
                INNER JOIN alt_departement DEP ON VILLES.ville_departement = DEP.num
                WHERE VILLES.ville_nom LIKE "'.$db->sql_escape($ville1).'%"

    
    ';
    $resultDep = $db->sql_query($sqlDep);

    // echo "<br><br><br><br><br><br><br><br><br>sqlDep =" . $sqlDep;

    if ($rowDep = $db->sql_fetchrow($resultDep)) {
        $departementNum = intval($rowDep['ville_departement']);
        $departementNom = $rowDep['departement_nom'];
    }

    if ($departementNum != 0) {

        $sqlAnnonces = 'SELECT A.id, A.ref,A.titre
        ,A.contrat_type,A.domaine, A.domaine_artisanat,A.num_departement,A.ville,A.description
        ,A.date_de_debut, A.debut_mois, A.debut_annee
        ,A.duree, A.duree_nombre, A.duree_type
        ,A.client_nom,A.client_type, A.client_contact,A.client_tel,A.date_publication,VILLES.ville_longitude_deg, VILLES.ville_latitude_deg 
        ,A.region_nom as "annonce_region_nom"
        ,D.region_nom, D.nom as "departemant_nom" 
        ,AC.id as "id_candidature"
        ,AF.id as "id_favoris"
        FROM alt_annonce A
        LEFT JOIN alt_villes_france VILLES ON A.ville = VILLES.ville_nom
        LEFT JOIN alt_departement D ON A.num_departement = D.num
        LEFT JOIN alt_annonce_candidat AC ON (A.id = AC.annonce_id and AC.user_id = '.intval($user->data['user_id']).')
        LEFT JOIN alt_annonce_favoris AF ON (A.id = AF.annonce_id and AF.user_id = '.intval($user->data['user_id']).')
        WHERE 1 '
        ;
        
        if ($domaine != '') {
            $sqlAnnonces .=  ' AND A.domaine LIKE "'.$db->sql_escape($domaine).'%"'; 
        }
        
        if ($domaineArtisanat != '') {
            $sqlAnnonces .=  ' AND A.domaine_artisanat LIKE "'.$db->sql_escape($domaineArtisanat).'%"'; 
        }
        
        
        // Le département !
        $sqlAnnonces .=  ' AND ( A.num_departement = '.intval($departementNum).')'; 

        
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

        $sqlAnnonces .=  ' AND A.statut = "Active"';

        $sqlAnnonces .= ' GROUP BY A.id ORDER BY A.id DESC LIMIT 1000 ';

        // echo "<br><br><br><br><br><br><br><br>sql =" . $sqlAnnonces;
        
        

        $result = $db->sql_query($sqlAnnonces);
  
        $indiceVille = 0;   // augmente à chaque nouvelle ville
        $precedenteVille = '';
        
        
        // print('<br><br><br><br><br><br><br>');
        
        while ($row = $db->sql_fetchrow($result))
        {
            $ville = strtoupper($row['departemant_nom']);   // On regroupe par département : Bouches du rhone
            if ($ville != '') {
        
                // si c est une nouvelle ville
                if (($ville != $precedenteVille) && ($precedenteVille != '')) {
                    $indiceVille++;
                    $annonces[$ville] = array('ville' => $ville
                                            , 'annonces' => array()
                                            );
                }
        
                $annonces[$ville]['annonces'][] = $row;
                
                $precedenteVille = $ville;
                $nbAnnonces++;
            }
        }

    } // si numDep trouvé

} // fin recherche annonces dans département



//print('<br><br><br><br><br><br><br>');


// Affichage des onglets, un par ville :
$numOnglet = 0;
foreach ($annonces as $ville => $rowVille) {
    // Pour chaque villes
    
    // Nb d'annonce pour la ville :
    $nbAnnoncesDeLaVille = 0;
    if (is_array($rowVille['annonces'])) {
        $nbAnnoncesDeLaVille =  count($rowVille['annonces']);
    }
    
    $template->assign_block_vars('villes', array(
        'VILLE' => $ville,  //. ' ('. $nbAnnoncesDeLaVille .')'
        'NUM_ONGLET' => $numOnglet,
        'ACTIVE' => ($numOnglet == 0) ? 'active' : '',
        'SHOW' => ($numOnglet == 0) ? 'show' : '',
    ));

    if (is_array( $rowVille['annonces'])) {
        foreach ($rowVille['annonces'] as $i => $rowAnnonce ) {
            
           // echo "<br><br><br><br><br><br><br><br><br>  cv = ".$altProfil['cv_fichier'];

           
            $region_nom = (trim($rowAnnonce['annonce_region_nom']) != '' ? $rowAnnonce['annonce_region_nom'] : $rowAnnonce['region_nom']);

            //
            // L'annonce 
            //
            $template->assign_block_vars('villes.annonce', array(
                'ID'            => $rowAnnonce['id'],
                'REF'			=> $rowAnnonce['ref'] ,
                'TITRE'			=> $rowAnnonce['titre'] ,
                'TITRE_COURT'	=> substr($rowAnnonce['titre'],0, 115),
                'LIEU'			=> $rowAnnonce['ville'] . ', '.$region_nom,
                'TYPE_CONTRAT'	=> $rowAnnonce['contrat_type'],
                'DESCRIPTION_COURT' => substr($rowAnnonce['description'],0, 210) . "...",
                'DESCRIPTION'   => $rowAnnonce['description'],
                'DOMAINE'       => $rowAnnonce['domaine'],
                'DEJA_POSTULER' => (intval($rowAnnonce['id_candidature']) != 0) ? true : false,
                'DEJA_FAVORIS' => (intval($rowAnnonce['id_favoris']) != 0) ? true : false,
                'LIEN_FAVORIS'  => 'javascript:alert(\'Annonce sauvegardée dans mes favoris\');',
                'DOMAINE_ARTISANAT' => ($rowAnnonce['domaine_artisanat'] != '') ? '('.$rowAnnonce['domaine_artisanat'].')' : '',
                'PUBLIEE_LE'    => 'Publié le ' . date("d/m/Y", strtotime($rowAnnonce['date_publication'])),
                'LIEN_ANNONCE'  => append_sid($phpbb_root_path ."annonce.$phpEx", ''),
                'DATE_DE_DEBUT' => $rowAnnonce['date_de_debut'].' '.$rowAnnonce['debut_mois'].' '.$rowAnnonce['debut_annee'],
                'DUREE' => ($rowAnnonce['duree_nombre'] != 0) ?  $rowAnnonce['duree_nombre'].' '.$rowAnnonce['duree_type'] : $rowAnnonce['duree'],
                'LIEN_COMMENTAIRE_AVANT_POSTULER' => ($altProfil['cv_fichier'] != '') ? '#modalCommentaire'.$rowAnnonce['id'] : 'alert(\'Vous devez importer votre cv sur votre profil pour postuler à une annonce.\')'
            ));

            //
            // Le point sur la carte google maps
            //
            if (($rowAnnonce['ville_longitude_deg'] != '') && ($rowAnnonce['ville_latitude_deg'] != '') ) {
                $template->assign_block_vars('list_geoloc', array(
                    'LONG'            => $rowAnnonce['ville_longitude_deg'],
                    'LAT'            => $rowAnnonce['ville_latitude_deg']
                ));
            }

        }
    }

    $numOnglet++;
}


$resultats_recherche = ''; //init


if ($rechercheParDepartemant) {
    $resultats_recherche .= 'Aucune annonce trouvée pour les villes concernées. La recherche a été élargie au département.<br>';
}

$resultats_recherche .= '<b>'. $nbAnnonces . '</b> offre';
if ($nbAnnonces > 1) {
    $resultats_recherche .= 's';
}  

if ($domaine != '') {
    $resultats_recherche .= ' pour le domaine "<b>'.$domaine.'</b>"';     

    if ($domaineArtisanat != '') {
        $resultats_recherche .= ' ('.$domaineArtisanat.')';     
    }

} else {
    $resultats_recherche .= ' trouvée';
    if ($nbAnnonces > 1) {
        $resultats_recherche .= 's';
    }  
}

// Si recehrche par département, on l'indique
if ($rechercheParDepartemant) {

    $resultats_recherche .= ' pour le département "<b>' .$departementNom.'</b>"';    


} else {

    // Sinon, c'est par région ou par ville

    if ($region != "") {
        $resultats_recherche .= ' pour la région "<b>' .$region_nom.'</b>"';     
    }

    if ($ville1 != "") {
        $resultats_recherche .= ' pour les villes : "<b>' .$ville1;     

        if ($ville2 != "") {
            $resultats_recherche .= ', '.$ville2;     
        }

        if ($ville3 != "") {
            $resultats_recherche .= ', '.$ville3;     
        }

        $resultats_recherche .= '</b>"';
    }

}


if ($typeContratPro === '' && $typeContratApprentissage === '' && $typeContratStage === '') {
    $typeContratPro = 'Pro';
    $typeContratApprentissage = 'Apprentissage';
    $typeContratStage = 'Stage';
}

// Assign index specific vars
$template->assign_vars(array(
    'ALT_SCRIPT_PAGE' =>   '<script src="assets/javascript/alt_annonces.js"></script>',
    'U_ANNONCES' => append_sid($phpbb_root_path ."annonces.$phpEx", ''),
    'domaine' => $domaine,
    'domaineArtisanat' => $domaineArtisanat,
    'display_artisanat' => ( ($domaineArtisanat != '') || ($domaine == 'ARTISANAT')  ) ? '' : 'none',
    'ville1'=> $ville1,
    'ville2'=> $ville2,
    'ville3'=> $ville3,
    'erreurVille' => $erreurVille ? '&nbsp;&nbsp;<span style=\'color: red\'>Veuillez sélectionner une ville</span><br>' : '',
    'erreurAucunCritere' => $erreurAucunCritere ? '&nbsp;&nbsp;<span style=\'color: red\'>Veuillez sélectionner un critère</span><br>' : '',
    'display_ville2' => ($ville2 != '') ? '' : 'none',
    'display_ville3' => ($ville3 != '') ? '' : 'none',
    'display_ajouterVille' => ($ville3 != '') ? 'none' : '',
    'region' => $region,
    'region_nom' => $region_nom,
    'resultats_recherche' => $resultats_recherche,
    'affiche_carte' => ($nbAnnonces > 0),
    'CheckedTypeContratPro' => ($typeContratPro !== '') ? 'checked' : '',
    'CheckedTypeContratApprentissage' => ($typeContratApprentissage !== '') ? 'checked' : '',
    'CheckedTypeContratStage' => ($typeContratStage !== '') ? 'checked' : ''
));









$template->set_filenames(array(
	'body' => 'alt_annonces.html')
);

page_footer();
