<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For more information about the language pack, please visit
 * https://www.phpbb.com/customise/db/translation/french/
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C

$lang = array_merge($lang, [
	'TERMS_OF_USE_CONTENT' => '

	<h1>Mentions légales</h1>
	<br><b>Informations éditeur :</b>
	<br>Site édité par Epsilon.
	<br>Numéro SIRET : 834 147 548 000 12
	<br>Siège social : 8 Esplanade Compans Caffarelli 31000 Toulouse
	<br>Gérants : Aylar Kurbanova & Alizée Marzouki
	<br><b>Hébergement :</b>
	<br>OVH SAS au capital de 500 k€ RCS Roubaix - Tourcoing 424 761 419 00011 - Code APE 721Z Siège social : 140 Quai du Sartel - 59100 Roubaix - France
	<br><b>Informatique et Libertés :</b>
	<br>Conformément à la loi du 6 janvier 1978 relative à l\'informatique, aux fichiers et aux libertés, ce site a fait l\'objet d\'une déclaration auprès de la Commission Nationale Informatique et Libertés, numéro : 1297175.
	<br><b>Données personnelles :</b>
	<br>Vous disposez d\'un droit d\'accès, de modification, de rectification et de suppression des données qui vous concernent (art. 34 de la loi "Informatique et Libertés" du 6 janvier 1978). Pour exercer ce droit, contactez contact@mon-alternance.fr
	
	',
]);


$lang = array_merge($lang, [
	'CONDITIONS' => '

	<h1>Conditions générales d\'utilisation</h1>
	Les présentes conditions ont pour objet de définir les modalités et conditions dans lesquelles l’éditeur la société EPSILON met à la disposition de ses utilisateurs le site www.mon-alternance.fr , et les services disponibles sur ce dernier ainsi que la manière par laquelle l’utilisateur accède au site et utilise ses services.
	Pour plus d’informations, nous invitons tous les utilisateurs du Site Web à lire les mentions légales du Site Web disponibles ici.
	Toute connexion au Site est subordonnée au respect des présentes conditions. Pour l’utilisateur, le simple accès au Site de l’éditeur à l’adresse URL suivante : www.mon-alternance.fr , implique l’acceptation de l’ensemble des conditions décrites ci-après.
	EPSILON se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes conditions générales d\'utilisation.
	
	<br/><br/>
	<h2>Article 1: Définitions</h2>
	Les termes : « Site Web » et « nous » font référence à la société EPSILON ainsi qu’à l’administrateur de www.mon-alternance.fr . Le terme « Recruteur » fait référence à l’entreprise/école ou le contact de l’entreprise/école qui dépose une offre sur le Site Web. Le terme « Utilisateur » fait référence à toute personne qui utilise les services du Site Web.
	
	<br/><br/>
	<h2>Article 2 : Responsabilités de l’utilisateur et force majeure</h2>
	L’utilisateur reconnaît utiliser le Site Web et ses services, sous sa seule responsabilité.
	Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les frais supportés par l\'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) sont à sa charge.
	
	Les sources des informations diffusées sur le site sont réputées fiables. Toutefois, le site se réserve la faculté d\'une non-garantie de la fiabilité des sources. Les informations données sur le site le sont à titre purement informatif. Ainsi, l\'Utilisateur assume seul l\'entière responsabilité de l\'utilisation des informations et contenus du présent site.
	L\'Utilisateur s\'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite.
	L\'Utilisateur assume les risques liés à l\'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.
	Tout usage du service par l\'Utilisateur ayant directement ou indirectement pour conséquence des dommages doit faire l\'objet d\'une indemnisation au profit du site.
	Une garantie optimale de la sécurité et de la confidentialité des données transmises n\'est pas assurée par le site. Toutefois, le site s\'engage à mettre en œuvre tous les moyens nécessaires afin de garantir au mieux la sécurité et la confidentialité des données.
	La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d\'un tiers.
	
	<br/><br/>
	<h2>Article 3 : Limitation de responsabilité de l’éditeur</h2>
	Le Site Web met tout en œuvre pour offrir aux utilisateurs des informations disponibles mais ne saurait être tenu pour responsable des erreurs ou omissions, d\'une absence de disponibilité des informations et services ou de tout autre problème technique lié au réseau Internet.
	La vocation stricte du Site Web est de publier des offres d’emploi proposées par les Recruteurs. Ainsi, la responsabilité du Site Web ne saurait être engagée lors d’une mise en relation directe entre un Recruteur et un candidat à l’emploi. Elle ne saurait non plus être engagée en cas d’offre illégale, frauduleuse, discriminatoire, diffamatoire et/ou obscène.
	L’Administrateur du Site Web ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature que ce soit, résultant de l’interprétation ou de l’utilisation des informations et/ou documents disponibles sur ce site.
	Selon le cas :
	L’Utilisateur non membre n\'a pas accès aux services réservés aux membres. Pour cela, il doit s\'identifier à l\'aide de son identifiant et de son mot de passe.
	Le site met en œuvre tous les moyens mis à sa disposition pour assurer un accès de qualité à ses services. L\'obligation étant de moyens, le site ne s\'engage pas à atteindre ce résultat.
	Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du réseau ou du serveur n\'engage pas la responsabilité de [Nom du site].
	L\'accès aux services du site peut à tout moment faire l\'objet d\'une interruption, d\'une suspension, d\'une modification sans préavis pour une maintenance ou pour tout autre cas. L\'Utilisateur s\'oblige à ne réclamer aucune indemnisation suite à l\'interruption, à la suspension ou à la modification du présent contrat.
	
	<br/><br/>
	<h2>Article 4 : Modifications des conditions d’utilisation</h2>
	L’Administrateur du Site Web se réserve la possibilité de modifier, à tout moment et sans préavis, les présentes conditions d’utilisation afin de les adapter aux évolutions du site et/ou de son exploitation.
	Les Utilisateurs du Site sont par conséquent invités à en prendre connaissance à chaque nouvelle utilisation.
	
	<br/><br/>
	<h2>Article 5 : Propriété intellectuelle</h2>
	Les marques, logos, signes et tout autre contenu du site font l\'objet d\'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d\'auteur.
	L\'Utilisateur sollicite l\'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus.
	L\'Utilisateur s\'engage à une utilisation des contenus du site dans un cadre strictement privé. Une utilisation des contenus à des fins commerciales est strictement interdite.
	Tout contenu mis en ligne par l\'Utilisateur est de sa seule responsabilité. L\'Utilisateur s\'engage à ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le site sera pris en charge par l\'Utilisateur.
	Le contenu de l\'Utilisateur peut être à tout moment et pour n\'importe quelle raison supprimé ou modifié par le site. L\'Utilisateur ne reçoit aucune justification et notification préalablement à la suppression ou à la modification du contenu Utilisateur.
	 
	<br/><br/>
	<h2>Article 6 : Données personnelles</h2>
	Les informations demandées à l’inscription au site sont nécessaires et obligatoires pour la création du compte de l\'Utilisateur. En particulier, l\'adresse électronique pourra être utilisée par le site pour l\'administration, la gestion et l\'animation du service.
	Le site assure à l\'Utilisateur une collecte et un traitement d\'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l\'informatique, aux fichiers et aux libertés. 
	En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l\'Utilisateur dispose d\'un droit d\'accès, de rectification, de suppression et d\'opposition de ses données personnelles. L\'Utilisateur exerce ce droit via :
		<br/>- son espace personnel ;
		<br/>- un formulaire de contact ;
		<br/>- par mail à contact@mon-alternance.fr ;
	
		<br/><br/>
	<h2>Article 7 : Contestations et litiges</h2>
	Tant le présent Site, que ses modalités et conditions d’utilisation sont régis par le droit français.
	En cas de contestation éventuelle et après l’échec de toute tentative de recherche d’une solution amiable, les tribunaux français seront seuls compétents pour connaître de ce litige.
	Pour toute question relative aux présentes conditions d’utilisation du site, vous pouvez nous écrire à l’adresse suivante : contact@mon-alternance.fr
	
	<br/><br/>
	',
]);


