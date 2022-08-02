<?php 
$minifier->add($version['internal']['custom']['css']['tplsgen']);
$minifier->add($version['internal']['custom']['css']['tpl']);
$minifier->add($version['internal']['custom']['css']['tplsgen']);
$minifier->add($version['external']['boxicons']['css']);
$minifier->add($version['external']['icofont']['css']);
$minifier->minify('assets/combined/css/main.css');
#echo $minifier->minify();
?>


