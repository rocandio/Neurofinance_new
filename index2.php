<!DOCTYPE html>
<html lang="EN-US">
    <?php
        include 'header.php';
    ?>
    <body class="custom-background">
        <div class="wrapper sticky_footer" id="top">
            <!-- HEADER BEGIN -->
           <?php 
            include 'head.php';
           ?>
            <!-- HEADER END -->
            
            <!-- CONTENT BEGIN -->
            <div id="content"  class="right_sidebar">
                
                <div class="inner">
                    <div class="markets_real_time" style="width:960px; padding:0px 9px; border: 2px solid rgb(234, 234, 234);">
                        <script src="http://markets.financialcontent.com/stocks?Module=tickerbar&Output=JS"></script>
                    </div>
                    <div class="general_content">
                        <div class="main_content">
                            <div class="block_home_slider">
                                <div id="home_slider" class="flexslider">
                                    <div class="border_box">
                                        <div class="box_skitter box_skitter_large">
                                            <ul>
                                                <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628152842-student-studying-620xa.jpg" width="600px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY<p></div></li>
                                                <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130627144357-hurt-rate-spike-620xa.jpg" width="600px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY<p></div></li>
                                                <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628125235-lookahead-chart-620xa.png" width="600px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY<p></div></li>
                                                <li><img class="block"src="http://i2.cdn.turner.com/money/dam/assets/130628113556-fslr-v-sp-500-620xa.png" width="600px"><div class="label_text"><p>STUDENT RATES TO DOUBLE MONDAY</p></div></li>
                                                <?php /*
                                                    $i=0;
                                                    $url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
                                                    $xml = simplexml_load_file('http://rss.cnn.com/rss/money_topstories.rss'); //loading the document
                                                    $items = $xml->channel->item; //gets the title of the document.     
                                                    //echo "<article  class=\"block_topic_post\">";
                                                    foreach($items as $item){
                                                        if($i<5){
                                                            //echo "<div id=\"news$i\">";
                                                            $i++;
                                                            $full_image = str_replace("-120x90","",$item->children('media',true)->attributes()->url);
                                                            //echo "<li><a href=\"".$item->link."\" target=\"_blank\"><img src=\"".$item->children('media',true)->attributes()->url."\" class=\"block\"/></a><div class=\"label_text\"><p>".$item->title."</p></div></li>";
                                                            echo "<li><img src=\"$full_image\" class=\"block\"/><div class=\"label_text\"><p>".$item->title."</p></div></li>";
                                                        }
                                                        else
                                                            break;
                                                    }*/
                                                ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        <div class="line_2" style="margin:34px 0px 28px;"></div>
            <!-- Recent News -->
            <div class="block_home_col_1">
            </div>
            <div class="clearboth"></div>
            <div class="line_3" style="margin:14px 0px 13px;"></div>
                <div class="clearboth"></div>
                <div style="margin:13px 0px 35px;"></div>
            <!-- end Recent News -->
                <!-- Recent News 2 --> 
                <h3 style="font-size:16px;"><a href="">Main News</a></h3>
                <div class="line_4" style="margin:-4px 0px 18px;"></div>
                <div class="block_topic_news">
                        <?php
                            $i=0;
                            $url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
                            $xml = simplexml_load_file('http://rss.cnn.com/rss/money_topstories.rss'); //loading the document
                            $items = $xml->channel->item; //gets the title of the document.     
                            echo "<article  class=\"block_topic_post\">";
                            foreach($items as $item){
                                if($i<10){
                                    echo "<div id=\"news$i\">";
                                    $i++;
                                ?>
                                <div style="float: left; width:200px; padding-top:10px; padding-bottom:10px;">
                                    <a href="<?php echo $item->link;?>" target="_blank">
                                        <div style=" margin: auto; width:150px; height:90px; background-image: url(<?php echo $item->children('media',true)->attributes()->url;?>); background-size: 120px 90px;">
                                        
                                        </div></a>
                                </div>
                                <div style="float: left;width:400px; padding-top:10px; padding-bottom:10px;">
                                <?php
                                    echo "<p class = \"publ_news\">".$item->pubDate."</p></br>";
                                    echo "<a class=\"links_news\" href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
                                    echo "</br></br>";
                                    echo "<p class=\"p_news\">".$item->description."</p></br>";
                                    echo "</br></br>";
                                    echo "</div>";
                                    echo "</div>";

                                }
                                else
                                    break;
                            }
                            echo "</article>";
                        ?>
                </div>
                
                        <div class="line_3" style="margin:20px 0px 24px;"></div>
                        <div class="block_pager">
                            
                            <div class="clearboth"></div>
                        </div>
                <!-- end Recent News 2 --> 
            
        
                        </div>
                        
                        <div class="sidebar">
                            <script src="http://markets.financialcontent.com/stocks?Module=snapshot&Ticker=$COMP+NERO+GOOG+FB+AMZN&Output=JS"></script>
                            <img src="wp-content/themes/business-news/images/a_1.png">

                        </div>
                        <div class="clearboth"></div>
                    </div>
                </div>
            </div>
            <!-- CONTENT END -->
            
            <!-- FOOTER BEGIN -->
            <?php 
                include 'footer.php';
            ?>
            <!-- FOOTER END -->
        </div>
    </div>
        <!-- POPUP BEGIN -->
        
    </body>
</html>