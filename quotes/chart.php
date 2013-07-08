<div id="container" style="width:100%;">
	<div style="text-align: center;margin: 0 auto; width:850px; height:500px;">
		<?php 
			$errorflag ='';
			$symbol = $_GET['s'];
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
				<img id="chart" src="http://chart.finance.yahoo.com/z?s=<?php echo $symbol."&t=".$range."&q=".$type."&z=".$size."&c=".$compare;?>" />
			</div>
		<p>
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
			<form style="display:block; text-align:left; " action="chart.php" method="get">
				<div style="width:400px; padding-top:25px; padding-bottom:25px; margin: 0 auto;">
					<strong><?php echo strtoupper($symbol)." Vs. ";?></strong>
					<input value="<?php echo $symbol;?>" name="s" type="hidden">
					<input value="<?php echo $range;?>" name="t" type="hidden">
					<input value="<?php echo $type;?>" name="q" type="hidden">
					<input value="<?php echo $scale;?>" name="l" type="hidden">
					<input value="<?php echo $size;?>" name="z" type="hidden">
					<input value="<?php echo strtoupper($compare);?>" name="c" type="text">
					<input type="submit" value="Compare"/>
				</div>
			</form>
			<h4 style="color:red;"><?php echo ($errorflag=='' ? '' : $errorflag." ".strtoupper($symbol)." Vs. ".strtoupper($symbol));?></h4>
		</p>
	</div>
</div>