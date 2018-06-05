<?php

class annonce {


    var $id;
    var $titre;
    var $date_creation;
    var $statut_structure;
    var $description;
    var $societe;
    var $adresse;
    var $adresse_cp;
    var $adresse_ville;
    var $region_nom;
    var $adresse_pays;
    var $contrat_type;
    var $domaine;
    var $domaineArtisanat;
    var $duree;
    var $duree_nombre;
    var $duree_type;
    var $date_de_debut;
    var $debut_mois;
    var $debut_annee;
    var $paye;
    var $date_paiement;
    var $proprietaire_user_id;
    var $client_contact;

    function __construct() {

    }


    function get($id) {
        global $db, $config, $user;

        $sql = 'SELECT * FROM alt_annonce WHERE id = '.$id;
        //echo "<br><br><br><br><br>sql = ".$sql;
        $result = $db-> sql_query($sql);

        if ($row = $db->sql_fetchrow($result)) {
            $this->id = $row['id'];
            $this->titre = $row['titre'];
            $this->date_creation = $row['date_creation'];
            $this->statut_structure = $row['client_type'];
            $this->description = $row['description'];
            $this->societe = $row['client_nom'];
            
            $this->adresse = $row['adresse'];
            $this->adresse_cp = $row['adresse_cp'];
            $this->adresse_ville = $row['ville'];
            $this->adresse_pays = $row['pays'];

            $this->region_nom = $row['region_nom'];

            $this->contrat_type = $row['contrat_type'];
            $this->domaine = $row['domaine'];
            $this->domaineArtisanat = $row['domaine_artisanat'];
            $this->duree = $row['duree'];
            $this->duree_nombre = $row['duree_nombre'];
            $this->duree_type = $row['duree_type'];
            $this->date_de_debut = $row['date_de_debut'];
            $this->debut_mois = $row['debut_mois'];
            $this->debut_annee = $row['debut_annee'];
            $this->date_publication = $row['date_publication'];
            $this->date_paiement = $row['date_paiement'];
            $this->proprietaire_user_id = $row['proprietaire_user_id'];
            $this->client_contact = $row['client_contact'];

            $this->paye = ($row['paye'] === 'true') ? true : false;
        
            return true;
        }
        return false;
    }

    function update() {
        global $db, $config, $user;

        //echo "<br><br><br><br><br>updateupdateupdate";
        //print_r($this);

        if (!$user->data['is_registered']) {
           echo "<br><br><br><br><br>erreur : vous devez etre connecté pour sauvegarder une annonce...";
           exit;
        }
        
        // insert
        // avant : statut : en création
        if ($this->id == null || $this->id === 0) {


            $proprietaire_user_id_annonce = $user->data['user_id'];
            if (intval($this->proprietaire_user_id) != 0) {
                $proprietaire_user_id_annonce = intval($this->proprietaire_user_id);
            }

            $sql = 'INSERT INTO alt_annonce (date_creation, proprietaire_user_id, statut) VALUES (NOW(),'.$proprietaire_user_id_annonce.', "")';
            $db-> sql_query($sql);
            //echo "<br><br><br><br><br>inseert annonce...";
            $this->id = $db->sql_nextid();

            // référence annonce  : exemple : a35535
            $sql = 'UPDATE alt_annonce SET ref = "a'.$this->id.'"  WHERE id = ' . $this->id;
            $db-> sql_query($sql);
        }


        // Update
        if ($this->id != 0) {

            /*
            if ($this->region_nom == '') {
                $sqlDep = 'SELECT VILLES.ville_departement, DEP.nom as "departement_nom", DEP.region_nom
                FROM alt_villes_france VILLES 
                INNER JOIN alt_departement DEP ON VILLES.ville_departement = DEP.num
                WHERE VILLES.ville_nom LIKE "'.$db->sql_escape($this->adresse_ville).'%"

                ';
                $resultDep = $db->sql_query($sqlDep);

                 echo "<br><br><br><br><br><br><br><br><br>sqlDep =" . $sqlDep;
                die;
                if ($rowDep = $db->sql_fetchrow($resultDep)) {
                    $this->region_nom = $rowDep['region_nom'];
                }
            }
            */


            $sql = 'UPDATE alt_annonce '
            . ' SET titre = "' . $db->sql_escape($this->titre).'"'

            . ' , client_type = "'. $db->sql_escape($this->statut_structure).'"'
            . ' , description = "'. $db->sql_escape($this->description).'"'
            
            . ' , client_nom = "'. $db->sql_escape($this->societe).'"'
            . ' , client_contact = "'. $db->sql_escape($this->client_contact).'"'

            . ' , adresse = "'. $db->sql_escape($this->adresse).'"'
            . ' , adresse_cp = "'. $db->sql_escape($this->adresse_cp).'"'
           // . ' , num_departement = '.intval(substr($this->adresse_cp,0,2))
            . ' , region_nom = "'. $db->sql_escape($this->region_nom).'"'
            . ' , ville = "'. $db->sql_escape($this->adresse_ville).'"'
            . ' , pays = "'. $db->sql_escape($this->adresse_pays).'"'
            . ' , contrat_type = "'. $db->sql_escape($this->contrat_type).'"'
            . ' , domaine = "'. $db->sql_escape($this->domaine).'"'
            . ' , domaine_artisanat = "'. $db->sql_escape($this->domaineArtisanat).'"'
            . ' , duree = "'. $db->sql_escape($this->duree).'"'
            . ' , duree_nombre = '.intval($this->duree_nombre)
            . ' , duree_type = "'. $db->sql_escape($this->duree_type).'"'
            . ' , date_de_debut = "'. $db->sql_escape($this->date_de_debut).'"'
            . ' , debut_mois = "'. $db->sql_escape($this->debut_mois).'"'
            . ' , debut_annee = "'. $db->sql_escape($this->debut_annee).'"'
       
            // . ' , ref = ' . $this->id 
            . ' WHERE id = ' . $this->id
            ;
            $db-> sql_query($sql);
            // echo "<br><br><br><br><br>sql : ".$sql;
      
            return true;
        }

        return false;
    }

    function updateStatut($newStatut) {
        global $db, $config, $user;

        //echo "<br><br><br><br><br>updateupdateupdate";
        //print_r($this);

        if (!$user->data['is_registered']) {
            echo "<br><br><br><br><br>erreur : vous devez etre inscrit pour mettre à jour le statut de l annonce";
            exit;
        }
        

        // Update
        if ($this->id != 0) {
            $sql = 'UPDATE alt_annonce '
            . ' SET statut = "'.$newStatut.'"'
            . ' WHERE id = ' . $this->id
            ;
            $db-> sql_query($sql);
            //echo "<br><br><br><br><br>sql = ".$sql;
            //die;
            return true;
        }

        return false;
    }

    function publication() {
        global $db, $config, $user;

        //echo "<br><br><br><br><br>updateupdateupdate";
        //print_r($this);

        if (!$user->data['is_registered']) {
            echo "<br><br><br><br><br>erreur : vous devez etre inscrit pour publier une annonce...";
            exit;
        }
        

        // Update
        if ($this->id != 0) {
            $sql = 'UPDATE alt_annonce '
            . ' SET statut = "Active"'
            . ' , date_publication = NOW() '
            . ' WHERE id = ' . $this->id
            ;
            $db-> sql_query($sql);
           // echo "<br><br><br><br><br>sql = ".$sql;
            return true;
        }

        return false;
    }
    
}


?>