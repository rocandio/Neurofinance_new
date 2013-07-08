
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
					<a href="/q/p?s=GOOG+Press+Releases">Press Releases</a>
				</li>
				<li>
					<a href="/q/ce?s=GOOG+Company+Events">Company Events</a>
				</li>
				<li>
					<a href="/mb/GOOG/">Message Boards</a>
				</li>
				<li>
					<a href="/marketpulse/GOOG">Market Pulse</a>
				</li>
			</ul>
			<h3>Company</h3>
			<ul>
				<li>
					<a href="/q/pr?s=GOOG+Profile">Profile</a>
				</li>
				<li><a href="stock_search.php?s=<?php echo $symbol;?>&o=ks">Key Statistics</a></li>
				<li>
					<a href="/q/sec?s=GOOG+SEC+Filings">SEC Filings</a>
				</li>
				<li>
					<a href="/q/co?s=GOOG+Competitors">Competitors</a>
				</li>
				<li>
					<a href="/q/in?s=GOOG+Industry">Industry</a>
				</li>
				<li>
					<a href="/q/ct?s=GOOG+Components">Components</a>
				</li>
			</ul>
			<h3>Analyst Coverage</h3>
			<ul>
				<li>
					<a href="/q/ao?s=GOOG+Analyst+Opinion">Analyst Opinion</a>
				</li>
				<li>
					<a href="/q/ae?s=GOOG+Analyst+Estimates">Analyst Estimates</a>
				</li>
				<li>
					<a href="/q/rr?s=GOOG+Research+Reports">Research Reports</a>
				</li>
			</ul>
			<h3>Ownership</h3>
			<ul>
				<li>
					<a href="/q/mh?s=GOOG+Major+Holders">Major Holders</a>
				</li>
				<li>
					<a href="/q/it?s=GOOG+Insider+Transactions">Insider Transactions</a>
				</li>
				<li>
					<a href="/q/ir?s=GOOG+Insider+Roster">Insider Roster</a>
				</li>
			</ul>
			<h3>Financials</h3>
			<ul>
				<li>
					<a href="/q/is?s=GOOG+Income+Statement&amp;annual">Income Statement</a>
				</li>
				<li><a href="/q/bs?s=GOOG+Balance+Sheet&amp;annual">Balance Sheet</a>
				</li>
				<li>
					<a href="/q/cf?s=GOOG+Cash+Flow&amp;annual">Cash Flow</a>
				</li>
			</ul>
		</div>
		<div class="ft">
		</div>
		</div>
	</div>