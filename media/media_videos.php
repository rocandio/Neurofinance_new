<!-- <script type="text/JavaScript" src="js/jquery.js"></script>
<script type="text/JavaScript" src="js/jquery_004.js"></script>
<script type="text/JavaScript" src="js/jquery-1.js"></script> -->
<script type="text/javascript">
$(document).ready(function(){
	$(".feedflare").hide();
 });
</script>
<div style="width:805px;">
	<?php
		$i=0;
		$xml = simplexml_load_file('http://feeds.reuters.com/reuters/USVideoBusiness?format=xml'); //loading the document
		$items = $xml->channel->item; //gets the title of the document.		
		foreach($items as $item){
			if($i<5){
					$i++;
					?>
					<div style="float:left; width:200px;">
						<a href="<?php echo $item->link;?>"><img src="<?php echo $item->children('media',true)->group->content->thumbnail->attributes()->url;?>"/></a>
					</div>
					<div style="float:left; width:600px; ">
						<?php
						echo "<a style=\"font-family: 'Roboto',sans-serif;font-size: 19px;text-transform:uppercase;color:#8B3A3A;font-style: bold;\"href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
						echo "</br>";
						echo $item->description;
						echo "</br></br>";
						echo "<p style=\"text-align:right\">".$item->pubDate."</p></br>";
					echo "</div>";
			}
			else
				break;
		}
	?>
</div>
