

			<!--/div-->
			<div style="width:605px; margin-top:20px">
				<p style="font-family: 'Roboto',sans-serif;font-size: 26px; color:#000">Headlines</p>
				<?php
					$i=0;
					$url= "http://finance.yahoo.com/rss/headline?s=".$symbol;

					$xml = simplexml_load_file($url); //loading the document
					
					$items = $xml->channel->item; //gets the title of the document.		
				/*HEADLINERS OF EACH SYMBOL, JUST THE URL NEEDS TO BE CHANGED TO THE SPECIFIC SYMBOL*/
					foreach($items as $item){
						if($i<15){
								$i++;
								?>
								<div style="float:left; height:40px; width:600px;border-bottom: 1px solid #000;">
									<?php
									echo "</br><a style=\"font-family: 'Roboto',sans-serif;font-size: 12px;text-transform:uppercase;color:#8B3A3A;font-style: bold;\"href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
									echo "<p style=\"text-align:right; color:#000\">".$item->pubDate."</p></br>";
								echo "</div>";
						}
						else
							break;
					}
				?>
			</div>
		</div>
