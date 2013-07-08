<html>
	<?php include 'header.php';?>

	<body>
		<?php include 'navigation.php';?>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<div id="HomeGalleryNavigation"></div>
				<?php //include 'info1.php';?>
				<div class="inner">
					<div class="markets_real_time" >
                        <script src="http://markets.financialcontent.com/stocks?Module=tickerbar&Output=JS"></script>
                    </div>
                    <div class="block_home_slider"><!-- --> 
                        <div id="home_slider" class="flexslider">
                            <div class="border_box">
                                <div class="box_skitter box_skitter_large">
                                    <ul>
                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628152842-student-studying-620xa.jpg" width="580px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY<p></div></li>
                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130627144357-hurt-rate-spike-620xa.jpg" width="580px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY<p></div></li>
                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628125235-lookahead-chart-620xa.png" width="580px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY<p></div></li>
                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628113556-fslr-v-sp-500-620xa.png" width="580px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY</p></div></li>
                                        <?php /*
                                            $i=0;
                                            $url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
                                            $xml = simplexml_load_file('http://rss.cnn.com/rss/money_topstories.rss'); //loading the document
                                            $items = $xml->channel->item; //gets the title of the document.     
                                            //echo "<article  class=\"block_topic_post\">";
                                            foreach($items as $item){
                                                if($i<5){
                                                    //echo "<div id=\"news$i\">";
                                                    $i++;
                                                    $full_image = str_replace("-120x90","",$item->children('media',true)->attributes()->url);
                                                    //echo "<li><a href=\"".$item->link."\" target=\"_blank\"><img src=\"".$item->children('media',true)->attributes()->url."\" class=\"block\"/></a><div class=\"label_text\"><p>".$item->title."</p></div></li>";
                                                    echo "<li><img src=\"$full_image\" class=\"block\"/><div class=\"label_text\"><p>".$item->title."</p></div></li>";
                                                }
                                                else
                                                    break;
                                            }*/
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="main_news">
                    	<h1>Main News</h1>
                    	<div class="line_4" style="margin:-4px 0px 18px;"></div>
						<div class="block_topic_news">
		                    <?php
		                    $i=0;
		                    $url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
		                    $xml = simplexml_load_file('http://rss.cnn.com/rss/money_topstories.rss'); //loading the document
		                    $items = $xml->channel->item; //gets the title of the document.     
		                    echo "<article  class=\"block_topic_post\">";
		                    foreach($items as $item){
		                        if($i<10){
		                    echo "<div id=\"news$i\">";
		                    $i++;
		                        ?>
		                    <div style="float: left; width:200px; padding-top:10px; padding-bottom:10px;">
		                		<a href="<?php echo $item->link;?>" target="_blank">
		                        	<div style=" margin: auto; width:150px; height:90px; background-image: url(<?php echo $item->children('media',true)->attributes()->url;?>); background-size: 120px 90px;">
		                        
		                        	</div>
		                    	</a>
		                    </div>
		                    <?php
		                    echo "<div style=\"float: left;width:400px; padding-top:10px; padding-bottom:10px;\">";
		                    echo "<p class = \"publ_news\">".$item->pubDate."</p></br>";
		                    echo "<a class=\"links_news\" href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
		                    echo "</br></br>";
		                    echo "<p class=\"p_news\">".$item->description."</p></br>";
		                    echo "</br></br>";
		                    echo "</div>";
		                    echo "</div>";

		                        }
		                        else
		                    break;
		                    }
		                    echo "</article>";
		                        ?>
		                </div>
	            	</div>
	            	
                </div>
			</div>
		</div>
	</body>
</html>