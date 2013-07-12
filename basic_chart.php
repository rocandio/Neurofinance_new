<?php
    require 'functions/YQL_functions.php';
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
                                        <div id="container">
                                        <div style="text-align: center;margin: 0 auto; width:600px; height:500px;">
                                            <?php 
                                                $errorflag ='';
                                                
                                                $compare = (is_null($_GET['c']) ? '' : $_GET['c']);
                                                if($compare==$symbol){
                                                    $compare = '';
                                                    $errorflag = "Cannot compare the same stock symbol";
                                                }
                                                $ranges = array('1d','5d','3m','6m','1y','2y','5y','my');
                                                $types = array('l','b','c');
                                                $typesnames = array('Line','Bar','Candle');
                                                $scales = array('on','off');
                                                $scalesnames = array('Linear','Log');
                                                $sizes = array('s','m','l');
                                                $sizenames = array('Small','Medium','Large');
                                                
                                                $type = (is_null($_GET['q']) ? $types[1] : $_GET['q']);
                                                $type = (in_array($type,$types) ? $type : $types[1]);
                                                $range = (is_null($_GET['t']) ? $ranges[0] : $_GET['t']);
                                                $range = (in_array($range,$ranges) ? $range : $ranges[0]);
                                                $scale = (is_null($_GET['l']) ? $scales[0] : $_GET['l']);
                                                $scale = (in_array($scale,$scales) ? $scale : $scales[0]);
                                                $size = (is_null($_GET['z']) ? $sizes[1] : $_GET['z']);
                                                $size = (in_array($size,$sizes) ? $size : $sizes[1]);
                                            ?>
                                                <div style="display: inline-block;  margin:0 auto;">
                                                    <img id="chart" style="max-width:600px;"src="http://chart.finance.yahoo.com/z?s=<?php echo $symbol."&t=".$range."&q=".$type."&z=".$size."&c=".$compare;?>" />
                                                </div>
                                            <p class="charts">
                                                Range: 
                                                <?php
                                                    $count= count($ranges);
                                                    $i=0;
                                                    $actualid= array_search($range, $ranges);
                                                    while($i<$count){
                                                        if($i!=$actualid){
                                                            echo "<a href=\"?s=".$symbol."&t=".$ranges[$i]."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."\">".$ranges[$i]."</a>&nbsp;";
                                                        }else{
                                                            echo $ranges[$i]." ";
                                                        }
                                                        $i++;
                                                    }
                                                ?>
                                                &nbsp;&nbsp;
                                                Type:
                                                <?php
                                                    $count= count($types);
                                                    $i=0;
                                                    $actualid= array_search($type, $types);
                                                    while($i<$count){
                                                        if($i!=$actualid){
                                                            echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$types[$i]."&l=".$scale."&z=".$size."&c=".$compare."\">".$typesnames[$i]."</a>&nbsp;";
                                                        }else{
                                                            echo $typesnames[$i]." ";
                                                        }
                                                        $i++;
                                                    }
                                                ?>
                                                &nbsp;&nbsp;
                                                Scale:
                                                <?php
                                                    $count= count($scales);
                                                    $i=0;
                                                    $actualid= array_search($scale, $scales);
                                                    while($i<$count){
                                                        if($i!=$actualid){
                                                            echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scales[$i]."&z=".$size."&c=".$compare."\">".$scalesnames[$i]."</a>&nbsp;";
                                                        }else{
                                                            echo $scalesnames[$i]." ";
                                                        }
                                                        $i++;
                                                    }
                                                ?>
                                                &nbsp;&nbsp;
                                                Size:
                                                <?php
                                                    $count= count($sizes);
                                                    $i=0;
                                                    $actualid= array_search($size, $sizes);
                                                    while($i<$count){
                                                        if($i!=$actualid){
                                                            echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$sizes[$i]."&c=".$compare."\">".$sizenames[$i]."</a>&nbsp;";
                                                        }else{
                                                            echo $sizenames[$i]." ";
                                                        }
                                                        $i++;
                                                    }
                                                ?>
                                                <form class="search_neuro cf" style="width:300px; float:left;" action="basic_chart.php" method="get">
                                                    <div style="width:285px">
                                                        <p style="float:left; padding-top: 5px; padding-right: 10px; font-size: 14px; text-aling:left; color:#000"><strong><?php echo strtoupper($symbol);?></strong> Vs. </p>
                                                        <input value="<?php echo $symbol;?>" name="s" type="hidden">
                                                        <input value="<?php echo $range;?>" name="t" type="hidden">
                                                        <input value="<?php echo $type;?>" name="q" type="hidden">
                                                        <input value="<?php echo $scale;?>" name="l" type="hidden">
                                                        <input value="<?php echo $size;?>" name="z" type="hidden">
                                                        <input value="<?php echo strtoupper($compare);?>" name="c" type="text"style="width:110px">
                                                        <button style="width:80px" type="submit" value="Compare">Compare</button>
                                                    </div>
                                                </form>
                                                <h4 style="color:red;"><?php echo ($errorflag=='' ? '' : $errorflag." ".strtoupper($symbol)." Vs. ".strtoupper($symbol));?></h4>
                                            </p>
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
                        <?php include 'Banners/Banner6/index.html';?>
	            	</div>
                </div>
			</div>
		</div>
	</body>
</html>