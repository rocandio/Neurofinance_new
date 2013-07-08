  <?php
  date_default_timezone_set('America/New_York'); 

?>
 <header>
               <div id="header">
                    <section class="top">
                        <div class="inner">
                            <div class="fl">
                                <div class="block_top_menu">
                                    <ul id="top-left-menu" class=""><li id="menu-item-16" class="menu-item menu-item-16"><a title="NeuroMama" href="http://neuromama.com/#">NeuroMama</a></li>
                                        <li id="menu-item-17" class="menu-item menu-item-17"><a title="Neuro Points" href="http://neuromama.com/#">Neuro Points</a></li>
                                        <li id="menu-item-19" class="menu-item menu-item-19"><a title="Neuro World" href="http://neuromama.com/#">Neuro World</a></li>
                                        <li id="menu-item-18" class="menu-item menu-item-18"><a title="Contact Us" href="http://neuromama.com/#">Contact Us</a></li>
                                        </ul>                            
                                </div>
                            </div>
                            
                            <div class="fr">
                                <div class="block_top_menu">
                                    <ul id="top-right-menu" class="">
                                        <li id="menu-item-15" class="menu-item menu-item-15">
                                            <a title="Registration" href="http://neuromama.com/index.php?action=reg" target="_blank">Registration</a>
                                        </li>
                                        <li id="menu-item-14" class="menu-item menu-item-14">
                                            <a title="NeuroMail" href="http://neuromama.com/index.php?action=neuromail" target="_blank">NeuroMail</a>
                                        </li>
                                    </ul>                            
                                </div>
                                
                                <div class="block_social_top">
                                    <ul>
                                        <li><a href="http://twitter.com/NeuroMamaFinance" class="tw">Twitter</a></li>                                    
                                        <li><a href="http://facebook.com/NeuroMamaFinance" class="fb">Facebook</a></li>                                                                     
                                        <li><a href="http://finance.neuromama.com/rss" class="rss">RSS</a></li>                                
                                    </ul>   
                                </div>

                            </div>

                            
                            <div class="clearboth"></div>
                        </div>
                    </section>
                                  
                    <section class="bottom">
                        <div class="inner">
                            <div id="logo_top" style=" margin-left: 0px; ">
                                <a href="http://finance.neuromama.com">
                                    <img src="wp-content/themes/business-news/images/log_finance.png" alt="Finance NeuroMama" title="Finance NeuroMama" width="320px">
                                </a>
                            </div>
                            
                                                    
                            <div class="block_today_date">
                                <div class="num">
                                    <p id="num_top_day"><?php echo date("d");?></p>
                                </div>
                                <div class="other">
                                    <p class="month_year">
                                        <span id="month_top_display"><?php echo date("M");?></span>, <span id="year_top_display"><?php echo date("Y");?></span>
                                    </p>
                                    <p id="day_top_display" class="day"><?php echo date("l");?></p>
                                </div>
                            </div>
                              <div class="fr" style="width:200px;">
                            <div class="fr" style="margin-right: 50px">
                                <img src="wp-content/themes/business-news/images/a_1.png" width="200px" height="100px">
                                  
                            </div>
                            <div class="fr">
                                <form style="width:200px"class="search_neuro cf" action="http://neuromama.com/index.php?action=search&query=as&type=web">
                                        <input type="text" name="query" value="" placeholder="Search on Neuromama.com..." required>
                                        <input name="type" value="web" style="display:none">
                                        <input name="action" value="search" style="display:none">
                                        <button type="submit">Search</button>
                                    </form> 
                            </div>
                        </div>
                            
                            <div class="clearboth"></div>
                        </div>

                    </section>
                                   
                    <section class="section_main_menu">
                        <div class="inner">
                            <nav class="main_menu">
                                <ul id="main-primary-menu" class="">
                                   
                                    <li id="menu-item-22" class="menu-item menu-item-22">
                                        <a title="Home" href="index.php">Home</a>
                                    </li>
                                    <li id="menu-item-63" class="menu-item menu-item-63">
                                        <a title="Markets" href="news.php?t=markets">Markets</a>
                                    </li>
                                    <li id="menu-item-21" class="menu-item menu-item-21">
                                        <a title="Business" href="news.php?t=business">Business</a>
                                    </li>
                                    <li id="menu-item-22" class="menu-item menu-item-23">
                                        <a title="News" href="news.php?t=all">News</a>
                                        <ul id="sub-menu">
                                            <li id="menu-item-67" class="menu-item menu-item-67">
                                                <a title="All News" href="news.php?t=all">All News</a>
                                            </li>
                                            <li id="menu-item-79" class="menu-item menu-item-79">
                                                <a title="Americas" href="news.php?t=americas">Americas</a>
                                            </li>
                                            <li id="menu-item-66" class="menu-item menu-item-66">
                                                <a title="Africa" href="news.php?t=africa">Africa</a>
                                            </li>
                                            <li id="menu-item-68" class="menu-item menu-item-68">
                                                <a title="Asia" href="news.php?t=asia">Asia</a>
                                            </li>
                                            
                                            <li id="menu-item-73" class="menu-item menu-item-73"><a title="Europe" href="news.php?t=europe">Europe</a></li>
                                            <li id="menu-item-75" class="menu-item menu-item-75"><a title="Middle East" href="news.php?t=middle east">Middle East</a></li>
                                            <li id="menu-item-78" class="menu-item menu-item-78"><a title="USA" href="news.php?t=usa">USA</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-20" class="menu-item menu-item-20">
                                        <a title="Technology" href="news.php?t=technology">Technology</a>     
                                    </li>
                                    <li id="menu-item-64" class="menu-item menu-item-64">
                                        <a title="Media" href="news.php?t=media">Media</a>
                                    </li>
                                        
                                        


                                </ul>
<!-- <form name='upcoming_form'><script>
                                            // Attach event handler to button
                                            document.getElementById("find_symbol").addEventListener("click",find_symbol,false);// Get user input and submit form
                                            function find_symbol(){
                                                document.upcoming_form.symbol.value = document.getElementById('symbol').value || "nero";
                                                document.upcoming_form.submit();
                                            }
                                        </script>
                                                Symbol: <input name='symbol' id='symbol' type='text' size='20'/><br/>
                                                <p><button id='find_symbol'>Find Symbol</button></p>
                                            </form>

                                        -->
                            </nav>
                        </div>
                    </section>

                    <section class="section_secondary_menu">
                        <div class="inner">
                             <form class="searchform" name="upcoming_form"action="stock_search.php" method="get">
                                        <input class="searchfield" type="text" id="symbol" name="s" value="" placeholder="Stock Symbol..." />
                                        <input value="su" name="o" style="display:none"/>
                                        <input class="searchbutton" id='find_symbol' value="Go"  type="submit"/>
                                        </form>
                            <div class="block_clock">
                                <p>Time: <span id="time_display"><?php echo date("g");echo ":";echo date("i"); echo " ".date("a"). " (PDT)";?></span></p>
                            </div>
                        </div>
                        
                    </section>
                                    
                </div>
            </header>