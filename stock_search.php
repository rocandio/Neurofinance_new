<?php 
	require 'functions/YQL_functions.php';
    $symbol = $_GET['s'];
    $option = $_GET['o'];
    if (strtoupper($symbol)=="DJIA" || strtoupper($symbol)=="^DJIA") {
        # code...
        $symbol = "";
    }

    $info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
    $info_keys=keystats($symbol,'select * from yahoo.finance.keystats where symbol=');
?>
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
						<div class = "summary">
                                <div id = "result_query" class = "result_query">
                                    <?php
                                        if (!$symbol=="") {
                                            include 'results/infos.php';       
                                         }
                                        else{
                                            echo "<div id=\"nav_bar_stock\" style=\"height: 1280px; width: 300px;\">";
                                            echo "<div class=\"error_stock\">Symbol stock not found</div>";
                                            echo "</div>";
                                        } 
                                      
                                    ?>
                                </div>
                        </div>
                        
	            	</div>
	            	<div class="right_content">
	            		<div class="sidebar">
                        <?php
                        if (!$symbol=="") {
                            # code...
                            if(!empty($info->ErrorIndicationreturnedforsymbolchangedinvalid)){
                                echo "<div id=\"nav_bar_stock\" style=\"height: 1280px; width: 300px;\">";
                                echo "<div class=\"error_stock\">Stock symbol not found</div>";
                                echo "</div>";      
                            }
                            else{
                                    include 'side_bar_stock.php';
                                }
                        } else {
                            # code...
                            echo "<div id=\"nav_bar_stock\" style=\"height: 1280px; width: 300px;\">";
                                echo "<div class=\"error_stock\">Stock symbol not found</div>";
                                echo "</div>";
                                
                                
                        }
                        
                        ?>

                        </div>
                        <?php include 'Banners/Banner6/index.html';?>
	            	</div>
                </div>
			</div>
		</div>
	</body>
</html>