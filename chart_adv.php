<?php
	require 'functions/YQL_functions.php';
    $symbol = $_GET['s'];
    $info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
?>
<!DOCTYPE html>
<html lang="EN-US">
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
                                            include 'results/stock_info.php';
                                            ?>
                                	<div id="container" style="max-width:600px">
										<div style="text-align: center;margin: 0 auto; width:600px; height:500px;">
											<?php 
												$errorflag ='';
												
												$TechInd1 = $_GET['p'];
												$TechInd2 = $_GET['a'];
												$compare = (is_null($_GET['c']) ? '' : $_GET['c']);
												$TechInd2 = (is_null($_GET['a']) ? '' : $_GET['a']);
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
												
												/*Adv*/
												$TechInd1names = array('5','10','20','50','100','200','5','10','20','50','100','200','Bollinger Bands','Parabolic SAR','Splits','Volume');
												$TechInd1s= array('m5','m10','m20','m50','m100','m200','e5','e10','e20','e50','e100','e200','b','p','s','v');
												$TechInd2names = array('MACD','MFI','ROC','RSI','Slow Stoch','Fast Stoch','Vol','Vol+MA','W%R');
												$TechInd2s= array('m26-12-9','f14','p12','r14','ss','fs','v','vm','w14');
											?>
												<div style="display: inline-block;  margin:0 auto;">
													<img id="chart" style="max-width:600px;" src="http://chart.finance.yahoo.com/z?s=<?php echo $symbol."&t=".$range."&q=".$type."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2;?>" />
												</div>
											<p class="charts">
												Range: 
												<?php
													$count= count($ranges);
													$i=0;
													$actualid=   array_search($range, $ranges);
													while($i<$count){
														if($i!=$actualid){
															echo "<a href=\"?s=".$symbol."&t=".$ranges[$i]."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$ranges[$i]."</a>&nbsp;";
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
															echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$types[$i]."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$typesnames[$i]."</a>&nbsp;";
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
															echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scales[$i]."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$scalesnames[$i]."</a>&nbsp;";
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
															echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$sizes[$i]."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$sizenames[$i]."</a>&nbsp;";
														}else{
															echo $sizenames[$i]." ";
														}
														$i++;
													}
												?>	
											</p>
											<p class="charts">
												Moving Avg:
												<?php
													$count= count($TechInd1s);
													$i=0;
													if($TechInd1 == ""){
														$TechInd1array= array();
													}else{
														$TechInd1array = explode(",", $TechInd1);
													}
													while($i<$count){
														$j=0;
														$p='';
														if($i==6){
															echo "&nbsp;&nbsp;EMA: ";
														}
														if($i==12){
															echo "&nbsp;&nbsp;Overlays: ";
														}
														if(in_array($TechInd1s[$i],$TechInd1array)){
															$key = array_search($TechInd1s[$i], $TechInd1array);
															$flag=true;
															$count2 = count($TechInd1array);
															while($j<$count2){ 
																if($key!=$j){
																	if($flag){
																		$p = $TechInd1array[$j++];
																		$flag=false;
																	}
																	else{
																		$p = $p.",".$TechInd1array[$j++];
																	}
																}
																else{
																	$j++;
																}
															}
															echo "<a style=\"color:red;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$p."&a=".$TechInd2."\">".$TechInd1names[$i]."</a>&nbsp;";
														}else{
															$count2 = count($TechInd1array);
															$p = $TechInd1s[$i];
															while($j<$count2){ 
																$p = $p.",".$TechInd1array[$j++];
															}
															echo "<a style=\"color:green;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$p."&a=".$TechInd2."\">".$TechInd1names[$i]."</a>&nbsp;";
														}
														$i++;
													}
												?>	
											</p>
											<p class="charts">
												Indicators:
												<?php
													$count= count($TechInd2s);
													$i=0;
													if($TechInd2 == ""){
														$TechInd2array= array();
													}else{
														$TechInd2array = explode(",", $TechInd2);
													}
													while($i<$count){
														$j=0;
														$p='';
														if(in_array($TechInd2s[$i],$TechInd2array)){
															$key = array_search($TechInd2s[$i], $TechInd2array);
															$flag=true;
															$count2 = count($TechInd2array);
															while($j<$count2){ 
																if($key!=$j){
																	if($flag){
																		$p = $TechInd2array[$j++];
																		$flag=false;
																	}
																	else{
																		$p = $p.",".$TechInd2array[$j++];
																	}
																}
																else{
																	$j++;
																}
															}
															echo "<a style=\"color:red;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$p."\">".$TechInd2names[$i]."</a>&nbsp;";
														}else{
															$count2 = count($TechInd2array);
															$p = $TechInd2s[$i];
															while($j<$count2){ 
																$p = $p.",".$TechInd2array[$j++];
															}
															echo "<a style=\"color:green;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$p."\">".$TechInd2names[$i]."</a>&nbsp;";
														}
														$i++;
													}
												?>	
											</p>
											<form class="search_neuro cf" style="width:360px; float:left;" action="chart_adv.php" method="get">
												<div style="width:290px;">
													<p style="float:left; padding-top: 5px; padding-right: 10px; font-size: 14px; text-aling:left; color:#000"><strong><?php echo strtoupper($symbol);?></strong> Vs. </p>													<input value="<?php echo $symbol;?>" name="s" type="hidden">
													<input value="<?php echo $range;?>" name="t" type="hidden">
													<input value="<?php echo $type;?>" name="q" type="hidden">
													<input value="<?php echo $scale;?>" name="l" type="hidden">
													<input value="<?php echo $size;?>" name="z" type="hidden">
													<input value="<?php echo $TechInd1;?>" name="p" type="hidden">
													<input value="<?php echo $TechInd2;?>" name="a" type="hidden">
													<input value="<?php echo strtoupper($compare);?>" name="c" type="text">
													<button style="width:55px" type="submit" value="Compare">Compare</button>
												</div>
											</form>
											<h4 style="color:red;"><?php echo ($errorflag=='' ? '' : $errorflag." ".strtoupper($symbol)." Vs. ".strtoupper($symbol));?></h4>
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
                                echo "<img src=\"wp-content/themes/business-news/images/a_1.png\"></img>";
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

