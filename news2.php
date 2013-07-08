<?php
    $type_news = $_GET['t'];
?>
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
                            
                        
            <!-- Recent News -->
            <div class="block_home_col_1">
            </div>
            <div class="clearboth"></div>
                <div class="clearboth"></div>
                <div style="margin:13px 0px 35px;"></div>
            <!-- end Recent News -->
                <!-- Recent News 2 --> 
                <h3 style="font-size:16px;"><a href="" style="text-transform: uppercase;"><?php echo $type_news;?>  Main News</a></h3>
                <div class="line_4" style="margin:-4px 0px 18px;"></div>
                <div class="block_topic_news">
                        <?php
                            switch ($type_news) {
                                case 'all':
                                    include 'news/all.php';
                                    break;
                                case 'americas':
                                    include 'news/americas.php';
                                    break;
                                case 'africa':
                                    # code...
                                    include 'news/africa.php';
                                    break;
                                case 'asia':
                                    # code...
                                    include 'news/asia.php';
                                    break;
                                case 'europe':
                                    # code...
                                    include 'news/europe.php';
                                    break;
                                case 'middle east':
                                    # code...
                                    include 'news/middleeast.php';
                                    break;
                                case 'usa':
                                    # code...
                                    include 'news/usa.php';
                                    break;
                                case 'markets':
                                    # code...
                                    include 'news/markets.php';
                                    break;
                                case 'business':
                                    # code...
                                    include 'news/business.php';
                                    break;
                                case 'technology':
                                    # code...
                                    include 'news/technology.php';
                                    break;
                                case 'media':
                                    # code...
                                    include 'news/media.php';
                                    break;
                                default:
                                    echo "<div class=\"error_stock\">News not found...</div>";
                                    break;
                            }
                          
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
                            <img src="wp-content/themes/business-news/images/a_1.png"></img>
                            
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