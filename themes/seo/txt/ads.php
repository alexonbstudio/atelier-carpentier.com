<?php echo '#Info '.$sites['domain'].' Update '.date('d/m/Y'); ?>

<? ##########		----		########## ?>


<?php 
if(!empty($marketing['google']['adsense'])){ echo 'google.com, '.$marketing['google']['adsense'].', RESELLER'; }
echo "\n";
if(!empty($marketing['33Across']['key'])){ echo 'tynt.com, '.$marketing['33Across']['key'].', RESELLER'; }
echo "\n";
if(!empty($marketing['uiz']['key'])){ echo 'uiz.io, '.$marketing['uiz']['key'].', RESELLER'; }
echo "\n";
if(!empty($marketing['awin']['key'])){ echo 'awin.com, pub.'.$marketing['awin']['key'].', RESELLER'; }
echo "\n";
if(!empty($partner['planethoster']['code'])){ echo $partner['planethoster']['sites'].', '.$partner['planethoster']['code'].', RESELLER'; }
echo "\n";
if(!empty($seo['addthis']['key'])){ echo 'addthis.com, '.$seo['addthis']['key'].', RESELLER'; }
echo "\n";
if(!empty($seo['shareaholic']['key'])){ echo 'shareaholic.com, '.$seo['shareaholic']['key'].', RESELLER'; }
?>
