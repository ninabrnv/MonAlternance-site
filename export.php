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

if (!$user->data['is_registered']) {
	// si pas connecté
    redirect(append_sid($phpbb_root_path . "ucp.$phpEx?mode=login"));
    die();
}



$action = request_var('action', '', true);
$nomFichier = '';

if ($action == 'cv') {

/*
   'id'    => $row['id'],
                'prenom' => $row['prenom'],
                'nom' => $row['nom'],
                'email' => $row['email'],
                'tel_mobile' => $row['tel_mobile'],
                'age' => $row['date_naissance'],
                'ville' => $row['ville'],
                'ville_proche' => $row['ville_proche'],
                'region' => $row['region'],
                'domaine_principal' => $row['domaine_principal'],
                'domaine_artisanat' => $row['domaine_artisanat'],
                'niveau_etude' => $row['niveau_etude'],
                'derniere_ecole' => $row['derniere_ecole'],
                'domaine_artisanat' => $row['domaine_artisanat'],
                'domaine_artisanat' => $row['domaine_artisanat'],
                'cv_href' => ($row['cv_fichier'] != '') ? './cv/'.$row['cv_fichier'] : '#',
                'cv_nom' => ($row['cv_fichier'] != '') ? 'Consulter le CV' : '',
                'date_creation' =>  date("d/m/Y", strtotime($row['date_creation']))
*/

    $sql = 'SELECT nom, prenom, email, tel_mobile, date_naissance as age, ville, region, domaine_principal, 
    domaine_artisanat, niveau_etude, derniere_ecole, date_creation, concat("http://mon-alternance.fr/cv/",cv_fichier) as cv  FROM alt_profil WHERE 1 AND type_compte = "candidat" ORDER BY nom, prenom';
    $nomFichier = 'cv';
} else {
    die('Erreur : Action inconnue');
}



 function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = $nomFichier."_liste_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel; charset=UTF-8");



  $result = $db->sql_query($sql);


  while ($row = $db->sql_fetchrow($result)) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo utf8_decode(implode("\t", array_values($row))) . "\r\n";
  }



?>