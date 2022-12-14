<?php
/*
exemple $sites['show'];
exemple $sites['update']['rdf'];
exemple $sites['e-mail']['contact'];

*/
$sites = array(
	'name' => 'Atelier Carpentier',
	'domain' => 'atelier-carpentier.com', /*domain: exemple.tld*/
	'auto' => array(
		'domain' => preg_replace('/www./i', '', $_SERVER['SERVER_NAME']) /*Automate domain.tld no put*/
	),
	'email' => array(
		'receive' => 'text' /* [text or icon] (icon: need to use template mailing - contact form you'll receive */
	),
	'sub-domain' => 'cdn.atelier-carpentier.com',  /*domain: cdexemple.tld*/
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'template' => 'mamba',
	'create' => array(),
	'update' => array(
		'rdf' => date('Y-m-d')
	),
	'copyright' => array(
		'frontend' => 'Copyright &copy; '.date('Y'), /*show on template */
		'rdf' => 'Copyright &copy;' /*show only template seo/txt/rdf*/
	),
	'head' => array(
		'robots' => 'index, follow' /*Only show on template header.php | robots meta*/
	),
	'default-timezone' => 'Etc/UTC', /*Docs PHP variable date_default_timezone_set() */
	/*Pricing*/
	'tarifs' => array(
		'<services>' => array(
			'<sector>1' => array(
				'<purpose1>' => '1'
			),
			'<sector>2' => array(
				'<proposition1>' => '10'
			)  
		)
	)
);

$JE_sites = json_encode($sites);

#Secret hidden debug json

#####################################
#									#
#			DATABASE|ADODB			#
#									#
#####################################
/*
$hostDB = 'localhost';
$nameDB = '';
$userDB = '';
$passwdDB = '';
$portDB = 3306;
*/

#####################################
#									#
#			Email|SMTP 				#
#									#
#####################################
/*
$hostMAIL = 'mail.exemple.tld';
$userMAIL = 'user@exemple.tld';
$passwdMAIL = '****';
$portMAIL = 587;
*/




?>