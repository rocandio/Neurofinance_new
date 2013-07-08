</br></br>	
<?php
	#$date = "\"".date("Y").'-'.date("m")."\"";
	$options= options($symbol,'select * from yahoo.finance.options where symbol=',$date);
			$number = count($options);
			$c=0;
			if ($date=="\"\"") {
				# code...
				echo "<p class=\"p_riod\">Period: <strong>".date("Y-m")."</strong></p>";
			}
			else echo "<p class=\"p_riod\">Period: <strong>".$date."</strong></p>";
			
			echo "<div class=\"op_table\">Call options</div>";
?>
<table id="hi" style="margin-bottom: 20px;">
	<tbody>
		<tr>
			<th scope="col" align="left">Strike</th>
			<th scope="col">Symbol</th>
			<th scope="col" align="center">Last</th>
			<th scope="col" align="center">Change</th>
			<th scope="col" align="center">Bid</th>
			<th scope="col" align="cemter">Ask</th>
			<th scope="col" align="center">Vol</th>
			<th scope="col" align="center">Open Int</th>
		</tr>
<?php
			while ($options[$c]->type == "C") {
				            
				        ?>
				            <tr>
							<td><?PHP echo $options[$c]->strikePrice;?></td>
							<td><a href="results/forms"> <?PHP echo $options[$c]->symbol;?></a></td>
							<td><?PHP echo $options[$c]->lastPrice;?></td>
							<td><?PHP 
								if(($options[$c]->change) > 0){
									echo "<img src=\"wp-content/themes/business-news/images/up.png\" width=\"10px\">";
									echo "<span style=\"color:green;\">";
								}
								else{
									if (($options[$c]->change) < 0) {
										echo "<img src=\"wp-content/themes/business-news/images/down.png\"width=\"10px\">";
										echo "<span style=\"color:#FF0000;\">";
									} else {
										echo "<span style=\"color:black;\">";
									}
								}
								echo $options[$c]->change;
								echo "</span>";
							?>
							</td>
							<td><strong><?PHP echo $options[$c]->bid;?></strong></td>
							<td><strong><?PHP echo $options[$c]->ask;?></strong></td>
							<td><?PHP echo $options[$c]->vol;?></td>
							<td><?PHP echo $options[$c]->openInt;?></td>
							</tr>
						<?PHP
						$c++;
				        }
			#var_dump($options);
		?>

	</tbody>
</br></br>
</table>

<?php 
	echo "<div class=\"op_table\">Put options</div>";
?>
<table id="hi" style="margin-bottom: 20px;">
	<tbody>
		<tr>
			<th scope="col" align="left">Strike</th>
			<th scope="col">Symbol</th>
			<th scope="col" align="center">Last</th>
			<th scope="col" align="center">Change</th>
			<th scope="col" align="center">Bid</th>
			<th scope="col" align="cemter">Ask</th>
			<th scope="col" align="center">Vol</th>
			<th scope="col" align="center">Open Int</th>
		</tr>
<?php 
			
			while ($c<$number){
				            
				        ?>
				            <tr>
							<td><?PHP echo $options[$c]->strikePrice;?></td>
							<td><?PHP echo $options[$c]->symbol;?></td>
							<td><?PHP echo $options[$c]->lastPrice;?></td>
							<td><?PHP 
								if(($options[$c]->change) > 0){
									echo "<img src=\"wp-content/themes/business-news/images/up.png\" width=\"10px\">";
									echo "<span style=\"color:green;\">";
								}
								else{
									if (($options[$c]->change) < 0) {
										echo "<img src=\"wp-content/themes/business-news/images/down.png\"width=\"10px\">";
										echo "<span style=\"color:#FF0000;\">";
									} else {
										echo "<span style=\"color:black;\">";
									}
								}
								echo $options[$c]->change;
								echo "</span>";
							?>
							</td>
							<td><?PHP echo $options[$c]->bid;?></td>
							<td><?PHP echo $options[$c]->ask;?></td>
							<td><?PHP echo $options[$c]->vol;?></td>
							<td><?PHP echo $options[$c]->openInt;?></td>
							</tr>
						<?PHP
						$c++;
				        }
			#var_dump($options);
		?>
			
	</tbody>
</br></br>
</table>
