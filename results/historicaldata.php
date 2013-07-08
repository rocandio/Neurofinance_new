<link rel="stylesheet" href="results/calendar/examples/public/css/reset.css" type="text/css">
<link rel="stylesheet" href="results/calendar/public/css/metallic.css" type="text/css">
<link rel="stylesheet" href="results/calendar/examples/public/css/calendar.css" type="text/css">
<link type="text/css" rel="stylesheet" href="results/calendar/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">

<script type="text/javascript" src="results/calendar/examples/public/javascript/jquery-1.10.1.js"></script>
<script type="text/javascript" src="results/calendar/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="results/calendar/examples/public/javascript/core.js"></script>

<script type="text/javascript">
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
</script>

<?php 
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
?>

	<div style="margin:0 auto; width:600px">
		<form style="display:block; text-align:left; " action="results/historicaldata.php" method="get">
			<div style="width:400px; padding-top:25px; padding-bottom:25px; margin: 0 auto;">
				<div style="position:relative; float:left; width:200px;">
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
			<table  style="margin:0 auto; background-color:#ECF2F6;">
			<?php
				if($sD>$eD){
					echo "INVALID DATE RANGE";
				}
				else{
					$url = 'http://ichart.yahoo.com/table.csv?s=';
					$file = fopen($url.'GOOG'.'&a='.$sd_m.'&b='.$sd_d.'&c='.$sd_y.'&d='.$ed_m.'&e='.$ed_d.'&f='.$ed_y.'&g='.$interval, 'r');
					$array;
					$i=0;
					while (($line = fgetcsv($file)) !== FALSE) {
						$array[$i++]=$line;
					}
					fclose($file);
					if(count($array)<2){
						echo $error_empty_array[$interval]." data is unavailable for the specified date range.";
					}			
					else{
						foreach($array[0] as $field){
							echo "<th style=\" border:2px solid#166880;\">".$field."</th>";
						}
						foreach(array_slice($array, 1, null, true) as $item){
							echo "<tr>";
							foreach($item as $field){
								echo "<td style=\" padding:10px; border-bottom:1px solid#166880;\">".$field."</td>";
							}
							echo "</tr>";
						}
					}
				}
			?>
			</table>
		</div>
	</div>