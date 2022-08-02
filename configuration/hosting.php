<?php
# $hosting['server']['external']['cloud']['site']
# $hosting['server']['internal']['site']
$hosting = array(
	'server' => array(
		'internal' => array(
			'name' => 'OVH',
			'siret' => '42476141900045',
			'tva' => 'FR22424761419',
			'vat' => '',
			'address' => '2 rue Kellermann',
			'postal' => '59100',
			'city' => 'Roubaix',
			'contry' => 'France',
			'site' => 'ovh.com'
		),
		'external' => array(
			'cloud' => array(
				'google' => array(
					'name' => '',
					'siret' => '',
					'tva' => '',
					'vat' => '',
					'address' => '1600 Amphitheatre Parkway',
					'postal' => 'CA 94043',
					'city' => 'Montain View',
					'contry' => 'Etat-Unis',
					'site' => 'google.com'
				)
			),
			'cdn' => array(
				'cloudflare' => array(
					'name' => '',
					'siret' => '',
					'tva' => '',
					'vat' => '',
					'address' => 'Riverside Building, 6th Floor, County Hall/The, Belvedere Rd',
					'postal' => 'SE1 7PB',
					'city' => 'London',
					'contry' => 'Royaume-Uni',
					'site' => 'cloudflare.com'
				)
			)
		)
	)
);

$JE_hosting = json_encode($hosting);

?>