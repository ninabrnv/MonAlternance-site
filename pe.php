<?php

$token_url = "https://entreprise.pole-emploi.fr/connexion/oauth2/access_token?realm=/partenaire";

$test_api_url = "api_offresdemploiv1";

//	client (application) credentials on apim.byu.edu
$client_id = "PAR_emploistore_bf87e6d7b85a8e6ef82076708e166aa38ec4f234e6feba4baf4707d95f87494f";
$client_secret = "5416bd7bd617dcf30c6fa5a32a90fd7a366cb9b0e93e29629ca6403ddcf2dc93";



$access_token = getAccessToken();
$resource = getResource($access_token);
echo $resource;



//	step A, B - single call with client credentials as the basic auth header
//		will return access_token
function getAccessToken() {
	global $token_url, $client_id, $client_secret;

	$content = "grant_type=client_credentials";
	$authorization = base64_encode("$client_id:$client_secret");
	$header = array("Authorization: Basic {$authorization}","Content-Type: application/x-www-form-urlencoded");

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $token_url,
		CURLOPT_HTTPHEADER => $header,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $content
	));
	$response = curl_exec($curl);
	curl_close($curl);

	return json_decode($response)->access_token;
}

//	step B - with the returned access_token we can make as many calls as we want
function getResource($access_token) {
	global $test_api_url;

	$header = array("Authorization: Bearer {$access_token}");

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $test_api_url,
		CURLOPT_HTTPHEADER => $header,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true
	));
	$response = curl_exec($curl);
	curl_close($curl);

	return json_decode($response, true);
}

?>
