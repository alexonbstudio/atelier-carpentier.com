<?php
# $private['mail']['public']

$private = array(
	'born' => '', /*exemple Day/Month/Year number only indicate age */
	'name' => '',/*IF empty variable output not show public/not use*/
	'address' => '',
	'postal' => '75000',
	'city' => 'Paris',
	'region' => 'Paris',
	'contry' => 'France',
	'phone' => array(
		'code' => '+33',
		'normal' => '0',
		'number' => '',
	),
	'mobile' => array(
		'code' => '+33',
		'normal' => '0',
		'number' => '',
	),
	'fax' => array(
		'code' => '+33',
		'normal' => '0',
		'number' => '',
	),
	'mail' => array(
		'public' => '', /*IF yes domain name or not indicate use mail private -> @ -> external = gamil.com*/
		'private' => 'atelier.carpentier', /* *@gmail.com down is gmail.com*/
		'@' => array(
			'external' => 'gmail.com'
		)
	)
);

$JE_private = json_encode($private);

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