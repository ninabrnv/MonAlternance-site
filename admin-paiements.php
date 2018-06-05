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
    echo "non authorisé";
    die;
}


$page_title = "Administration - Paiements";




$action = request_var('action', '', true);
$filtreEntreprise = request_var('filtreEntreprise', '', true);
$filtreEmail = request_var('filtreEmail', '', true);
$filtreTel = request_var('filtreTel', '', true);
$filtreSiret = request_var('filtreSiret', '', true);
$filtreStatut = request_var('filtreStatut', '', true);
$filtreMontant = request_var('filtreMontant', '', true);

// Output page
page_header($page_title, true);


// selection des comptes entreprises
$sql = 'SELECT t.id, t.email, t.transaction_date, t.montant, t.statut, t.annonce_id, t.date_paiement, t.montant_reelement_paye
 , P.societe_nom, P.societe_siret, P.societe_tel, P.societe_siret
 , A.ville
 FROM alt_transaction t
 LEFT JOIN alt_profil P ON t.user_id = P.user_id
 LEFT JOIN alt_annonce A ON t.annonce_id = A.id

 WHERE 1 ';

if ($filtreEmail != '')
$sql .= ' AND t.email LIKE "'.$filtreEmail.'%"';

if ($filtreTel != '')
$sql .= ' AND P.societe_tel LIKE "'.$filtreTel.'%"';

if ($filtreEntreprise != '')
$sql .= ' AND P.societe_nom LIKE "%'.$filtreEntreprise.'%"';

if ($filtreSiret != '')
$sql .= ' AND P.societe_siret LIKE "'.$filtreSiret.'%"';

if ($filtreStatut != '')
$sql .= ' AND t.statut LIKE "'.$filtreStatut.'%"';

if ($filtreMontant != '')
$sql .= ' AND t.montant LIKE "'.$filtreMontant.'%"';


$sql .= ' ORDER BY t.id DESC LIMIT 200'
;
$result = $db->sql_query($sql);


while ($row = $db->sql_fetchrow($result)) {

    $template->assign_block_vars('paiements', array(
        'id'    => $row['id'],
        'transaction_date' => $row['transaction_date'],
        'montant' => $row['montant'],
        'email' => $row['email'],
        'statut' => $row['statut'],

        'societe_nom' => $row['societe_nom'],
        'societe_siret' => $row['societe_siret'],
        'societe_tel' => $row['societe_tel'],

        'annonce_id' => $row['annonce_id'],
        'lien' => append_sid($phpbb_root_path ."annonces.$phpEx?id=".$row['annonce_id']."&ville1=".$row['ville'], ''),
        'date_paiement' => $row['date_paiement'],
        'montant_reelement_paye' => $row['montant_reelement_paye'],
      
    ));

}

$template->assign_vars(array(
    'filtreEmail' => $filtreEmail,
    'filtreTel' => $filtreTel,
    'filtreEntreprise' => $filtreEntreprise,
    'filtreStatut' => $filtreStatut, 
    'filtreSiret' => $filtreSiret,
    'filtreMontant' => $filtreMontant
));


$template->set_filenames(array(
    'body' => 'alt_admin_paiements.html')
);

page_footer();
 