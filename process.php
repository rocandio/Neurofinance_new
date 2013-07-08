<?php
	
	require 'functions/YQL_functions.php';
	$symbol = $_GET['s'];
    $info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
    $info_keys=keystats($symbol,'select * from yahoo.finance.keystats where symbol=');
?>
<title>Finance NeuroMama</title>


	<div id="summary">
		<div id="result_query">
			<div class ="stock_info">
                <div class="infoss" style="color:#000"><?php echo $info->Name." (".$info->symbol.") - ";?><b style="font-size: 12px; color:#ccc"><?php echo $info->StockExchange;?></b></div>;
            </div>
			<table class="hi" id="hi">
				<tr>
					<th>Prev Close: </th>
					<td><?php echo $info->PreviousClose;?></td>
					<th>Day's Range</th>
					<td><?php echo $info->DaysRange;?></td>
				</tr>
				<tr>
					<th>Open: </th>
					<td><?php echo $info->Open;?></td>
					<th>52wk Range: </th>
					<td><?php echo $info_keys->p_52_WeekLow->content." - ".$info_keys->p_52_WeekHigh->content;?></td>
				</tr>
				<tr>
					<th>Bid: </th>
					<td><?php echo $info->Bid;?></td>
					<th>Volume: </th>
					<td><?php echo $info->Volume;?></td>
				</tr>
				<tr>
					<th>Ask: </th>
					<td><?php echo $info->Ask;?></td>
					<th>Avg Vol (3m): </th>
					<td><?php echo $info_keys->AvgVol[0]->content;?></td>
				</tr>
				<tr>
					<th>1y Target Est: </th>
					<td><?php echo $info->OneyrTargetPrice;?></td>
					
					<th>Market Cap: </th>
					<td><?php echo $info->MarketCapitalization;?></td>
				</tr>
				<tr>
					<th>Beta: </th>
					<td><?php echo $info_keys->Beta;?></td>
					<th>P/E (ttm):</th>
					<td><?php echo $info_keys->TrailingPE->content;?></td>
				</tr>
				<tr>
					<th>Next Earnings Date:</th>
					<td>TO DO </td>
					<th>EPS (ttm): </th>
					<td><?php echo $info_keys->DilutedEPS->content;?></td>
				</tr>
				<tr>
					<th> </th>
					<th> </th>
					<th>Div & Yield: </th>
					<td><?php echo $info->DividendYield;?></td>
				</tr>
			</table>

		</div>
	</div>
