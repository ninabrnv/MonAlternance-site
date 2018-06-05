<?php

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* Adds an user
*
* @param mixed $user_row An array containing the following keys (and the appropriate values): username, group_id (the group to place the user in), user_email and the user_type(usually 0). Additional entries not overridden by defaults will be forwarded.
* @param string $cp_data custom profile fields, see custom_profile::build_insert_sql_array
* @param array $notifications_data The notifications settings for the new user
* @return the new user's ID.
*/
function alt_profil_add($data)
{
	global $db, $config;
	global $phpbb_dispatcher, $phpbb_container;

    print_r($data);

	//if (empty($data['type_compte']))
	//{
	//	return false;
	//}

    // pas de validation/translation pour l'instant
    $sql_ary = $data;
    

	$sql = 'INSERT INTO alt_profil ' . $db->sql_build_array('INSERT', $sql_ary);
    // echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>sql = ".$sql;
    $db->sql_query($sql);

	$alt_profil_id = $db->sql_nextid();

	return $alt_profil_id;
}



// Récupération des informations de profils "ALT"
function alt_profil_get() {

	global $db, $config, $user;
	// global $phpbb_dispatcher, $phpbb_container;

	$rowProfil = array();

	if ($user->data['is_registered']) {

		$sqlProfil = 'SELECT id,	user_id,	email,	nom,	prenom,	type_compte,	date_creation,	
		ville,	date_naissance,	domaine_principal,	niveau_etude,	derniere_ecole,
		tel_mobile,	societe_nom,	societe_adresse,	societe_adresse_suite,	societe_adresse_cp,
		societe_adresse_ville,	societe_adresse_pays,	societe_tel	societe_siret	,
		societe_num_tva_intra,	societe_num_exo_tva,	societe_secteur_activite,	societe_effectif,
		argent 
		FROM alt_profil
		WHERE user_id = ' . intval($user->data['user_id'])
		;

		$result = $db->sql_query($sqlProfil);

		// Si non trouvé, on en créer un par défaut
		if (!$rowProfil = $db->sql_fetchrow($result)) {
			// insert par défaut
			$sqlProfil = 'INSERT INTO alt_profil (date_creation, user_id, email) values (
				NOW()
				, '.intval($user->data['user_id']). '
				, "'.$db->sql_escape($user->data['user_email']).'"
				
				)';
			$db->sql_query($sqlProfil);


			$rowProfil = array();
			$rowProfil['user_id'] = $user->data['user_id'];
			$rowProfil['user_email'] = $user->data['user_email'];
		}

	} else {
		$rowProfil['user_id'] = $user->data['user_id'];
	}

	return $rowProfil;
}


