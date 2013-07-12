<?php
    $type_media = $_GET['t'];
?>
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
					<div class="left">
	                    <div class="main_news">
	                    	<h1 style="text-transform: uppercase;"><?php echo $type_media;?></h1>
	                    	<div class="line_4" style="margin:-4px 0px 18px;"></div>
							
			                <div class="block_topic_news">
			                	<?php
                            switch ($type_media) {
                                case 'markets bloomberg':
                                    # code...
                                    include 'media/markets_bloomberg.php';
                                    break;
                                case 'news bloomberg':
                                    # code...
                                    include 'media/news_bloomberg.php';
                                    break;
                                case 'first world':
                                    # code...
                                    include 'media/first_world.php';
                                    break;
                                case 'economics':
                                    # code...
                                    include 'media/economics.php';
                                    break;
                                case 'video reuters':
                                    # code...
                                    include 'media/media_videos.php';
                                    break;

                                
                                default:
                                    echo "<div class=\"error_stock\">Media not found...</div>";
                                    break;
                            }
                          
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
                            <?php
                            include 'Banners/Banner7/index.html';
                        ?>
                        </div>
	            	</div>
                </div>
			</div>
		</div>
	</body>
</html>