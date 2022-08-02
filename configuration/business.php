<?php
#business['local']['status']['name']
$business = array(
	'local' => array(
		'born' => '', /*exemple Day/Month/Year number only indicate age */
		'name' => 'Atelier Carpentier',/*IF empty variable output not show public/not use*/
		'siret' => '79321907200014',
		'tva' => 'FR72793219072',
		'vat' => '',
		'address' => '31 avenue jean moulin',
		'postal' => '77200',
		'city' => 'Torcy',
		'region' => 'Ile-De-France',
		'contry' => 'France',
		'status' => 'SARL', /*Special status on france SASU, SARL, SAS, etc...*/
		'geo' => array(
		/*Pratical for use Google map JS/Mapbox or other*/
			'latitude' => '48.838382720947266',
			'longitude' => '2.656898021697998'
		),
		'mobile' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '667275050',
			'longs' => '6 67 27 50 50',
		),
		'phone' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '160061998',
			'longs' => '1 60 06 19 98',
		),
		'fax' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '',
		),
		'mail' => array(
			'contact' => 'contact',
			'support' => 'contact',
			'commercial' => 'contact',
			'sponsor' => 'contact',
			'partner' => 'contact',
			'business' => 'contact'
		),
		'team' => array(
		/*exemple*/
			'john' => array(
				'name' => 'John',
				'url' => 'john.tld'
			),
			'bob' => array(
				'name' => 'bob',
				'url' => 'bob.tld'
			)
			/* Custom your own here */
		)
	),
	'external' => array(
		/*exemple*/
		'london' => array(
			'' => ''
		)
		/*Custom your own here*/
	)
);

$JE_business = json_encode($business);

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