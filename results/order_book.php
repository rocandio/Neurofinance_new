</br></br>

<h2>Order Book</h2>
</br></br>
<div id="book" style = "width: 600px; float:left;">
	<table class="ord">
		<thead>
			<tr>
				<th colspan="2">Bid</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Price</th>
				<th>Size</th>
			</tr>
			<?php
				$fila = 1;
				if (($gestor = fopen("http://finance.yahoo.com/d/quotes.csv?s=".$symbol."&f=bb6", "r")) !== FALSE) {
				    while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
				        $number = count($data);
				        
				        $fila++;
				        for ($c=0; $c < $number; $c=$c+2) {
				             
				        ?>
				            <tr>
							<td><?PHP echo $data[$c];?></td>
							<td><?PHP echo $data[$c+1];?></td>
							</tr>
						<?PHP
				        }
				    }
				    fclose($gestor);
				}
			?>
		</tbody>
	</table>
	<table class="ord">
		<thead>
			<tr>
				<th colspan="2">Ask</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Price</th>
				<th>Size</th>
			</tr>
			<?php
				$fila = 1;
				if (($gestor = fopen("http://finance.yahoo.com/d/quotes.csv?s=".$symbol."&f=aa5", "r")) !== FALSE) {
				    while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
				        $number = count($data);
				        
				        $fila++;
				        for ($c=0; $c < $number; $c=$c+2) {
				             
				        ?>
				            <tr>
							<td><?PHP echo $data[$c];?></td>
							<td><?PHP echo $data[$c+1];?></td>
							</tr>
						<?PHP
				        }
				    }
				    fclose($gestor);
				}
			?>
		</tbody>
	</table>
</div>