// Common language entries
$lang = array_merge($lang, [
	'ACCOUNT_ACTIVE'                 => 'Votre compte est à présent activé. Nous vous remercions de votre inscription.',
	'ACCOUNT_ACTIVE_ADMIN'           => 'Le compte est à présent activé.',
	'ACCOUNT_ACTIVE_PROFILE'         => 'Votre compte est à présent réactivé.',
	'ACCOUNT_ADDED'                  => 'Merci pour votre inscription. Connectez-vous à votre compte.',
	'ACCOUNT_COPPA'                  => 'Votre compte a été créé mais nécessite d’être activé. Pour plus d’informations, veuillez consulter votre messagerie.',
	'ACCOUNT_EMAIL_CHANGED'          => 'Votre compte a été mis à jour. Cependant, vous devez le réactiver car vous avez modifié votre adresse de courriel. Une clé d’activation a été envoyée sur la nouvelle adresse de courriel que vous avez spécifiée. Pour plus d’informations, veuillez consulter votre messagerie.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'    => 'Votre compte a été mis à jour. Cependant, un administrateur doit le réactiver car vous avez modifié votre adresse de courriel. Vous serez informé lors de la réactivation de votre compte.',
	'ACCOUNT_INACTIVE'               => 'Votre compte a été créé. Cependant, vous devez activer votre compte. Une clé d’activation a été envoyée sur l’adresse de courriel que vous avez spécifiée. Pour plus d’informations, veuillez consulter votre messagerie. Si vous n’avez pas reçu le courriel, assurez-vous que celui-ci ne soit pas présent dans votre boîte de courriels indésirables. Selon le fournisseur de messagerie, il se peut également que la réception nécessite un certain temps.',
	'ACCOUNT_INACTIVE_ADMIN'         => 'Votre compte a été créé. Cependant, un administrateur doit activer votre compte. Vous serez informé lors de la réactivation de votre compte.',
	'ACTIVATION_EMAIL_SENT'          => 'Le courriel d’activation a été envoyé à votre adresse de courrier électronique.',
	'ACTIVATION_EMAIL_SENT_ADMIN'    => 'Le courriel d’activation a été envoyé aux adresses de courriel des administrateurs.',
	'ADD'                            => 'Ajouter',
	'ADD_BCC'                        => 'Ajouter [Cci]',
	'ADD_FOES'                       => 'Ajouter des ignorés',
	'ADD_FOES_EXPLAIN'               => 'Vous devez saisir chaque nom d’utilisateur sur une nouvelle ligne.',
	'ADD_FOLDER'                     => 'Ajouter une boîte',
	'ADD_FRIENDS'                    => 'Ajouter des amis',
	'ADD_FRIENDS_EXPLAIN'            => 'Vous devez saisir chaque nom d’utilisateur sur une nouvelle ligne.',
	'ADD_NEW_RULE'                   => 'Ajouter une nouvelle règle',
	'ADD_RULE'                       => 'Ajouter une règle',
	'ADD_TO'                         => 'Ajouter [À]',
	'ADD_USERS_UCP_EXPLAIN'          => 'Vous pouvez ajouter ici de nouveaux utilisateurs à des groupes. Vous pouvez décider que ce groupe deviendra le nouveau groupe par défaut de ces utilisateurs. Veuillez saisir chaque nom d’utilisateur sur une nouvelle ligne.',
	'ADMIN_EMAIL'                    => 'Autoriser les administrateurs à me contacter par courriel',
	'AGREE'                          => 'J’accepte ces conditions',
	'ALLOW_PM'                       => 'Autoriser les utilisateurs à me contacter par message privé',
	'ALLOW_PM_EXPLAIN'               => 'Veuillez noter que malgré la désactivation de cette option, les administrateurs et les modérateurs pourront toujours vous envoyer des messages privés.',
	'ALREADY_ACTIVATED'              => 'Vous avez déjà activé votre compte.',
	'ATTACHMENTS_EXPLAIN'            => 'Depuis cette page, vous pouvez consulter la liste des pièces jointes que vous avez transférées et insérées à vos messages sur le forum.',
	'ATTACHMENTS_DELETED'            => 'Les pièces jointes ont été supprimées.',
	'ATTACHMENT_DELETED'             => 'La pièce jointe a été supprimée.',
	'AUTOLOGIN_SESSION_KEYS_DELETED' => 'Les clés de connexions automatiques ont été supprimées.',
	'AVATAR_CATEGORY'                => 'Catégorie',
	'AVATAR_DRIVER_GRAVATAR_TITLE'   => 'Avatar de Gravatar',
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN' => 'Gravatar est un service internet qui vous permet d’associer un avatar qui sera utilisé sur plusieurs sites internet. Pour plus d’informations, veuillez consulter <a href="https://fr.gravatar.com/">le site internet de Gravatar</a>.',
	'AVATAR_DRIVER_LOCAL_TITLE'      => 'Avatar de la galerie',
	'AVATAR_DRIVER_LOCAL_EXPLAIN'    => 'Sélectionnez votre avatar parmi une galerie d’images mise à votre disposition.',
	'AVATAR_DRIVER_REMOTE_TITLE'     => 'Avatar externe',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'   => 'Saisissez le lien d’une image présente sur un site internet externe afin d’en faire votre avatar.',
	'AVATAR_DRIVER_UPLOAD_TITLE'     => 'Avatar local',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN'   => 'Transférez une image présente sur votre ordinateur afin d’en faire votre avatar.',
	'AVATAR_EXPLAIN'                 => 'Dimensions maximales : %1$s de large et %2$s de haut ; %3$.2f Kio maximum.',
	'AVATAR_EXPLAIN_NO_FILESIZE'     => 'Dimensions maximales : %1$s de large et %2$s de haut.',
	'AVATAR_FEATURES_DISABLED'       => 'Les avatars sont actuellement désactivés.',
	'AVATAR_GALLERY'                 => 'Galerie locale',
	'AVATAR_GENERAL_UPLOAD_ERROR'    => 'Impossible de transférer l’avatar vers %s.',
	'AVATAR_NOT_ALLOWED'             => 'Votre avatar ne peut pas être affiché car les avatars n’ont pas été autorisés par les administrateurs de ce forum.',
	'AVATAR_PAGE'                    => 'Page',
	'AVATAR_SELECT'                  => 'Sélectionnez votre avatar',
	'AVATAR_TYPE'                    => 'Type d’avatar',
	'AVATAR_TYPE_NOT_ALLOWED'        => 'Votre avatar actuel ne peut pas être affiché car ce type d’avatar n’a pas été autorisé par les administrateurs de ce forum.',

	'BACK_TO_DRAFTS'            => 'Revenir aux brouillons enregistrés',
	'BACK_TO_LOGIN'             => 'Revenir à l’écran de connexion',
	'BIRTHDAY'                  => 'Anniversaire',
	'BIRTHDAY_EXPLAIN'          => 'Si vous saisissez une année, votre âge sera affiché lors de votre anniversaire.',
	'BOARD_DATE_FORMAT'         => 'Mon format de date',
	'BOARD_DATE_FORMAT_EXPLAIN' => 'La syntaxe qui est utilisée est identique à la fonction PHP « <a href="https://secure.php.net/manual/fr/function.date.php">date()</a> ».',
	'BOARD_LANGUAGE'            => 'Ma langue',
	'BOARD_STYLE'               => 'Mon style sur le forum',
	'BOARD_TIMEZONE'            => 'Mon fuseau horaire',
	'BOOKMARKS'                 => 'Favoris',
	'BOOKMARKS_EXPLAIN'         => 'Vous pouvez ajouter des sujets aux favoris afin de les consulter ultérieurement. Si vous souhaitez supprimer des sujets de vos favoris, cochez les cases correspondantes et cliquez sur le bouton « Supprimer les sujets sélectionnés des favoris ».',
	'BOOKMARKS_DISABLED'        => 'Les favoris ont été désactivés sur ce forum.',
	'BOOKMARKS_REMOVED'         => 'Les sujets ont été supprimés de vos favoris.',

	'CANNOT_EDIT_MESSAGE_TIME'   => 'Vous ne pouvez désormais plus modifier ou supprimer ce message.',
	'CANNOT_MOVE_TO_SAME_FOLDER' => 'Les messages ne peuvent pas être déplacés dans la boîte que vous souhaitez supprimer.',
	'CANNOT_MOVE_FROM_SPECIAL'   => 'Les messages ne peuvent pas être déplacés de la boîte d’envoi.',
	'CANNOT_RENAME_FOLDER'       => 'Cette boîte ne peut pas être renommée.',
	'CANNOT_REMOVE_FOLDER'       => 'Cette boîte ne peut pas être supprimée.',
	'CHANGE_DEFAULT_GROUP'       => 'Modifier le groupe par défaut',
	'CHANGE_PASSWORD'            => 'Modifier le mot de passe',
	'CLICK_GOTO_FOLDER'          => '%1$sAller à votre boîte « %3$s »%2$s',
	'CLICK_RETURN_FOLDER'        => '%1$sRevenir sur votre boîte « %3$s »%2$s',
	'CONFIRMATION'               => 'Confirmation d’inscription',
	'CONFIRM_CHANGES'            => 'Confirmer les modifications',
	'CONFIRM_EXPLAIN'            => 'Vous devez saisir un code de confirmation afin de nous permettre de nous prémunir contre les soumissions automatisées et intensives effectuées par des robots malveillants. Le code est affiché dans l’image ci-dessous. Si vous éprouvez des difficultés à lire ce code correctement, veuillez contacter un %sadministrateur du site%s.',
	'VC_REFRESH'                 => 'Générer un nouveau code de confirmation',
	'VC_REFRESH_EXPLAIN'         => 'Si vous éprouvez des difficultés à lire ce code correctement, vous pouvez générer un nouveau code en cliquant sur le bouton suivant.',

	'CONFIRM_PASSWORD'                => 'Confirmer le mot de passe',
	'CONFIRM_PASSWORD_EXPLAIN'        => 'Vous ne devez confirmer votre mot de passe que si vous avez modifié ce dernier ci-dessus.',
	'COPPA_BIRTHDAY'                  => 'Veuillez renseigner votre date de naissance afin de continuer votre inscription.',
	'COPPA_COMPLIANCE'                => 'Conformité à la loi COPPA',
	'COPPA_EXPLAIN'                   => 'Veuillez noter que si vous envoyez le formulaire, cela créera votre compte. Cependant, sachez que celui-ci ne peut être activé que si un de vos parents ou un tuteur légal approuve votre inscription. Vous recevrez une copie du formulaire contenant les renseignements à envoyer.',
	'CREATE_FOLDER'                   => 'Ajouter une boîte…',
	'CURRENT_IMAGE'                   => 'Image actuelle',
	'CURRENT_PASSWORD'                => 'Mot de passe actuel',
	'CURRENT_PASSWORD_EXPLAIN'        => 'Vous devez saisir votre mot de passe actuel si vous souhaitez modifier votre mot de passe, votre adresse de courriel ou votre nom d’utilisateur.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Par mesure de sécurité, vous devez confirmer votre mot de passe actuel afin de modifier votre mot de passe, votre adresse de courriel ou votre nom d’utilisateur.',
	'CUR_PASSWORD_EMPTY'              => 'Vous n’avez pas renseigné votre mot de passe actuel.',
	'CUR_PASSWORD_ERROR'              => 'Le mot de passe que vous avez spécifié est incorrect.',
	'CUSTOM_DATEFORMAT'               => 'Personnaliser…',

	'DEFAULT_ACTION'             => 'Opération par défaut',
	'DEFAULT_ACTION_EXPLAIN'     => 'Cette opération sera effectuée si les opérations précédentes sont impossibles.',
	'DEFAULT_ADD_SIG'            => 'Insérer ma signature par défaut',
	'DEFAULT_BBCODE'             => 'Activer les BBCodes par défaut',
	'DEFAULT_NOTIFY'             => 'Recevoir une notification par défaut lors de la réception d’un nouveau message',
	'DEFAULT_SMILIES'            => 'Activer les émoticônes par défaut',
	'DEFINED_RULES'              => 'Règles définies',
	'DELETED_TOPIC'              => 'Le sujet a été supprimé.',
	'DELETE_ATTACHMENT'          => 'Supprimer la pièce jointe',
	'DELETE_ATTACHMENTS'         => 'Supprimer les pièces jointes',
	'DELETE_ATTACHMENT_CONFIRM'  => 'Êtes-vous sûr de vouloir supprimer cette pièce jointe ?',
	'DELETE_ATTACHMENTS_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ces pièces jointes ?',
	'DELETE_AVATAR'              => 'Supprimer l’image',
	'DELETE_COOKIES_CONFIRM'     => 'Êtes-vous sûr de vouloir supprimer les cookies de ce forum ?',
	'DELETE_MARKED_PM'           => 'Supprimer les messages sélectionnés',
	'DELETE_MARKED_PM_CONFIRM'   => 'Êtes-vous sûr de vouloir supprimer les messages sélectionnés ?',
	'DELETE_OLDEST_MESSAGES'     => 'Supprimer les messages les plus anciens',
	'DELETE_MESSAGE'             => 'Supprimer le message',
	'DELETE_MESSAGE_CONFIRM'     => 'Êtes-vous sûr de vouloir supprimer ce message privé ?',
	'DELETE_MESSAGES_IN_FOLDER'  => 'Supprimer tous les messages de la boîte que vous souhaitez supprimer',
	'DELETE_RULE'                => 'Supprimer la règle',
	'DELETE_RULE_CONFIRM'        => 'Êtes-vous sûr de vouloir supprimer cette règle ?',
	'DEMOTE_SELECTED'            => 'Rétrograder la sélection',
	'DISABLE_CENSORS'            => 'Activer la censure de mots',
	'DISPLAY_GALLERY'            => 'Afficher la galerie',
	'DOMAIN_NO_MX_RECORD_EMAIL'  => 'Le domaine de cette adresse de courriel ne contient pas d’enregistrement MX valide.',
	'DOWNLOADS'                  => 'Téléchargements',
	'DRAFTS_DELETED'             => 'Les brouillons ont été supprimés.',
	'DRAFTS_EXPLAIN'             => 'Depuis cette page, vous pouvez consulter, modifier et supprimer les brouillons que vous avez préalablement enregistrés.',
	'DRAFT_UPDATED'              => 'Le brouillon a été mis à jour.',

	'EDIT_DRAFT_EXPLAIN'  => 'Vous pouvez modifier ici votre brouillon. Les brouillons ne peuvent pas contenir de pièces jointes et de sondages.',
	'EMAIL_BANNED_EMAIL'  => 'Cette adresse d email a été bannie de ce site.',
	'EMAIL_REMIND'        => 'Cette adresse doit correspondre à l’adresse d’email associée à votre compte.',
	'EMAIL_TAKEN_EMAIL'   => 'Cette adresse d email est déjà utilisée.',
	'EMPTY_DRAFT'         => 'Vous devez saisir un message avant d’envoyer vos modifications.',
	'EMPTY_DRAFT_TITLE'   => 'Vous devez saisir le titre du brouillon.',
	'EXPORT_AS_XML'       => 'Exporter en XML',
	'EXPORT_AS_CSV'       => 'Exporter en CSV',
	'EXPORT_AS_CSV_EXCEL' => 'Exporter en CSV (Excel)',
	'EXPORT_AS_TXT'       => 'Exporter en TXT',
	'EXPORT_AS_MSG'       => 'Exporter en MSG',
	'EXPORT_FOLDER'       => 'Exporter la boîte',

	'FIELD_REQUIRED'  => 'Le champ « %s » doit être renseigné.',
	'FIELD_TOO_SHORT' => [
		1 => 'Le champ « %2$s » est trop court, vous devez saisir au moins %1$d caractère.',
		2 => 'Le champ « %2$s » est trop court, vous devez saisir au moins %1$d caractères.',
	],
	'FIELD_TOO_LONG' => [
		1 => 'Le champ « %2$s » est trop long, vous ne pouvez saisir que %1$d caractère au maximum.',
		2 => 'Le champ « %2$s » est trop long, vous ne pouvez saisir que %1$d caractères au maximum.',
	],
	'FIELD_TOO_SMALL'                            => 'La valeur de « %2$s » est trop faible, la valeur minimale est de %1$d.',
	'FIELD_TOO_LARGE'                            => 'La valeur de « %2$s » est trop importante, la valeur maximale est de %1$d.',
	'FIELD_INVALID_CHARS_INVALID'                => 'Le champ « %s » contient des caractères invalides.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'           => 'Le champ « %s » contient des caractères invalides. Seuls les chiffres sont autorisés.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'             => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (sans accent), les chiffres et les points sont autorisés.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'             => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (sans accent) et les chiffres sont autorisés.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'      => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (sans accent), les chiffres, les tirets bas, les tirets, les virgules et les points sont autorisés. De plus, le premier caractère doit être une lettre.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'          => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (sans accent), les chiffres, les espaces, les tirets bas, les crochets et les signes plus et moins sont autorisés.',
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'       => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (sans accent), les chiffres et les tirets bas sont autorisés.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'        => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (avec ou sans accent), les chiffres et les points sont autorisés.',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'        => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (avec ou sans accent) et les chiffres sont autorisés.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION' => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (avec ou sans accent), les chiffres, les tirets bas, les tirets et les points sont autorisés. De plus, le premier caractère doit être une lettre.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'     => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (avec ou sans accent), les chiffres, les espaces, les tirets bas, les crochets et les signes plus et moins sont autorisés.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'  => 'Le champ « %s » contient des caractères invalides. Seuls les lettres (avec ou sans accent), les chiffres et les tirets bas sont autorisés.',
	'FIELD_INVALID_DATE'                         => 'Le champ « %s » contient une date invalide.',
	'FIELD_INVALID_URL'                          => 'Le champ « %s » contient un lien invalide.',
	'FIELD_INVALID_VALUE'                        => 'Le champ « %s » contient une valeur invalide.',

	'FOE_MESSAGE'           => 'Message d’un ignoré',
	'FOES_EXPLAIN'          => 'Les ignorés sont les utilisateurs dont vous ignorerez par défaut le contenu dont ils sont les auteurs. Les messages que ces utilisateurs publient ne vous seront pas entièrement visibles. Les ignorés peuvent néanmoins vous envoyer des messages privés. Veuillez noter que vous ne pouvez pas ignorer les administrateurs et les modérateurs.',
	'FOES_UPDATED'          => 'Votre liste d’ignorés a été mise à jour.',
	'FOLDER_ADDED'          => 'La boîte a été ajoutée.',
	'FOLDER_MESSAGE_STATUS' => [
		1 => '%2$d sur %1$s',
		2 => '%2$d sur %1$s',
	],
	'FOLDER_NAME_EMPTY' => 'Vous devez saisir le nom de cette boîte.',
	'FOLDER_NAME_EXIST' => 'La boîte « %s » existe déjà.',
	'FOLDER_OPTIONS'    => 'Options des boîtes',
	'FOLDER_RENAMED'    => 'La boîte a été renommée.',
	'FOLDER_REMOVED'    => 'La boîte a été supprimée.',
	'FOLDER_STATUS_MSG' => [
		1 => 'La boîte est utilisée à %3$d %% (%2$d sur %1$s)',
		2 => 'La boîte est utilisée à %3$d %% (%2$d sur %1$s)',
	],
	'FORWARD_PM'                 => 'Transférer le MP',
	'FORCE_PASSWORD_EXPLAIN'     => 'Vous devez modifier votre mot de passe afin de poursuivre votre navigation sur ce forum.',
	'FRIEND_MESSAGE'             => 'Message d’un ami',
	'FRIENDS'                    => 'Amis',
	'FRIENDS_EXPLAIN'            => 'Les amis vous permettent d’accéder plus rapidement aux membres avec qui vous communiquez fréquemment. Si le style que vous utilisez est compatible avec cette fonctionnalité, les messages de vos amis apparaîtront en surbrillance.',
	'FRIENDS_OFFLINE'            => 'Hors-ligne',
	'FRIENDS_ONLINE'             => 'En ligne',
	'FRIENDS_UPDATED'            => 'Votre liste d’amis a été mise à jour.',
	'FULL_FOLDER_OPTION_CHANGED' => 'L’opération à effectuer lorsqu’une boîte est pleine a été modifiée.',
	'FWD_ORIGINAL_MESSAGE'       => '-------- Message original --------',
	'FWD_SUBJECT'                => 'Sujet : %s',
	'FWD_DATE'                   => 'Date : %s',
	'FWD_FROM'                   => 'Par : %s',
	'FWD_TO'                     => 'À : %s',

	'GLOBAL_ANNOUNCEMENT' => 'Annonce générale',

	'GRAVATAR_AVATAR_EMAIL'         => 'Adresse de courriel Gravatar',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN' => 'Saisissez l’adresse de courriel que vous utilisez sur votre compte <a href="https://fr.gravatar.com/">Gravatar</a>.',
	'GRAVATAR_AVATAR_SIZE'          => 'Dimensions de l’avatar',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'  => 'Saisissez la hauteur et la largeur de votre avatar. Laissez ces champs vides si vous souhaitez que cela soit détecté automatiquement.',

	'HIDE_ONLINE'             => 'Masquer ma présence',
	'HIDE_ONLINE_EXPLAIN'     => 'La modification de cette option ne sera prise en compte que lors de votre prochaine visite sur le forum.',
	'HOLD_NEW_MESSAGES'       => 'Refuser les nouveaux messages (ils seront mis en attente jusqu’à ce que vous libériez de l’espace)',
	'HOLD_NEW_MESSAGES_SHORT' => 'Mettre en attente les nouveaux messages',

	'IF_FOLDER_FULL'             => 'Si la boîte est pleine',
	'IMPORTANT_NEWS'             => 'Annonces importantes',
	'INVALID_USER_BIRTHDAY'      => 'La date d’anniversaire que vous avez spécifiée est invalide.',
	'INVALID_CHARS_USERNAME'     => 'Le nom d’utilisateur que vous avez spécifié contient des caractères qui ne sont pas autorisés.',
	'INVALID_CHARS_NEW_PASSWORD' => 'Le mot de passe que vous avez spécifié ne contient pas les caractères requis.',
	'ITEMS_REQUIRED'             => 'Les champs marqués par « * » sont obligatoires.',

	'JOIN_SELECTED' => 'Rejoindre la sélection',

	'LANGUAGE'                    => 'Langue',
	'LINK_REMOTE_AVATAR'          => 'Lien externe',
	'LINK_REMOTE_AVATAR_EXPLAIN'  => 'Saisissez le lien où se situe l’image de l’avatar que vous souhaitez insérer.',
	'LINK_REMOTE_SIZE'            => 'Dimensions de l’avatar',
	'LINK_REMOTE_SIZE_EXPLAIN'    => 'Saisissez la largeur et la hauteur de l’avatar. Laissez ces champs vides si vous souhaitez que cela soit détecté automatiquement.',
	'LOGIN_EXPLAIN_UCP'           => 'Veuillez vous connecter afin d’accéder au panneau de contrôle de l’utilisateur.',
	'LOGIN_LINK'                  => 'Associer ou inscrire votre compte provenant d’un service externe à celui de ce forum',
	'LOGIN_LINK_EXPLAIN'          => 'Vous avez essayé de vous connecter avec un service externe qui n’est associé à aucun compte de ce forum. Vous devez à présent associer ce compte à un compte du forum ou en créer un nouveau.',
	'LOGIN_LINK_MISSING_DATA'     => 'Les données qui sont nécessaires afin d’associer votre compte à celui d’un service externe ne sont pas disponibles. Veuillez recommencer la procédure de connexion.',
	'LOGIN_LINK_NO_DATA_PROVIDED' => 'Aucune donnée n’a été transmise à cette page afin d’associer votre compte à celui d’un service externe. Si le problème persiste, veuillez contacter un administrateur.',
	'LOGIN_KEY'                   => 'Clé de connexion',
	'LOGIN_TIME'                  => 'Date de connexion',
	'LOGIN_REDIRECT'              => 'Vous êtes à présent connecté.',
	'LOGOUT_FAILED'               => 'Vous n’avez pas été déconnecté car la requête n’a pas fonctionné sur votre session. Si le problème persiste, veuillez contacter un administrateur.',
	'LOGOUT_REDIRECT'             => 'Vous êtes à présent déconnecté.',

	'MARK_IMPORTANT'              => '(Dé)cocher comme important',
	'MARKED_MESSAGE'              => 'Message coché',
	'MAX_FOLDER_REACHED'          => 'Le nombre maximal de boîtes autorisé par utilisateur a été atteint.',
	'MESSAGE_BY_AUTHOR'           => 'par',
	'MESSAGE_COLOURS'             => 'Légende de couleurs des messages',
	'MESSAGE_DELETED'             => 'Le message a été supprimé.',
	'MESSAGE_EDITED'              => 'Le message a été modifié.',
	'MESSAGE_HISTORY'             => 'Historique du message',
	'MESSAGE_REMOVED_FROM_OUTBOX' => 'Le message a été supprimé par son auteur.',
	'MESSAGE_SENT_ON'             => 'le',
	'MESSAGE_STORED'              => 'Le message a été envoyé.',
	'MESSAGE_TO'                  => 'À',
	'MESSAGES_DELETED'            => 'Les messages ont été supprimés',
	'MOVE_DELETED_MESSAGES_TO'    => 'Déplacer les messages de la boîte que vous avez supprimée vers',
	'MOVE_DOWN'                   => 'Descendre',
	'MOVE_MARKED_TO_FOLDER'       => 'Déplacer la sélection vers %s',
	'MOVE_PM_ERROR'               => [
		1 => 'Une erreur est survenue lors du déplacement des messages vers la nouvelle boîte. Seul %2$d message sur %1$s a été déplacé.',
		2 => 'Une erreur est survenue lors du déplacement des messages vers la nouvelle boîte. Seuls %2$d messages sur %1$s ont été déplacés.',
	],
	'MOVE_TO_FOLDER' => 'Déplacer vers la boîte',
	'MOVE_UP'        => 'Monter',

	'NEW_FOLDER_NAME'            => 'Nom de la nouvelle boîte',
	'NEW_PASSWORD'               => 'Nouveau mot de passe',
	'NEW_PASSWORD_CONFIRM_EMPTY' => 'Vous devez spécifier le mot de passe de confirmation.',
	'NEW_PASSWORD_ERROR'         => 'Les mots de passe que vous avez spécifiés ne concordent pas.',

	'NOTIFICATIONS_MARK_ALL_READ'           => 'Marquer les notifications comme lues',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'   => 'Êtes-vous sûr de vouloir marquer les notifications comme lues ?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'   => 'Les notifications ont été marquées comme lues.',
	'NOTIFICATION_GROUP_MISCELLANEOUS'      => 'Notifications diverses',
	'NOTIFICATION_GROUP_MODERATION'         => 'Notifications de modération',
	'NOTIFICATION_GROUP_ADMINISTRATION'     => 'Notifications d’administration',
	'NOTIFICATION_GROUP_POSTING'            => 'Notifications de publication',
	'NOTIFICATION_METHOD_BOARD'             => 'Notifications',
	'NOTIFICATION_METHOD_EMAIL'             => 'Courriel',
	'NOTIFICATION_METHOD_JABBER'            => 'Jabber',
	'NOTIFICATION_TYPE'                     => 'Type de notification',
	'NOTIFICATION_TYPE_BOOKMARK'            => 'Quelqu’un a répondu à un sujet que vous avez ajouté aux favoris',
	'NOTIFICATION_TYPE_GROUP_REQUEST'       => 'Quelqu’un a demandé à rejoindre un groupe dont vous êtes responsable',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE' => 'Un sujet ou un message est en attente d’approbation',
	'NOTIFICATION_TYPE_MODERATION_QUEUE'    => 'Un de vos sujets ou de vos messages ont été traités par un modérateur',
	'NOTIFICATION_TYPE_PM'                  => 'Quelqu’un vous a envoyé un message privé',
	'NOTIFICATION_TYPE_POST'                => 'Quelqu’un a répondu à un sujet auquel vous êtes abonné',
	'NOTIFICATION_TYPE_QUOTE'               => 'Quelqu’un vous a cité dans un message',
	'NOTIFICATION_TYPE_REPORT'              => 'Quelqu’un a rapporté un message',
	'NOTIFICATION_TYPE_TOPIC'               => 'Quelqu’un a créé un sujet dans un forum auquel vous êtes abonné',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER' => 'Un utilisateur est en attente d’activation',

	'NOTIFY_METHOD'               => 'Méthode de notification',
	'NOTIFY_METHOD_BOTH'          => 'Tous les deux',
	'NOTIFY_METHOD_EMAIL'         => 'Courriel uniquement',
	'NOTIFY_METHOD_EXPLAIN'       => 'La méthode d’envoi des messages qui sont envoyés depuis ce forum.',
	'NOTIFY_METHOD_IM'            => 'Jabber uniquement',
	'NOTIFY_ON_PM'                => 'M’envoyer une notification lors de la réception d’un nouveau message privé',
	'NOT_ADDED_FRIENDS_ANONYMOUS' => 'Vous ne pouvez pas ajouter en ami des utilisateurs anonymes.',
	'NOT_ADDED_FRIENDS_BOTS'      => 'Vous ne pouvez pas ajouter en ami des robots.',
	'NOT_ADDED_FRIENDS_FOES'      => 'Vous ne pouvez pas ajouter en ami des utilisateurs ignorés.',
	'NOT_ADDED_FRIENDS_SELF'      => 'Vous ne pouvez pas vous ajouter en ami.',
	'NOT_ADDED_FOES_MOD_ADMIN'    => 'Vous ne pouvez pas ignorer des administrateurs et des modérateurs.',
	'NOT_ADDED_FOES_ANONYMOUS'    => 'Vous ne pouvez pas ignorer des utilisateurs anonymes.',
	'NOT_ADDED_FOES_BOTS'         => 'Vous ne pouvez pas ignorer des robots.',
	'NOT_ADDED_FOES_FRIENDS'      => 'Vous ne pouvez pas ignorer des utilisateurs amis.',
	'NOT_ADDED_FOES_SELF'         => 'Vous ne pouvez pas vous ignorer.',
	'NOT_AGREE'                   => 'Je refuse ces conditions',
	'NOT_ENOUGH_SPACE_FOLDER'     => 'La boîte de destination « %s » semble être pleine. L’opération n’a pas été prise en compte.',
	'NOT_MOVED_MESSAGES'          => [
		1 => 'Vous avez actuellement %d message privé en attente car la boîte de réception est pleine.',
		2 => 'Vous avez actuellement %d messages privés en attente car la boîte de réception est pleine.',
	],
	'NO_ACTION_MODE'     => 'Aucune opération n’a été sélectionnée.',
	'NO_AUTHOR'          => 'Aucun auteur n’a été spécifié',
	'NO_AVATAR'          => 'Aucun avatar n’a été sélectionné',
	'NO_AVATAR_CATEGORY' => 'Aucune',

	'NO_AUTH_DELETE_MESSAGE'       => 'Vous ne pouvez pas supprimer les messages privés.',
	'NO_AUTH_EDIT_MESSAGE'         => 'Vous ne pouvez pas modifier les messages privés.',
	'NO_AUTH_FORWARD_MESSAGE'      => 'Vous ne pouvez pas transférer les messages privés.',
	'NO_AUTH_GROUP_MESSAGE'        => 'Vous ne pouvez pas envoyer de messages privés aux groupes.',
	'NO_AUTH_PASSWORD_REMINDER'    => 'Vous ne pouvez pas demander un nouveau mot de passe.',
	'NO_AUTH_PROFILEINFO'          => 'Vous ne pouvez pas modifier les informations de votre profil.',
	'NO_AUTH_READ_HOLD_MESSAGE'    => 'Vous ne pouvez pas consulter les messages privés qui sont en liste d’attente.',
	'NO_AUTH_READ_MESSAGE'         => 'Vous ne pouvez pas consulter les messages privés.',
	'NO_AUTH_READ_REMOVED_MESSAGE' => 'Vous ne pouvez pas consulter ce message car il a été supprimé par son auteur.',
	'NO_AUTH_SEND_MESSAGE'         => 'Vous ne pouvez pas envoyer de messages privés.',
	'NO_AUTH_SIGNATURE'            => 'Vous ne pouvez pas définir une signature.',

	'NO_BCC_RECIPIENT'      => 'Aucun',
	'NO_BOOKMARKS'          => 'Aucun favori n’a été ajouté.',
	'NO_BOOKMARKS_SELECTED' => 'Aucun favori n’a été sélectionné.',
	'NO_EDIT_READ_MESSAGE'  => 'Le message privé ne peut plus être modifié car il a été consulté.',
	'NO_EMAIL_USER'         => 'L’email ou le nom d’utilisateur souhaité est introuvable.',
	'NO_FOES'               => 'Aucun ignoré',
	'NO_FRIENDS'            => 'Aucun ami',
	'NO_FRIENDS_OFFLINE'    => 'Aucun ami n’est hors-ligne',
	'NO_FRIENDS_ONLINE'     => 'Aucun ami n’est en ligne',
	'NO_GROUP_SELECTED'     => 'Aucun groupe n’a été spécifié.',
	'NO_IMPORTANT_NEWS'     => 'Aucune annonce importante n’a été publiée.',
	'NO_MESSAGE'            => 'Le message privé est introuvable.',
	'NO_NEW_FOLDER_NAME'    => 'Vous devez saisir un nouveau nom de boîte.',
	'NO_NEWER_PM'           => 'Aucun nouveau message.',
	'NO_OLDER_PM'           => 'Aucun ancien message.',
	'NO_PASSWORD_SUPPLIED'  => 'Vous ne pouvez pas vous connecter sans saisir de mot de passe.',
	'NO_RECIPIENT'          => 'Aucun destinataire n’a été spécifié.',
	'NO_RULES_DEFINED'      => 'Aucune règle n’a été spécifiée.',
	'NO_SAVED_DRAFTS'       => 'Aucun brouillon n’a été enregistré.',
	'NO_TO_RECIPIENT'       => 'Aucun',
	'NO_WATCHED_FORUMS'     => 'Aucun abonnement à un forum.',
	'NO_WATCHED_SELECTED'   => 'Aucun abonnement à un forum ou un sujet n’a été sélectionné.',
	'NO_WATCHED_TOPICS'     => 'Aucun abonnement à un sujet.',

	'PASS_TYPE_ALPHA_EXPLAIN'        => 'Le mot de passe doit être compris entre %1$s et %2$s de long, doit contenir des lettres (sans accent) en majuscules et en minuscules et doit contenir des chiffres.',
	'PASS_TYPE_ANY_EXPLAIN'          => 'Doit être compris entre %1$s et %2$s.',
	'PASS_TYPE_CASE_EXPLAIN'         => 'Le mot de passe doit être compris entre %1$s et %2$s de long et doit contenir des lettres en majuscules et en minuscules.',
	'PASS_TYPE_SYMBOL_EXPLAIN'       => 'Le mot de passe doit être compris entre %1$s et %2$s de long, doit contenir des lettres en majuscules et en minuscules, doit contenir des chiffres et doit contenir des symboles.',
	'PASSWORD'                       => 'Mot de passe',
	'PASSWORD_ACTIVATED'             => 'Votre nouveau mot de passe a été activé.',
	'PASSWORD_UPDATED'               => 'Un nouveau mot de passe a été envoyé à l’email que vous avez spécifié.',
	'PERMISSIONS_RESTORED'           => 'Les permissions par défaut ont été restaurées.',
	'PERMISSIONS_TRANSFERRED'        => 'Les permissions de « %s » ont été transférées. Vous pouvez à présent parcourir le forum avec les permissions de cet utilisateur.<br />Veuillez noter que les permissions d’administration ne sont pas transférées. Vous pouvez restaurer vos permissions à tout moment.',
	'PM_DISABLED'                    => 'La messagerie privée a été désactivée sur ce forum.',
	'PM_FROM'                        => 'Par',
	'PM_FROM_REMOVED_AUTHOR'         => 'Le message privé a été envoyé par un utilisateur qui n’est désormais plus inscrit.',
	'PM_ICON'                        => 'Icône de MP',
	'PM_INBOX'                       => 'Boîte de réception',
	'PM_MARK_ALL_READ'               => 'Marquer les messages privés comme lus',
	'PM_MARK_ALL_READ_SUCCESS'       => 'Les messages privés de ce dossier ont été marqués comme lus',
	'PM_NO_USERS'                    => 'Les utilisateurs que vous souhaitez ajouter sont introuvables.',
	'PM_OUTBOX'                      => 'Boîte d’envoi',
	'PM_SENTBOX'                     => 'Messages envoyés',
	'PM_SUBJECT'                     => 'Sujet du message',
	'PM_TO'                          => 'Envoyer à',
	'PM_TOOLS'                       => 'Outils du message',
	'PM_USERS_REMOVED_NO_PERMISSION' => 'Certains utilisateurs ne peuvent pas être ajoutés car ils ne sont pas autorisés à consulter les messages privés.',
	'PM_USERS_REMOVED_NO_PM'         => 'Certains utilisateurs ne peuvent pas être ajoutés car ils ont désactivés la réception de messages privés.',
	'POST_EDIT_PM'                   => 'Modifier le message',
	'POST_FORWARD_PM'                => 'Transférer le message',
	'POST_NEW_PM'                    => 'Rédiger un message',
	'POST_PM_LOCKED'                 => 'La messagerie privée est verrouillée.',
	'POST_PM_POST'                   => 'Citer le message',
	'POST_QUOTE_PM'                  => 'Citer le message',
	'POST_REPLY_PM'                  => 'Répondre au message',
	'PRINT_PM'                       => 'Aperçu avant impression',
	'PREFERENCES_UPDATED'            => 'Vos préférences ont été mises à jour.',
	'PROFILE_INFO_NOTICE'            => 'Veuillez noter que ces informations peuvent être visibles aux autres membres. Soyez prudent lors de la saisie d’informations personnelles. Tous les champs marqués par « * » sont obligatoires.',
	'PROFILE_UPDATED'                => 'Votre profil a été mis à jour.',
	'PROFILE_AUTOLOGIN_KEYS'         => 'Les clés de connexions automatiques vous permettent de vous connecter automatiquement lors de vos différentes visites sur le forum. Si vous vous déconnectez, la clé de connexion automatique ne sera supprimée que de l’ordinateur que vous utilisiez au moment de votre déconnexion. Depuis cette page, vous pouvez consulter les clés de connexions automatiques générées sur les ordinateurs qui ont été utilisés afin d’accéder à ce forum.',
	'PROFILE_NO_AUTOLOGIN_KEYS'      => 'Aucune clé de connexion automatique n’a été sauvegardée.',

	'RECIPIENT'                         => 'Destinataire',
	'RECIPIENTS'                        => 'Destinataires',
	'REGISTRATION'                      => 'Inscription',
	'RELEASE_MESSAGES'                  => '%sRendre disponible tous les messages en liste d’attente%s… Ils seront triés de nouveau dans les boîtes appropriées si assez d’espace a été libéré.',
	'REMOVE_ADDRESS'                    => 'Supprimer l’adresse',
	'REMOVE_SELECTED_BOOKMARKS'         => 'Supprimer les sujets sélectionnés des favoris',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ces sujets de vos favoris ?',
	'REMOVE_BOOKMARK_MARKED'            => 'Supprimer les sujets sélectionnés des favoris',
	'REMOVE_FOLDER'                     => 'Supprimer la boîte',
	'REMOVE_FOLDER_CONFIRM'             => 'Êtes-vous sûr de vouloir supprimer cette boîte ?',
	'RENAME'                            => 'Renommer',
	'RENAME_FOLDER'                     => 'Renommer la boîte',
	'REPLIED_MESSAGE'                   => 'Réponse au message',
	'REPLY_TO_ALL'                      => 'Répondre à l’expéditeur et à tous les destinataires.',
	'REPORT_PM'                         => 'Rapporter le message privé',
	'RESIGN_SELECTED'                   => 'Décocher la sélection',
	'RETURN_FOLDER'                     => '%1$sRevenir sur la boîte précédente%2$s',
	'RETURN_UCP'                        => '%sRevenir sur le panneau de contrôle de l’utilisateur%s',
	'RULE_ADDED'                        => 'La règle a été ajoutée.',
	'RULE_ALREADY_DEFINED'              => 'Cette règle a déjà été spécifiée.',
	'RULE_DELETED'                      => 'La règle a été supprimée.',
	'RULE_LIMIT_REACHED'                => 'Vous ne pouvez pas ajouter plus de règles de MP car vous avez atteint la limite.',
	'RULE_NOT_DEFINED'                  => 'La règle n’est pas correctement spécifiée.',
	'RULE_REMOVED_MESSAGES'             => [
		1 => '%d message privé a été supprimé par les filtres de la messagerie privée.',
		2 => '%d messages privés ont été supprimés par les filtres de la messagerie privée.',
	],

	'SAME_PASSWORD_ERROR' => 'Le mot de passe que vous avez spécifié est identique à votre mot de passe actuel.',
	'SEARCH_YOUR_POSTS'   => 'Afficher vos messages',
	'SEND_PASSWORD'       => 'Envoyer le mot de passe',
	'SENT_AT'             => 'Date d’envoi', // Used before dates in private messages
	'SHOW_EMAIL'          => 'Autoriser les utilisateurs à me contacter par courriel',
	'SIGNATURE_EXPLAIN'   => 'La signature est un bloc de texte qui sera inséré au pied de tous vos messages. Elle est limitée à %d caractères.',
	'SIGNATURE_PREVIEW'   => 'Votre signature apparaîtra comme ceci dans tous vos messages',
	'SIGNATURE_TOO_LONG'  => 'Votre signature est trop longue.',
	'SELECT_CURRENT_TIME' => 'Régler l’heure actuelle',
	'SELECT_TIMEZONE'     => 'Régler le fuseau horaire',
	'SORT'                => 'Trier par',
	'SORT_COMMENT'        => 'Description du fichier',
	'SORT_DOWNLOADS'      => 'Téléchargements',
	'SORT_EXTENSION'      => 'Extension',
	'SORT_FILENAME'       => 'Nom du fichier',
	'SORT_POST_TIME'      => 'Date de publication',
	'SORT_SIZE'           => 'Taille du fichier',

	'TIMEZONE'                 => 'Fuseau horaire',
	'TIMEZONE_DATE_SUGGESTION' => 'Suggestion : %s',
	'TIMEZONE_INVALID'         => 'Le fuseau horaire que vous avez spécifié est invalide.',
	'TO'                       => 'Destinataire',
	'TO_MASS'                  => 'Destinataires',
	'TO_ADD'                   => 'Ajouter un destinataire',
	'TO_ADD_MASS'              => 'Ajouter des destinataires',
	'TO_ADD_GROUPS'            => 'Ajouter des groupes d’utilisateurs',
	'TOO_MANY_RECIPIENTS'      => 'Vous ne pouvez pas envoyer de message privé à autant de destinataires.',
	'TOO_MANY_REGISTERS'       => 'Vous avez dépassé la limite de tentatives d’inscriptions lors de cette session. Veuillez réessayer ultérieurement.',

	'UCP'                         => 'Panneau de contrôle de l’utilisateur',
	'UCP_ACTIVATE'                => 'Activer le compte',
	'UCP_ADMIN_ACTIVATE'          => 'Veuillez noter que vous devez saisir une adresse de courriel valide afin que votre compte soit activé. Un administrateur vérifiera votre compte. S’il est approuvé, vous recevrez un courriel à l’adresse de courriel que vous avez spécifiée.',
	'UCP_ATTACHMENTS'             => 'Pièces jointes',
	'UCP_AUTH_LINK'               => 'Comptes externes',
	'UCP_AUTH_LINK_ASK'           => 'Aucun compte n’est associé à ce service externe. Veuillez cliquer sur le bouton ci-dessous afin d’associer votre compte de ce forum à un compte de ce service externe.',
	'UCP_AUTH_LINK_ID'            => 'Identifiant unique',
	'UCP_AUTH_LINK_LINK'          => 'Associer',
	'UCP_AUTH_LINK_MANAGE'        => 'Gérer les associations aux comptes externes',
	'UCP_AUTH_LINK_NOT_SUPPORTED' => 'L’association de comptes du forum à des services externes n’est pas prise en charge par la méthode d’authentification de ce forum.',
	'UCP_AUTH_LINK_TITLE'         => 'Gérer vos associations aux comptes externes',
	'UCP_AUTH_LINK_UNLINK'        => 'Dissocier',
	'UCP_COPPA_BEFORE'            => 'Avant le %s',
	'UCP_COPPA_ON_AFTER'          => 'Le ou après le %s',
	'UCP_EMAIL_ACTIVATE'          => 'Veuillez noter que vous devez saisir une adresse de courriel valide afin que votre compte soit activé. Vous recevrez un courriel qui contiendra le lien d’activation à l’adresse de courriel que vous avez spécifiée.',
	'UCP_JABBER'                  => 'Adresse Jabber',
	'UCP_LOGIN_LINK'              => 'Associer un compte externe',

	'UCP_MAIN'             => 'Vue d’ensemble',
	'UCP_MAIN_ATTACHMENTS' => 'Gérer les pièces jointes',
	'UCP_MAIN_BOOKMARKS'   => 'Gérer les favoris',
	'UCP_MAIN_DRAFTS'      => 'Gérer les brouillons',
	'UCP_MAIN_FRONT'       => 'Page principale',
	'UCP_MAIN_SUBSCRIBED'  => 'Gérer les abonnements',

	'UCP_NO_ATTACHMENTS' => 'Aucune pièce jointe n’a été insérée.',

	'UCP_NOTIFICATION_LIST'            => 'Gérer les notifications',
	'UCP_NOTIFICATION_LIST_EXPLAIN'    => 'Depuis cette page, vous pouvez consulter l’historique de vos notifications.',
	'UCP_NOTIFICATION_OPTIONS'         => 'Modifier les méthodes de notification',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN' => 'Depuis cette page, vous pouvez définir les méthodes de notification du forum.',

	'UCP_PREFS'          => 'Préférences du forum',
	'UCP_PREFS_PERSONAL' => 'Modifier les paramètres généraux',
	'UCP_PREFS_POST'     => 'Modifier les préférences de publication par défaut',
	'UCP_PREFS_VIEW'     => 'Modifier les options d’affichage',

	'UCP_PM'         => 'Messages privés',
	'UCP_PM_COMPOSE' => 'Rédiger un message',
	'UCP_PM_DRAFTS'  => 'Gérer les brouillons de MP',
	'UCP_PM_OPTIONS' => 'Boîtes, règles et paramètres',
	'UCP_PM_UNREAD'  => 'Messages non lus',
	'UCP_PM_VIEW'    => 'Consulter les messages',

	'UCP_PROFILE'                => 'Profil',
	'UCP_PROFILE_AVATAR'         => 'Modifier l’avatar',
	'UCP_PROFILE_PROFILE_INFO'   => 'Modifier le profil',
	'UCP_PROFILE_REG_DETAILS'    => 'Modifier les paramètres du compte',
	'UCP_PROFILE_SIGNATURE'      => 'Modifier la signature',
	'UCP_PROFILE_AUTOLOGIN_KEYS' => 'Gérer les clés de connexions automatiques',

	'UCP_USERGROUPS'        => 'Groupes d’utilisateurs',
	'UCP_USERGROUPS_MEMBER' => 'Modifier les adhésions',
	'UCP_USERGROUPS_MANAGE' => 'Gérer les groupes',

	'UCP_PASSWORD_RESET_DISABLED'         => 'La réinitialisation des mots de passe a été désactivée. Si vous souhaitez obtenir de l’aide afin d’accéder à votre compte, veuillez contacter un %sadministrateur du site%s',
	'UCP_REGISTER_DISABLE'                => 'L’inscription de nouveaux comptes est désactivée.',
	'UCP_REMIND'                          => 'Envoyer le mot de passe',
	'UCP_RESEND'                          => 'Envoyer l email d’activation',
	'UCP_WELCOME'                         => 'Bienvenue sur le panneau de contrôle de l’utilisateur. Dans ce dernier, vous pouvez consulter et mettre à jour votre profil, vos préférences et vos abonnements aux forums et aux sujets. Si les administrateurs du forum ont activé la messagerie privée, vous pouvez également envoyer des messages aux autres utilisateurs. Veuillez vous assurer d’avoir consulté toutes les annonces avant de continuer.',
	'UCP_ZEBRA'                           => 'Amis et ignorés',
	'UCP_ZEBRA_FOES'                      => 'Gérer les ignorés',
	'UCP_ZEBRA_FRIENDS'                   => 'Gérer les amis',
	'UNDISCLOSED_RECIPIENT'               => 'Destinataire confidentiel',
	'UNKNOWN_FOLDER'                      => 'Boîte inconnue',
	'UNWATCH_MARKED'                      => 'Ne plus surveiller la sélection',
	'UPLOAD_AVATAR_FILE'                  => 'Transférer depuis votre ordinateur',
	'UPLOAD_AVATAR_URL'                   => 'Transférer depuis un lien',
	'UPLOAD_AVATAR_URL_EXPLAIN'           => 'Saisissez le lien vers l’image. L’image sera ensuite copiée sur ce forum.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'         => 'Le nom d’utilisateur doit être compris entre %1$s et %2$s de long et ne doit contenir que des lettres (sans accent) et des chiffres.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'      => 'Le nom d’utilisateur doit être compris entre %1$s et %2$s de long et ne doit contenir que des lettres (sans accent), des chiffres, des espaces, des tirets bas, des crochets et des signes plus et moins.',
	'USERNAME_ASCII_EXPLAIN'              => 'Le nom d’utilisateur doit être compris entre %1$s et %2$s de long et ne doit contenir aucun symbole spécial, seulement des caractères ASCII.',
	'USERNAME_LETTER_NUM_EXPLAIN'         => 'Le nom d’utilisateur doit être compris entre %1$s et %2$s de long et ne doit contenir que des lettres et des chiffres.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN' => 'Le nom d’utilisateur doit être compris entre %1$s et %2$s de long et ne doit contenir que des lettres, des chiffres, des espaces, des tirets bas, des crochets et des signes plus et moins.',
	'USERNAME_CHARS_ANY_EXPLAIN'          => 'Doit être compris entre %1$s et %2$s.',
	'USERNAME_TAKEN_USERNAME'             => 'Le nom d’utilisateur que vous avez spécifié est déjà utilisé. Veuillez en sélectionner un autre.',
	'USERNAME_DISALLOWED_USERNAME'        => 'Le nom d’utilisateur que vous avez spécifié a été interdit ou contient un mot interdit. Veuillez en sélectionner un autre.',
	'USER_NOT_FOUND_OR_INACTIVE'          => 'Les noms d’utilisateurs que vous avez spécifiés sont introuvables ou ces utilisateurs ne sont pas encore activés.',

	'VIEW_AVATARS'      => 'Afficher les avatars',
	'VIEW_EDIT'         => 'Consulter et modifier',
	'VIEW_FLASH'        => 'Afficher les animations Flash',
	'VIEW_IMAGES'       => 'Afficher les images dans les messages',
	'VIEW_NEXT_HISTORY' => 'MP suivant dans l’ordre chronologique',
	'VIEW_NEXT_PM'      => 'MP suivant',
	'VIEW_PM'           => 'Consulter le message',
	'VIEW_PM_INFO'      => 'Informations sur le message',
	'VIEW_PM_MESSAGES'  => [
		1 => '%d message',
		2 => '%d messages',
	],
	'VIEW_PREVIOUS_HISTORY' => 'MP précédent dans l’ordre chronologique',
	'VIEW_PREVIOUS_PM'      => 'MP précédent',
	'VIEW_PROFILE'          => 'Consulter le profil',
	'VIEW_SIGS'             => 'Afficher les signatures',
	'VIEW_SMILIES'          => 'Afficher les émoticônes comme des images',
	'VIEW_TOPICS_DAYS'      => 'Afficher les sujets triés selon leur ancienneté',
	'VIEW_TOPICS_DIR'       => 'Afficher les sujets triés par ordre',
	'VIEW_TOPICS_KEY'       => 'Afficher les sujets triés par',
	'VIEW_POSTS_DAYS'       => 'Afficher les messages triés selon leur ancienneté',
	'VIEW_POSTS_DIR'        => 'Afficher les messages triés par ordre',
	'VIEW_POSTS_KEY'        => 'Afficher les messages triés par',

	'WATCHED_EXPLAIN'  => 'La liste ci-dessous vous affiche les forums et les sujets auxquels vous êtes abonné. Vous recevrez une notification à chaque fois qu’un nouveau message est publié dans un de ces derniers. Si vous souhaitez vous désabonner d’un forum ou d’un sujet, sélectionnez-le puis cliquez sur le bouton « Ne plus surveiller la sélection ».',
	'WATCHED_FORUMS'   => 'Forums auxquels vous êtes abonné',
	'WATCHED_TOPICS'   => 'Sujets auxquels vous êtes abonné',
	'WRONG_ACTIVATION' => 'La clé d’activation que vous avez spécifiée est inconnue de notre base de données.',

	'YOUR_DETAILS'         => 'Votre activité',
	'YOUR_FOES'            => 'Vos ignorés',
	'YOUR_FOES_EXPLAIN'    => 'Pour supprimer des noms d’utilisateurs, sélectionnez-les et envoyez les données.',
	'YOUR_FRIENDS'         => 'Vos amis',
	'YOUR_FRIENDS_EXPLAIN' => 'Pour supprimer des noms d’utilisateurs, sélectionnez-les et envoyez les données.',
	'YOUR_WARNINGS'        => 'Votre niveau d’avertissement',

	'PM_ACTION' => [
		'PLACE_INTO_FOLDER' => 'Placer dans la boîte',
		'MARK_AS_READ'      => 'Marquer comme lu',
		'MARK_AS_IMPORTANT' => 'Marquer le message',
		'DELETE_MESSAGE'    => 'Supprimer le message',
	],
	'PM_CHECK' => [
		'SUBJECT' => 'Sujet',
		'SENDER'  => 'Expéditeur',
		'MESSAGE' => 'Message',
		'STATUS'  => 'Statut du message',
		'TO'      => 'Envoyé à',
	],
	'PM_RULE' => [
		'IS_LIKE'     => 'est comme',
		'IS_NOT_LIKE' => 'n’est pas comme',
		'IS'          => 'est',
		'IS_NOT'      => 'n’est pas',
		'BEGINS_WITH' => 'commence par',
		'ENDS_WITH'   => 'termine par',
		'IS_FRIEND'   => 'est un ami',
		'IS_FOE'      => 'est un ignoré',
		'IS_USER'     => 'est un utilisateur',
		'IS_GROUP'    => 'est dans un groupe d’utilisateurs',
		'ANSWERED'    => 'répondu',
		'FORWARDED'   => 'transféré',
		'TO_GROUP'    => 'à mon groupe d’utilisateurs par défaut',
		'TO_ME'       => 'à moi',
	],

	'GROUPS_EXPLAIN'  => 'Les groupes d’utilisateurs permettent aux administrateurs de gérer plus facilement les utilisateurs. Dès votre inscription, vous êtes automatiquement membre d’un groupe d’utilisateurs par défaut. Ce groupe spécifie votre apparence auprès des autres utilisateurs, grâce à, par exemple, une colorisation de votre nom d’utilisateur, un avatar, un rang, etc. Selon la politique des administrateurs du forum, vous pouvez être autorisé à modifier votre groupe d’utilisateurs par défaut, à être membre de plusieurs groupes d’utilisateurs et à rejoindre de nouveaux groupes d’utilisateurs. Certains groupes d’utilisateurs peuvent vous procurer des permissions supplémentaires qui vous permettront de consulter du contenu exclusif ou de profiter de nouvelles fonctionnalités dans d’autres domaines.',
	'GROUP_LEADER'    => 'Responsable',
	'GROUP_MEMBER'    => 'Membre',
	'GROUP_PENDING'   => 'Membre en attente',
	'GROUP_NONMEMBER' => 'Non-membre',
	'GROUP_DETAILS'   => 'Informations sur le groupe',

	'NO_LEADER'    => 'Aucun responsable du groupe',
	'NO_MEMBER'    => 'Aucun membre du groupe',
	'NO_PENDING'   => 'Aucun membre en attente',
	'NO_NONMEMBER' => 'Aucun non-membre du groupe',
]);
