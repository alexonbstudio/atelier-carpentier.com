<?php 
echo '<browserconfig>
	<msapplication>
		<tile>
            <square70x70logo src="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:70x70'].'"/>
            <square150x150logo src="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:150x150'].'"/>
            <square310x310logo src="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:310x310'].'"/>
            <wide310x150logo src="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:310x150'].'"/>
            <TileColor>'.$seo['browsers']['color']['title'].'</TileColor>
		</tile>
	</msapplication>
</browserconfig>
';
?>