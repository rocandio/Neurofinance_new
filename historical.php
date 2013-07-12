<?php 
    require 'functions/YQL_functions.php';
    #$info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
    #$info_keys=keystats($symbol,'select * from yahoo.finance.keystats where symbol=');
    $startDate = (is_null($_GET['start']) ? '2010-01-01' : $_GET['start']);
    $endDate = (is_null($_GET['end']) ? date("Y-m-d")  : $_GET['end']);
    $interval = (is_null($_GET['i']) ? 'd'  : $_GET['i']);
    $interval = (in_array($interval,array('d','w','v','m')) ? $interval : 'd');
    $sD = strtotime($startDate);
    $eD = strtotime($endDate);
    $sd_d = (int) date("d", $sD);
    $ed_d = (int) date("d", $eD);
    $sd_m = (int) date("m", $sD)-1;
    $ed_m = (int) date("m", $eD)-1;
    $sd_y = (int) date("Y", $sD);
    $ed_y = (int) date("Y", $eD);
    $error_empty_array['d'] = 'Daily';
    $error_empty_array['w'] = 'Weekly';
    $error_empty_array['v'] = 'Dividend';
    $error_empty_array['m'] = 'Monthly';
    $symbol = $_GET['s'];
    $info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
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
                                            <div style="margin:0 auto; width:600px">
                                                <form style="display:block; text-align:left; " action="historical.php" method="get">
                                                    <div style="width:400px; padding-top:25px; padding-bottom:25px; margin: 0 auto;">
                                                        <div style="position:relative; float:left; width:200px;">
                                                            <input type="text"name="s" value="<?php echo $symbol?>" style="display:none">
                                                            <strong>Start Date</strong>
                                                            <input value="<?php echo $startDate;?>" id="startDate" name="start" type="text">
                                                            </br>
                                                            <strong>End Date</strong>
                                                            <input value="<?php echo $endDate;?>" id="endDate" name="end" type="text">
                                                        </div>
                                                        <div style="position:relative; float:left; width:200px; padding-top:5px;">
                                                            <input type="radio" name="i" value="d" <?php echo ($interval=='d' ? "checked" :"");?>>Daily<br>
                                                            <input type="radio" name="i" value="w" <?php echo ($interval=='w' ? "checked" :"");?>>Weekly<br>
                                                            <input type="radio" name="i" value="m" <?php echo ($interval=='m' ? "checked" :"");?>>Monthly<br>
                                                            <input type="radio" name="i" value="v" <?php echo ($interval=='v' ? "checked" :"");?>>Dividends Only<br>

                                                        </div>
                                                        <div style="clear:both;"></div>
                                                        <div style="margin-left:150px; margin-top:15px;">
                                                            <input type="submit" value="Submit"/>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div style="position:relative; padding-bottom:15px;">
                                                    <table class="main_keys_title" style="margin:0 auto;">
                                                    <?php
                                                        if($sD>$eD){
                                                            echo "INVALID DATE RANGE";
                                                        }
                                                        else{
                                                            $url = 'http://ichart.yahoo.com/table.csv?s=';
                                                            $file = fopen($url.$symbol.'&a='.$sd_m.'&b='.$sd_d.'&c='.$sd_y.'&d='.$ed_m.'&e='.$ed_d.'&f='.$ed_y.'&g='.$interval, 'r');
                                                            $array;
                                                            $i=0;
                                                            if ($file) {
                                                                # code...
                                                          
                                                                while (($line = fgetcsv($file)) !== FALSE) {
                                                                    $array[$i++]=$line;
                                                                }
                                                                fclose($file);
                                                                if(count($array)<2){
                                                                    echo $error_empty_array[$interval]." data is unavailable for the specified date range.";
                                                                }           
                                                                else{
                                                                    foreach($array[0] as $field){
                                                                        echo "<th>".$field."</th>";
                                                                    }
                                                                    foreach(array_slice($array, 1, null, true) as $item){
                                                                        echo "<tr>";
                                                                        foreach($item as $field){
                                                                            echo "<td>".$field."</td>";
                                                                        }
                                                                        echo "</tr>";
                                                                    }
                                                                }
                                                            }
                                                            else
                                                                echo $error_empty_array[$interval]." data is unavailable for the specified date range.";
                                                        }
                                                    ?>
                                                    </table>
                                                </div>
                                            </div>
                                         <?php 
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
		</div>
	</body>
</html>