function alt_profil_sauvegarder() {

	global $db, $config, $user, $message, $messageErreur, $request;

	$nom = request_var('nom', '');
	$prenom = request_var('prenom', '');
	$date_naissance = request_var('date_naissance', '');

	$ville = request_var('ville', '');
	$domaine_principal = request_var('domaine_principal', '');
	$niveau_etude = request_var('niveau_etude', '');
	$derniere_ecole = request_var('derniere_ecole', '');
	$tel_mobile = request_var('tel_mobile', '');

	$cv = $request->file('cv');
	
	$societe_nom = request_var('societe_nom', '');
	
	$typeCompte = request_var('typeCompte', '');
	
	//echo "<br><br><br><br><br><br><br><br><br><br><br>type de compte : ".$typeCompte;
			
	
	
	if ($typeCompte === 'candidat') {

		$sql = 'UPDATE alt_profil SET 
		nom = "'.$db->sql_escape($nom) . '"'
		.', prenom = "'.$db->sql_escape($prenom). '"'
		.', date_naissance = "'.$db->sql_escape($date_naissance). '"'

		.', ville = "'.$db->sql_escape($ville). '"'
		.', domaine_principal = "'.$db->sql_escape($domaine_principal). '"'
		.', niveau_etude = "'.$db->sql_escape($niveau_etude). '"'
		.', derniere_ecole = "'.$db->sql_escape($derniere_ecole). '"'
		.', tel_mobile = "'.$db->sql_escape($tel_mobile). '"'

		.' WHERE user_id = ' . $user->data['user_id'];
		$db->sql_query($sql);


		//echo "<br><br><br><br><br><br><br><br><br><br><br>";
				//print_r($cv);

		//
		// Upload CV
		//
		if ($cv['type'] != '') {
			// $message = 'Tentative d upload fichier dont l extension est : ' . $cv['type'];
			//echo "<br><br><br><br><br><br><br><br><br><br><br>";
			//print_r($cv);

			if (($cv['type'] != 'application/pdf') 
				&& ($cv['type'] != 'application/msword') 
				&& ($cv['type'] != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
				&& ($cv['type'] != 'image/jpeg') 
				) {
				$messageErreur = 'Erreur : CV : Cette extension de fichier n\'est pas authorisé : '.$cv['type'];
				$message = '';
			} else {

				$nbAleatoire = hash(sha512, session_id().microtime());
				$fichierNom = $user->data['user_id'].'_'.$nbAleatoire.'.'.pathinfo($cv['name'], PATHINFO_EXTENSION); 
				$resultat = move_uploaded_file($cv['tmp_name'], "cv/".$fichierNom);
				if (!$resultat) {
					$messageErreur = 'Erreur : CV : La mise à jour n\'a pas fonctionné. ()';
					$message = '';
				} else {

					$sql = 'UPDATE alt_profil SET 
					cv_fichier = "'.$db->sql_escape($fichierNom) . '"'
				
					.' WHERE user_id = ' . $user->data['user_id'];
					$db->sql_query($sql);


				}
					

			}
		
		} // if ($cv['type'] != '') {

		$message = 'Profil candidat sauvegardé !';
	}	// type de compte "candidat
	else if ($typeCompte === 'entreprise') {

		$sql = 'UPDATE alt_profil SET 
		nom = "'.$db->sql_escape($nom) . '"'
		.', prenom = "'.$db->sql_escape($prenom). '"'
		
		.', ville = "'.$db->sql_escape($ville). '"'
		.', domaine_principal = "'.$db->sql_escape($domaine_principal). '"'
	
		
		.', tel_mobile = "'.$db->sql_escape($tel_mobile). '"'
		.', societe_nom = "'.$db->sql_escape($societe_nom). '"'


		.' WHERE user_id = ' . $user->data['user_id'];
		$db->sql_query($sql);



		$message = 'Profil entreprise sauvegardé !';
	} else {

		$message = 'Type de Profil inconnu : Profil NON sauvegardé !';
	}


 	//echo "<br><br><br><br><br><br><br><br><br><br><br> messageErreur : " .$messageErreur;	
}

function alt_compte_sauvegarder() {

	global $db, $config, $user, $phpbb_container;

	if (!$user->data['is_registered']) {
		exit;
	}

	$nouvelEmail = request_var('nouvelEmail', '');
	$typeCompte = request_var('typeCompte', '');

	$nouveauPass = request_var('nouveauPass', '');
	$confirmNouveauPass = request_var('confirmNouveauPass', '');

	//
	// Sauvegarde du type de compte
	//
	if (($typeCompte === 'candidat') || ($typeCompte === 'entreprise')) {

		$sql= 'UPDATE alt_profil
		SET type_compte = "'.$typeCompte .'"
		WHERE user_id= '. $user->data['user_id'];
		$db-> sql_query( $sql );

	}
	

	$passwords_manager = $phpbb_container->get('passwords.manager');

	if (($nouvelEmail === '') || ($nouveauPass === '')) {
		return;
	}

	$user->data['username'] = $nouvelEmail;
	$user->data['username_clean'] = $nouvelEmail;
	$user->data['user_email'] = $nouvelEmail;

	// Setup data for each user to update.
	// Change all three values to whatever you want
	$aUser= array
	( array  // First user we want to update
		( 'username' => $nouvelEmail
		, 'email' => $nouvelEmail // E-mail address
		, 'new_password' => $passwords_manager->hash($nouveauPass) 
		, 'user_passchg' => time()
		, 'user_id'=> $user->data['user_id']  // User which is about to be updated
		)
	);

	// This and everything below is always the same and
	// carries out all the changes.
	foreach( $aUser as $aData ) {
		// Name all table columns to be updated.
		$aSql= array
		( 'username' => strtolower($aData['email'])
		, 'username_clean' => strtolower($aData['email'])
		, 'user_email'=> strtolower($aData['email'])  // E-mail address in plaintext
		, 'user_email_hash'=> phpbb_email_hash( $aData['email'] )  // Hashed e-mail address
		, 'user_password'=> $aData['new_password']  // Passwords are hash-stored only
		, 'user_passchg'=> time()  // Consider this a password change
		);

		$user->reset_login_keys($aData['user_id']);

		// Execute update
		$sql= 'UPDATE '. USERS_TABLE. '
			SET '. $db-> sql_build_array( 'UPDATE', $aSql ). '
			WHERE user_id= '. $aData['user_id'];
		$db-> sql_query( $sql );
		// echo "<br><br><br><br><br><br><br><br><br><br><br> sql : " .$sql;

		
	} 

	$message = 'Information du compte sauvegardé !';
}

// add "old" en debut de login (l email)
function alt_compte_desactiver() {

	global $db, $config, $user, $phpbb_container;

	if (!$user->data['is_registered']) {
		exit;
	}


	$passwords_manager = $phpbb_container->get('passwords.manager');

	// Setup data for each user to update.
	// Change all three values to whatever you want
	$aUser= array
	( array  // First user we want to update
		( 'email' => 'old'.$user->data['user_email']
		, 'new_password' => $passwords_manager->hash('old') 
		, 'user_passchg' => time()
		, 'user_id'=> $user->data['user_id']  // User which is about to be updated
		)
	);

	// This and everything below is always the same and
	// carries out all the changes.
	foreach( $aUser as $aData ) {
		// Name all table columns to be updated.
		$aSql= array
		( 'username' => strtolower($aData['email'])
		, 'user_email'=> $aData['email']  // E-mail address in plaintext
		, 'user_email_hash'=> phpbb_email_hash( $aData['email'] )  // Hashed e-mail address
		, 'user_password'=> $aData['new_password']  // Passwords are hash-stored only
		, 'user_passchg'=> time()  // Consider this a password change
		);

		$user->reset_login_keys($aData['user_id']);

		// Execute update
		$sql= 'UPDATE '. USERS_TABLE. '
			SET '. $db-> sql_build_array( 'UPDATE', $aSql ). '
			WHERE user_id= '. $aData['user_id'];
		$db-> sql_query( $sql );
		// echo "<br><br><br><br><br><br><br><br><br><br><br> sql : " .$sql;

		
	} 

	$message = 'Votre compte a été suspendu';
}


// Fonction qui calcule la signature
// $params : tableau contenant les champs à envoyer dans le formulaire
function getSignature($params, $certificat){
	//Initialisation de la variable qui contiendra la chaine à chiffrer
	$contenu_signature = "" ;
	 // tri des champs par ordre alphabétique
	 ksort($params);
	 foreach ($params as $nom =>$valeur)
	 {
		// Récupération des champs vads_
		if (substr($nom,0,5)=='vads_') {
			// Concaténation avec le séparateur "+"
			$contenu_signature .= $valeur."+";
		}
	 }
	// Ajout du certificat à la fin
	$contenu_signature .= $certificat; //2948137617919086 : certificat de test   // $key;
	// Application de l’algorythme SHA-1
	$signature = sha1($contenu_signature);
	return $signature ;
}