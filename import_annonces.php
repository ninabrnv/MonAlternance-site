<?php
 
 set_time_limit(600);

 define('IN_PHPBB', true);
 $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
 $phpEx = substr(strrchr(__FILE__, '.'), 1);
 include($phpbb_root_path . 'common.' . $phpEx);


 $fichier = request_var('fichier', '', true);

if ($fichier === '') {
    die('Fichier non déterminé pour import.');
}

 $inputFileName = 'files/' . $fichier;


/** Set default timezone (will throw a notice otherwise) */
date_default_timezone_set('Europe/Paris');
include './phpexcel/Classes/PHPExcel/IOFactory.php';
// $inputFileName = 'files/20171219_annonces_import.xlsx';
 
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch (Exception $e) {
    die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
    . '": ' . $e->getMessage());
}
//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();
    
//echo "<br>highestRow  : " . $highestRow  ;  
//echo "<br>highestColumn  : " . $highestColumn  ;  

try {

    //  Loop through each row of the worksheet in turn
    for ($row = 2; $row <= $highestRow; $row++) {
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
    
        //echo "<br>Traitement de la ligne  : " . $row ;  

        /*
        foreach($rowData[0] as $k=>$v) {
            echo "Row: ".$row."- Col: ".($k+1)." = ".$v."<br />";
        }
        */
        
        /*
        echo "<br>Ref  : " . $rowData[0][0] ."<br />" ;  
        echo "domaine  : " . $rowData[0][1] ."<br />" ."<br />" ;  
        echo "domaine artisanat  : " . $rowData[0][2] ."<br />" ."<br />" ;  
        echo "titre  : " . $rowData[0][3] ."<br />" ."<br />" ;  
        echo "contrat type  : " . $rowData[0][4] ."<br />" ."<br />" ;  
        echo "client type  : " . $rowData[0][5] ."<br />" ."<br />" ;  
        echo "num dep  : " . $rowData[0][6] ."<br />" ."<br />" ;  
        echo "region num  : " . $rowData[0][7] ."<br />" ."<br />" ;  
        echo "region nom  : " . $rowData[0][8] ."<br />" ."<br />" ;  
        echo "ville  : " . $rowData[0][9] ."<br />" ."<br />" ;  
        echo "description  : " . $rowData[0][10] ."<br />" ."<br />" ;  
        echo "date de debut  : " . $rowData[0][11] ."<br />" ."<br />" ;  
        */


        // insert "annonces" into alt_annonces
        // si réf et titre
        if ((intval($rowData[0][0]) != 0) && ($rowData[0][3] != '')) {



            $sqlAnnonce = 'REPLACE INTO alt_annonce (
                ref
                ,domaine
                ,domaine_artisanat
                ,titre
                ,contrat_type
                ,client_type
                ,num_departement
                ,region_num
                ,region_nom
                ,ville
                ,description
                ,date_de_debut
                ,duree
                ,client_nom
                ,client_contact
                ,client_tel
                ,statut
                ,date_creation
                ,date_publication
                ,paye
                ,date_paiement
                )	
                VALUES ("' . $db->sql_escape($rowData[0][0]) .'"'       // ref
                    .',"'. $db->sql_escape($rowData[0][1]).'"'          // domaine
                    .',"'. $db->sql_escape($rowData[0][2]).'"'          // domaine artisanat
                    .',"'. $db->sql_escape($rowData[0][3]).'"'          // titre
                    .',"'. $db->sql_escape($rowData[0][4]).'"'          // contrat type
                    .',"'. $db->sql_escape($rowData[0][5]).'"'          // client type
                    .',"'. $db->sql_escape($rowData[0][6]).'"'          // num dep
                    .',"'. $db->sql_escape($rowData[0][7]).'"'          // region num
                    .',"'. $db->sql_escape($rowData[0][8]).'"'          // region nom
                    .',"'. $db->sql_escape($rowData[0][9]).'"'          // ville
                    .',"'. $db->sql_escape($rowData[0][10]).'"'          // description
                    .',"'. $db->sql_escape($rowData[0][11]).'"'          // date_de_debut
                    .',"'. $db->sql_escape($rowData[0][12]).'"'
                    .',"'. $db->sql_escape($rowData[0][13]).'"'
                    .',"'. $db->sql_escape($rowData[0][14]).'"'
                    .',"'. $db->sql_escape($rowData[0][15]).'"'
                    .',"Active"'
                    .',NOW()'
                    .',NOW()'
                    .',"true"'
                    .',NOW()'
                . ')'
                ;

            $result = $db->sql_query($sqlAnnonce);
            echo "<br />Import de l'annonce : " . $rowData[0][0] . " : ". $rowData[0][3];
        }
    }

} catch (Exception $e) {
    die('Error import "' . pathinfo($inputFileName, PATHINFO_BASENAME)
    . '": ' . $e->getMessage());
}

echo "<br /><br />FIN IMPORT !! :)";


?>