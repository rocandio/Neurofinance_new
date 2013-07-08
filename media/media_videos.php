<!-- <script type="text/JavaScript" src="js/jquery.js"></script>
<script type="text/JavaScript" src="js/jquery_004.js"></script>
<script type="text/JavaScript" src="js/jquery-1.js"></script> -->
<script type="text/javascript">
$(document).ready(function(){
	$(".feedflare").hide();
 });
</script>

	<?php
		$i=0;
		$xml = simplexml_load_file('http://feeds.reuters.com/reuters/USVideoBusiness?format=xml'); //loading the document
		$items = $xml->channel->item; //gets the title of the document.
		echo "<article  class=\"block_topic_post\">";		
		foreach($items as $item){
			if($i<10){
					$i++;
					?>
					<div style="float:left; width:150px;">
						<a href="<?php echo $item->link;?>"><img src="<?php echo $item->children('media',true)->group->content->thumbnail->attributes()->url;?>"/></a>
					</div>
					<div style="float:left; width:400px; ">
						<?php
						echo "<a class=\"links_news\" href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
						echo "</br>";
						echo "<p class=\"p_news\">";
						echo $item->description;
						echo "</p>";
						
						echo "<p class=\"publ_news\"style=\"text-align:right\">".$item->pubDate."</p></br>";
						echo "</br></br>";
					echo "</div>";
			}
			else
				break;
		}
		echo "</article>";
	?>
