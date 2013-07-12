

<!--/div-->
<div style="width:550px; margin-top:20px">
	<p style="font-family: 'Roboto',sans-serif;font-size: 26px; color:#000">Headlines</p>
	
	<?php
		if (strtoupper($info->symbol)=="NERO") {
			echo "</br></br>";
	        echo "<a style=\"color:#000;font-size:18px\"href=\"http://www.sec.gov/Archives/edgar/data/1542918/000151712613000148/form8k.htm\" target=\"_blank\">NEUROMAMA, LTD. Files SEC form 8-K</a>";
	    }
		$i=0;
		$url= "http://finance.yahoo.com/rss/headline?s=".$symbol;

		$xml = simplexml_load_file($url); //loading the document
		
		$items = $xml->channel->item; //gets the title of the document.		
	/*HEADLINERS OF EACH SYMBOL, JUST THE URL NEEDS TO BE CHANGED TO THE SPECIFIC SYMBOL*/
		
		foreach($items as $item){
			if($i<15){
				$i++;
				echo "<div style=\"width:550px;\">";
				?>
				<div style="">
					<?php

					echo "</br><a style=\"color:#000\"href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
					
				echo "</div>";
				echo "<div style=\"\">";
				echo "<span style=\"font-size:11px\">".$item->pubDate."</span>";
				echo "</div>";
				echo "</div>";
			}
			else
				break;
		}
	?>
	</div>
</div>
