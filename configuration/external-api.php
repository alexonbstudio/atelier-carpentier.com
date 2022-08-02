<?php

$apiexternal = array(
	/*CAPTCHA*/
	'captcha' => array(
		'google' => array(
			'secret' => '',
			'private' => '',
			'public' => ''
		),
		'hcaptcha' => array(
			'secret' => '661b2f10-f52d-44b0-9b9a-92102ffe3a66',
			'private' => '0x6C9FA380ffbf8Aa5D702139144320306a6517b1D',
			'public' => '746e40aa-2cc5-4112-abc3-be5458139d27'
		)
	), 
	/*OTHER*/
	'verify-phone' => '' /**GET your API KEY on https://numverify.com/**/
);

$JE_apiexternal = json_encode($apiexternal);

?>