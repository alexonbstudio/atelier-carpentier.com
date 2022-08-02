<?php

$general = array(
	'full' => array(
		'there-is-him' => 'He has',
		'there-is-her' => 'She has',
		'there-iam' => 'I have',
		'year' => 'Years old',
		'website-exist' => 'the site has existed for more than',
		'entreprise-exist' => 'the company has existed for more than'
	),
	'pages' => array(
		'full' => array(
			'starter' => 'Get Started',
			'previous' => 'Previous',
			'next' => 'Next'
		)
	),
	'index' => array(
		'title' => 'Entreprise du bâtiment',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'index',
			'fr' => 'accueil',
			'en' => 'home'
		),
		'content' => array(
			'home' => array(
				'title' => array(
					'1' => 'Service rapide et fiable',
					'2' => 'Intervention rapide en moins d\'une heure',
					'3' => 'Satisfait ou Remboursé'
				),
				'short' => array(
					'1' => '10 ans d\'expériences dans les services et la réparation',
					'2' => '',
					'3' => ''
				),
				'containers' => array(
					
				)
			)
		),
		'sitemap' => array(
			'images' => 'background/bg-slide.jpg',
			'video' => ''  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_general = json_encode($general);

?>