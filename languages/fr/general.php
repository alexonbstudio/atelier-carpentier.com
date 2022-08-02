<?php
#$general['pages']['full']['previous']
#$general['index']['content']['home']['title']['1']
$general = array(
	'full' => array(
		'there-is-him' => 'Il a',
		'there-is-her' => 'Elle a',
		'there-iam' => 'J\'ai',
		'year' => 'Ans',
		'website-exist' => 'le site existe depuis plus de',
		'entreprise-exist' => 'la société existe depuis plus de'
	),
	'pages' => array(
		'full' => array(
			'starter' => 'Démarrer',
			'previous' => 'Précédent',
			'next' => 'Suivant'
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