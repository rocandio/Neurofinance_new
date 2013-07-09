<?php 
	require 'functions/YQL_functions.php';
    $symbol = $_GET['s'];
    $option = $_GET['o'];

    $info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
    $info_keys=keystats($symbol,'select * from yahoo.finance.keystats where symbol=');
?>
<!DOCTYPE html>
<html lang="EN-US" encoding="UTF-8">
    <?php
        include 'header.php';
    ?>
    <body class="custom-background">
        <div class="wrapper sticky_footer" id="top">
            <!-- HEADER BEGIN -->
           <?php 
            include 'head.php';
           ?>
            <!-- HEADER END -->
            
            <!-- CONTENT BEGIN -->
            <div id="content"  class="right_sidebar">
                
                <div class="inner">
                    <div class="markets_real_time" style="width:960px; padding:0px 9px; border: 2px solid rgb(234, 234, 234);">
                        <script src="http://markets.financialcontent.com/stocks?Module=tickerbar&Output=JS"></script>
                    </div>
                    <div class="general_content">
                        <div class="main_content">
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
                        <div class="clearboth"></div>
                    </div>
                </div>
            </div>
            <!-- CONTENT END -->
            
            <!-- FOOTER BEGIN -->
            <?php 
                include 'footer.php';
            ?>
            <!-- FOOTER END -->
        </div>
    </div>
        <!-- POPUP BEGIN -->
        
    </body>
</html>