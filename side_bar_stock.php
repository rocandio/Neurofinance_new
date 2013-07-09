
	<div id="cssmenu" style="height: 1280px; width: 240px;">
		<div >
			<div class="hd">
			More On <b style="text-transform: uppercase;"><?php echo $symbol; ?></b>
		</div>
		<div id='cssmenu'>
			<h3>Quotes</h3>
			<ul>
				<li>
					<a href="stock_search.php?s=<?php echo $symbol;?>&o=su">Summary</a>
				</li>
				<li>
					<a href="stock_search.php?s=<?php echo $symbol;?>&o=ob">Order Book</a>
				</li>
				<li>
					<a href="option_search.php?s=<?php echo $symbol;?>&d=">Options</a>
				</li>
				<li>
					<a href="historical.php?s=<?php echo $symbol;?>&start=2010-01-01&end=<?php echo date("Y-m-d");?>&i=d">Historical Prices</a>
				</li>
			</ul>
			<h3>Charts</h3>
			<ul>
				
				<li>
					<a href="basic_chart.php?s=<?php echo $symbol;?>&c=&q=&t=&l=&z=">Basic Chart</a>
				</li>
				<li>
					<a href="chart_adv.php?s=<?php echo $symbol;?>&p&a&c&a&q=&t=&l=&z=">Basic Tech. Analysis</a>
				</li>
			</ul>
			<h3>News &amp; Info</h3>
			<ul>
				<li>
					<a href="stock_search.php?s=<?php echo $symbol;?>&o=hl">Headlines</a>
				</li>
				<li>
					<a href="#">Press Releases</a>
				</li>
				<li>
					<a href="#">Company Events</a>
				</li>
				<li>
					<a href="#">Message Boards</a>
				</li>
				<li>
					<a href="#">Market Pulse</a>
				</li>
			</ul>
			<h3>Company</h3>
			<ul>
				<li>
					<a href="#">Profile</a>
				</li>
				<li><a href="stock_search.php?s=<?php echo $symbol;?>&o=ks">Key Statistics</a></li>
				<li>
					<a href="#">SEC Filings</a>
				</li>
				<li>
					<a href="#">Competitors</a>
				</li>
				<li>
					<a href="#">Industry</a>
				</li>
				<li>
					<a href="#">Components</a>
				</li>
			</ul>
			<h3>Analyst Coverage</h3>
			<ul>
				<li>
					<a href="#">Analyst Opinion</a>
				</li>
				<li>
					<a href="#">Analyst Estimates</a>
				</li>
				<li>
					<a href="#">Research Reports</a>
				</li>
			</ul>
			<h3>Ownership</h3>
			<ul>
				<li>
					<a href="#">Major Holders</a>
				</li>
				<li>
					<a href="#">Insider Transactions</a>
				</li>
				<li>
					<a href="#">Insider Roster</a>
				</li>
			</ul>
			<h3>Financials</h3>
			<ul>
				<li>
					<a href="#">Income Statement</a>
				</li>
				<li><a href="#">Balance Sheet</a>
				</li>
				<li>
					<a href="#S">Cash Flow</a>
				</li>
			</ul>
		</div>
		<div class="ft">
		</div>
		</div>
	</div>