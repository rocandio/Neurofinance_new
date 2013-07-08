<div style="width:600px; height:250px;">
	<?php 
		$symbol = $_GET['s'];
		$ranges = array('1d','5d','3m','6m','1y','2y','5y','my');
		$types = array('l','b','c');
		$typesnames = array('Line','Bar','Candle');
		$scales = array('on','off');
		$scalesnames = array('Linear','Log');
		
		//$type = (is_null($_GET['q']) ? $types[1] : $_GET['q']);
		//$type = (in_array($type,$types) ? $type : $types[1]);
		//$range = (is_null($_GET['t']) ? $ranges[0] : $_GET['t']);
		//$range = (in_array($range,$ranges) ? $range : $ranges[0]);
		//$scale = (is_null($_GET['l']) ? $scales[0] : $_GET['l']);
		//$scale = (in_array($scale,$scales) ? $scale : $scales[0]);
	?>
	<img id="chart" src="http://chart.finance.yahoo.com/z?s=<?php echo $symbol."&t=5d&q=l";?>" />
	<p>
	<!--  
		Range: 
		<?php/*
			$count= count($ranges);
			$i=0;
			while($i<$count){
				echo "<a href=\"?s=".$symbol."&t=".$ranges[$i]."&q=".$type."&l=".$scale."\">".$ranges[$i]."</a>&nbsp;";
				$i++;
			}*/
		?>
		&nbsp;&nbsp;
		Type:
		<?php/*
			$count= count($types);
			$i=0;
			while($i<$count){
				echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$types[$i]."&l=".$scale."\">".$typesnames[$i]."</a>&nbsp;";
				$i++;
			}*/
		?>
		&nbsp;&nbsp;
		Scale:
		<?php
		/*
			$count= count($scales);
			$i=0;
			while($i<$count){
				echo "<a href=\"?s=".$symbol."&t=".$range."&q=".$type."&l=".$scales[$i]."\">".$scalesnames[$i]."</a>&nbsp;";
				$i++;
			}
			*/
		?>
	</p>
	-->
</div>