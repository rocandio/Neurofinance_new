<?php
	$file = fopen('http://finance.yahoo.com/d/quotes.csv?s='.$symbol.'&f=pobb3ab2t8mwvj1j3rr2e0yk1c1c6p2s', 'r'); 
	$file1 = fopen('http://finance.yahoo.com/d/quotes.csv?s='.$symbol.'&f=b6', 'r');
	$file2 = fopen('http://finance.yahoo.com/d/quotes.csv?s='.$symbol.'&f=a5', 'r');
	#$file3 = fopen('http://finance.yahoo.com/d/quotes.csv?s='.$symbol.'&f=n', 'r');
	#$parameters=array('bidsize','asksize','name');
	$i=0;
	$bidsize = "";
	$asksize = "";
	while (($line = fgetcsv($file1)) !== FALSE) {
		$size = count($line);
		#echo "size: ".$size."</br>";
		$j=0;
		while($j<$size){
			$array1[$j]=$line[$j];
			$j++;
		}
		$i++;
	}
	fclose($file1);
	$i=0;
	while($i<$size){

		$bidsize = $bidsize . $array1[$i];
		$i++;
	}
	$i=0;
	while (($line = fgetcsv($file2)) !== FALSE) {
		$size = count($line);
		#echo "size: ".$size."</br>";
		$j=0;
		while($j<$size){
			$array1[$j]=$line[$j];
			$j++;
		}
		$i++;
	}
	fclose($file2);
	$i=0;
	while($i<$size){

		$asksize = $asksize . $array1[$i];
		$i++;
	}

?>
<?php 
	$parameters=array('prevclose','open','bid','bidRT','ask','askRT','1ytargetest','daysrange','52wkrange','volume','marketcap','marketcapRT','p/eratio','p/eratioRT','epsratio','div/yield','lasttradewtimeRT','change','changeRT','changePer','symbol');
	$i=0;
	while (($line = fgetcsv($file)) !== FALSE) {
		$size = count($line);
		#echo "size: ".$size."</br>";
		#echo "size_parameters: ".count($parameters)."</br>";
		$j=0;
		while($j<$size){
			$array[$parameters[$j]]=$line[$j];
			$j++;
		}
		$i++;
	}
	fclose($file);
	$i=0;
	while($i<$size){
		#echo $parameters[$i].": ".$array[$parameters[$i]]."</br>";
		$i++;
	}
	$number = count((array)$info_keys);
?>

<table class="hi" id="hi">
	<tr>
		<th>Prev Close: </th>
		<td><?php echo $array['prevclose'];?></td>
		<th>Day's Range</th>
		<td><?php echo $array['daysrange'];?></td>
	</tr>
	<tr>
		<th>Open: </th>
		<td><?php echo $array['open'];?></td>
		<th>52wk Range: </th>
		<td><?php echo $array['52wkrange']?></td>
	</tr>
	<tr>
		<th>Bid: </th>
		<td><?php echo $array['bid'];?><span style="font-size:10px"> x <?php echo $bidsize;?></span></td>
		<th>Volume: </th>
		<td><?php echo number_format($array['volume'],0,'.',',');?></td>
	</tr>
	<tr>
		<th>Ask: </th>
		<td><?php echo $array['ask'];?><span style="font-size:10px"> x <?php echo $asksize;?></span></td>
		<th>Avg Vol (3m): </th>
		<td><?php if ($number < 2){echo "N/A";}else echo $info_keys->AvgVol[0]->content;?></td>
	</tr>
	<tr>
		<th>1y Target Est: </th>
		<td><?php echo $array['1ytargetest'];?></td>
		
		<th>Market Cap: </th>
		<td><?php echo $array['marketcap'];?></td>
	</tr>
	<tr>
		<th>Beta: </th>
		<td><?php if ($number < 2){echo "N/A";}else echo $info_keys->Beta;?></td>
		<th>P/E (ttm):</th>
		<td><?php echo $array['marketcap'];?></td>
	</tr>
	<tr>
		<th>EPS (ttm): </th>
		<td><?php echo $array['epsratio'];?></td>
		<th>Div & Yield: </th>
		<td><?php echo $array['div/yield'];?></td>
	</tr>
</table>
<?php 
	include 'results/headlines.php';
?>