<div id="container" style="width:100%;">
	<div style="text-align: center;margin: 0 auto; width:850px; height:500px;">
		<?php 
			$errorflag ='';
			$symbol = $_GET['s'];
			$TechInd1 = $_GET['p'];
			$TechInd2 = $_GET['a'];
			$compare = (is_null($_GET['c']) ? '' : $_GET['c']);
			$TechInd2 = (is_null($_GET['a']) ? '' : $_GET['a']);
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
			
			/*Adv*/
			$TechInd1names = array('5','10','20','50','100','200','5','10','20','50','100','200','Bollinger Bands','Parabolic SAR','Splits','Volume');
			$TechInd1s= array('m5','m10','m20','m50','m100','m200','e5','e10','e20','e50','e100','e200','b','p','s','v');
			$TechInd2names = array('MACD','MFI','ROC','RSI','Slow Stoch','Fast Stoch','Vol','Vol+MA','W%R');
			$TechInd2s= array('m26-12-9','f14','p12','r14','ss','fs','v','vm','w14');
		?>
			<div style="display: inline-block;  margin:0 auto;">
				<img id="chart" src="http://chart.finance.yahoo.com/z?s=<?php echo $symbol."&t=".$range."&q=".$type."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2;?>" />
			</div>
		<p>
			Range: 
			<?php
				$count= count($ranges);
				$i=0;
				$actualid=   array_search($range, $ranges);
				while($i<$count){
					if($i!=$actualid){
						echo "<a href=\"?s=".$symbol."&t=".$ranges[$i]."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$ranges[$i]."</a>&nbsp;";
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
						echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$types[$i]."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$typesnames[$i]."</a>&nbsp;";
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
						echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scales[$i]."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$scalesnames[$i]."</a>&nbsp;";
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
						echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$sizes[$i]."&c=".$compare."&p=".$TechInd1."&a=".$TechInd2."\">".$sizenames[$i]."</a>&nbsp;";
					}else{
						echo $sizenames[$i]." ";
					}
					$i++;
				}
			?>	
		</p>
		<p>
			Moving Avg:
			<?php
				$count= count($TechInd1s);
				$i=0;
				if($TechInd1 == ""){
					$TechInd1array= array();
				}else{
					$TechInd1array = explode(",", $TechInd1);
				}
				while($i<$count){
					$j=0;
					$p='';
					if($i==6){
						echo "&nbsp;&nbsp;EMA: ";
					}
					if($i==12){
						echo "&nbsp;&nbsp;Overlays: ";
					}
					if(in_array($TechInd1s[$i],$TechInd1array)){
						$key = array_search($TechInd1s[$i], $TechInd1array);
						$flag=true;
						$count2 = count($TechInd1array);
						while($j<$count2){ 
							if($key!=$j){
								if($flag){
									$p = $TechInd1array[$j++];
									$flag=false;
								}
								else{
									$p = $p.",".$TechInd1array[$j++];
								}
							}
							else{
								$j++;
							}
						}
						echo "<a style=\"color:red;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$p."&a=".$TechInd2."\">".$TechInd1names[$i]."</a>&nbsp;";
					}else{
						$count2 = count($TechInd1array);
						$p = $TechInd1s[$i];
						while($j<$count2){ 
							$p = $p.",".$TechInd1array[$j++];
						}
						echo "<a style=\"color:green;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$p."&a=".$TechInd2."\">".$TechInd1names[$i]."</a>&nbsp;";
					}
					$i++;
				}
			?>	
		</p>
		<p>
			Indicators:
			<?php
				$count= count($TechInd2s);
				$i=0;
				if($TechInd2 == ""){
					$TechInd2array= array();
				}else{
					$TechInd2array = explode(",", $TechInd2);
				}
				while($i<$count){
					$j=0;
					$p='';
					if(in_array($TechInd2s[$i],$TechInd2array)){
						$key = array_search($TechInd2s[$i], $TechInd2array);
						$flag=true;
						$count2 = count($TechInd2array);
						while($j<$count2){ 
							if($key!=$j){
								if($flag){
									$p = $TechInd2array[$j++];
									$flag=false;
								}
								else{
									$p = $p.",".$TechInd2array[$j++];
								}
							}
							else{
								$j++;
							}
						}
						echo "<a style=\"color:red;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$p."\">".$TechInd2names[$i]."</a>&nbsp;";
					}else{
						$count2 = count($TechInd2array);
						$p = $TechInd2s[$i];
						while($j<$count2){ 
							$p = $p.",".$TechInd2array[$j++];
						}
						echo "<a style=\"color:green;\" href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scale."&z=".$size."&c=".$compare."&p=".$TechInd1."&a=".$p."\">".$TechInd2names[$i]."</a>&nbsp;";
					}
					$i++;
				}
			?>	
		</p>
		<form style="display:block; text-align:left; " action="chart_adv.php" method="get">
			<div style="width:400px; padding-bottom:25px; margin: 0 auto;">
				<strong><?php echo strtoupper($symbol)." Vs. ";?></strong>
				<input value="<?php echo $symbol;?>" name="s" type="hidden">
				<input value="<?php echo $range;?>" name="t" type="hidden">
				<input value="<?php echo $type;?>" name="q" type="hidden">
				<input value="<?php echo $scale;?>" name="l" type="hidden">
				<input value="<?php echo $size;?>" name="z" type="hidden">
				<input value="<?php echo $TechInd1;?>" name="p" type="hidden">
				<input value="<?php echo $TechInd2;?>" name="a" type="hidden">
				<input value="<?php echo strtoupper($compare);?>" name="c" type="text">
				<input type="submit" value="Compare"/>
			</div>
		</form>
		<h4 style="color:red;"><?php echo ($errorflag=='' ? '' : $errorflag." ".strtoupper($symbol)." Vs. ".strtoupper($symbol));?></h4>
	</div>
</div>