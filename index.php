<html>
	<?php include 'header.php';?>

	<body>
		<?php include 'navigation.php';?>
		<div id="PageContainerOuter">
			<div id="PageContainer">

				<div id="HomeGalleryNavigation">
					
					<?php
						include 'Banners/Banner5/index.html'; 
					?>
				</div>
				<?php //include 'info1.php';?>
				
				<div class="inner">
					<div class="markets_real_time" >
	                    <script src="http://markets.financialcontent.com/stocks?Module=tickerbar&Output=JS"></script>
	                </div>
					<div class="left">
	                    <div class="block_home_slider"><!-- --> 
	                        <div id="home_slider" class="flexslider">
	                            <div class="border_box">
	                                <div class="box_skitter box_skitter_large">
	                                    <ul> <!-- here is were need to add some images of news-->
	                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628152842-student-studying-620xa.jpg" width="580px"><div class="label_text"><p>Financial Reports<p></div></li>
	                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130627144357-hurt-rate-spike-620xa.jpg" width="580px"><div class="label_text"><p>Neuromama Finance<p></div></li>
	                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628125235-lookahead-chart-620xa.png" width="580px"><div class="label_text"><p>Stock Quotes<p></div></li>
	                                        <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628113556-fslr-v-sp-500-620xa.png" width="580px"><div class="label_text"><p>Markets</p></div></li> 
	                                       
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
                                <div style="float: left; width:200px; padding-top:10px; padding-bottom:20px;">
                                    <a href="<?php echo $item->link;?>" target="_blank">
                                        <div style=" margin: auto; width:150px; height:90px; background-image: url(<?php echo $item->children('media',true)->attributes()->url;?>); background-size: 120px 90px;">
                                        
                                        </div></a>
                                </div>
                                <div style="float: left;width:400px; padding-top:10px; padding-bottom:20px;">
                                <?php
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
                
                        <div class="line_3" style="margin:20px 0px 24px;"></div>
                        <div class="block_pager">
                            
                            <div class="clearboth"></div>
                        </div>
                <!-- end Recent News 2 --> 
            
        
                        </div>
		            	</div>
	            	</div>
	            	<div class="right_content">
	            		 <div class="sidebar">
                            <script src="http://markets.financialcontent.com/stocks?Module=snapshot&Ticker=$COMP+NERO+GOOG+FB+AMZN&Output=JS"></script>
                            <!-- <img src="Banners/Banner7/wpimages/Bnr1-1.png"> --><?php
                        	include 'Banners/Banner7/index.html';
                        ?>
                        </div>
                        
	            	</div>
                </div>
			</div>
		</div>
	</body>
</html>