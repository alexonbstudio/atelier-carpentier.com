<?php
# exemple $images['dir'].'/'.$images['manager']['home']['certifier']['1']
# exemple $images['manager']['home']['activities']['1']

$images = array(
	'manager' => array(
		/*Manager Images for Template */
		'logo' => array(
			'icon' => 'pinned/favicon.ico', /*ICO recommended oversize */
			'normal' => 'themes/logo-v4.png', /*size recommended ~60x60 */
			'small' => 'pinned/favicon-32x32.png', /*size recommended ~32x32 = favicon on PNG */
			'big' => 'themes/logo-v4.png' /*size recommended ~200x200 */
		),
		/*Manager Images for SEO PINNED (Windows, Apple, Android/Safari, chrome) */
		'pinned' => array(
			's:70x70' => 'pinned/mstile-70x70.png',
			's:150x150' => 'pinned/mstile-150x150.png',
			's:310x310' => 'pinned/mstile-310x310.png',
			's:310x150' => 'pinned/mstile-310x150.png',
			's:192x192' => 'pinned/android-chrome-192x192.png',
			'safari' => 'pinned/safari-pinned-tab.svg',
			's:144x144' => 'pinned/mstile-144x144.png',
			's:180x180' => 'pinned/apple-touch-icon-180x180.png',
			's:32x32' => 'pinned/favicon-32x32.png',
			's:16x16' => 'pinned/favicon-16x16.png',
			's:57x57' => 'pinned/apple-touch-icon-57x57.png',
			's:60x60' => 'pinned/apple-touch-icon-60x60.png',
			's:72x72' => 'pinned/apple-touch-icon-72x72.png',
			's:76x76' => 'pinned/apple-touch-icon-76x76.png',
			's:114x114' => 'pinned/apple-touch-icon-114x114.png',
			's:120x120' => 'pinned/apple-touch-icon-120x120.png',
			's:152x152' => 'pinned/apple-touch-icon-152x152.png'
		),
		'background' => array(
			'slide' => 'background/bg-logo-v4.jpg'
		),
		'home' => array(
			'founisseur' => array(
				'1' => 'fournisseur/ACCUEIL/atlantic.png',
				'2' => 'fournisseur/ACCUEIL/elm-leblanc.png',
				'3' => 'fournisseur/ACCUEIL/fichet.png',
				'4' => 'fournisseur/ACCUEIL/legrand.png',
				'5' => 'fournisseur/ACCUEIL/velux.png'
			),
			'certifier' => array(
				'1' => 'certifier/artisan.jpg',
				'2' => 'certifier/les-compagnons-du-devoir.jpg',
				'3' => 'certifier/qualibat.jpg',
				'4' => 'certifier/rge-eco-artisan.jpg',
				'10-ans' => 'certifier/10ans-décennale.png'
			),
			'clients' => array(
				'avis' => array(
					'1' => 'avis/avis1.png',
					'2' => 'avis/avis2.png',
					'3' => 'avis/avis3.png',
					'4' => 'avis/avis4.png',
					'5' => 'avis/avis5.png',
					'6' => 'avis/avis6.png'
				)
			),
			'activities' => array(
				'1' => 'activity/picto-1.png',
				'2' => 'activity/picto-2.png',
				'3' => 'activity/picto-3.png',
				'4' => 'activity/picto-4.png',
				'5' => 'activity/picto-5.png',
				'6' => 'activity/picto-6.png',
				'7' => 'activity/picto-7.png'
			)
		)
	),
	'dir' => 'images'
);

$JE_images = json_encode($images);

?>