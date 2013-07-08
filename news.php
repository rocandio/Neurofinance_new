<?php
    $type_news = $_GET['t'];
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
	                    	<h1 style="text-transform: uppercase;"><?php echo $type_news;?> News</h1>
	                    	<div class="line_4" style="margin:-4px 0px 18px;"></div>
							
			                <div class="block_topic_news">
			                	<?php
                            switch ($type_news) {
                                case 'all':
                                    include 'news/all.php';
                                    break;
                                case 'americas':
                                    include 'news/americas.php';
                                    break;
                                case 'africa':
                                    # code...
                                    include 'news/africa.php';
                                    break;
                                case 'asia':
                                    # code...
                                    include 'news/asia.php';
                                    break;
                                case 'europe':
                                    # code...
                                    include 'news/europe.php';
                                    break;
                                case 'middle east':
                                    # code...
                                    include 'news/middleeast.php';
                                    break;
                                case 'usa':
                                    # code...
                                    include 'news/usa.php';
                                    break;
                                case 'markets':
                                    # code...
                                    include 'news/markets.php';
                                    break;
                                case 'business':
                                    # code...
                                    include 'news/business.php';
                                    break;
                                case 'media':
                                    # code...
                                    include 'news/media.php';
                                    break;
                                case 'deals':
                                    # code...
                                    include 'news/markets_deals.php';
                                    break;
                                case 'bonds':
                                    # code...
                                    include 'news/markets_bonds.php';
                                    break;
                                case 'economy':
                                    # code...
                                    include 'news/markets_economy.php';
                                    break;
                                case 'mergers':
                                    # code...
                                    include 'news/markets_mergers.php';
                                    break;
                                case 'small business':
                                    # code...
                                    include 'news/markets_small_business.php';
                                    break;
                                case 'US market':
                                    # code...
                                    include 'news/markets_us_market.php';
                                    break;
									
																				// Tech Tab
								case 'technology':
                                    # code...
                                    include 'news/technology.php';
                                    break;
                                case 'tech news':
                                    # code...
                                    include 'news/tech_news.php';
                                    break;
                                case 'science news':
                                    # code...
                                    include 'news/science_news.php';
                                    break;
                                case 'tech sector':
                                    # code...
                                    include 'news/tech_sector.php';
                                    break;
                                default:
                                    echo "<div class=\"error_stock\">News not found...</div>";
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
	            	<div class="right">
	            		 <div class="sidebar">
                            <script src="http://markets.financialcontent.com/stocks?Module=snapshot&Ticker=$COMP+NERO+GOOG+FB+AMZN&Output=JS"></script>
                            <img src="wp-content/themes/business-news/images/a_1.png">
                        </div>
	            	</div>
                </div>
			</div>
		</div>
	</body>
</html>