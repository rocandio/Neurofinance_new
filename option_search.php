<?php 
    require 'functions/YQL_functions.php';
    $symbol = $_GET['s'];
    $date = (is_null($_GET['d']) ? "\"".date("Y-m")."\""  : "\"".$_GET['d']."\"");
    $info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
    $info_op_stat=option_symbol($symbol,'select * FROM yahoo.finance.option_contracts WHERE symbol=');
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
                                            include 'results/stock_info.php';
                                            ?>
                                        <div class="dates_option">
                                        </br></br>
                                            View by Expiration:
                                        </br>
                                            <?php
                                                $cont = count($info_op_stat->contract);
                                                $c=0;
                                                while ($c<$cont) {
                                                    # code...
                                                    echo "<a href=\"option_search.php?s=".$symbol."&d=".$info_op_stat->contract[$c]."\">   ".$info_op_stat->contract[$c]." </a>";
                                                    echo " | ";
                                                    $c++;
                                                }
                                            ?>
                                        </div>
                                        </br></br>  
                                            <?php
                                            include 'results/options_stock.php';
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
	            	<div class="right">
	            		 <div class="sidebar">
                        <?php
                        if (!$symbol=="") {
                            # code...
                            if(!empty($info->ErrorIndicationreturnedforsymbolchangedinvalid)){
                                echo "<div id=\"nav_bar_stock\" style=\"height: 1280px; width: 300px;\">";
                                echo "<div class=\"error_stock\">Symbol stock not found</div>";
                                echo "</div>";      
                            }
                            else{
                                    include 'side_bar_stock.php';
                                }
                        } else {
                            # code...
                            echo "<div id=\"nav_bar_stock\" style=\"height: 1280px; width: 300px;\">";
                                echo "<div class=\"error_stock\">Symbol stock not found</div>";
                                echo "</div>";
                                echo "<img src=\"wp-content/themes/business-news/images/Advertising.png\"></img>";
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