<?php 
    if(!empty($info->ErrorIndicationreturnedforsymbolchangedinvalid)){
echo "<div class=\"error_stock\">Error! Symbol stock not found, please try again...</div>";
}
else{
    echo "<div class = \"stock_info\">";
    echo "<div class=\"infoss\" style=\"color:#000\">".$info->Name." (".$info->symbol.") - <b style=\"font-size: 12px; color:#ccc\">".$info->StockExchange."</b></div>";
    $lo = explode(' - ', $info->Change_PercentChange);
    echo "<div class = \" s\"><strong>".$info->LastTradePriceOnly."  </strong></div>" ;
    #var_dump($lo);
    if($lo[0] > 0){
                                    echo "<img src=\"wp-content/themes/business-news/images/up.png\" width=\"20px\">";
                                    echo "<span style=\"color:green;\">";
                                }
                                else{
                                    if ($lo[0]< 0) {
                                        echo "<img src=\"wp-content/themes/business-news/images/down.png\"width=\"20px\">";
                                        echo "<span style=\"color:#FF0000;\">";
                                    } else {
                                        echo "<span style=\"color:black;\">";
                                    }
                                }
                                echo $lo[0];
                                echo "</span>";
    if($lo[1] > 0){
                                    
                                    echo "<span style=\"color:green;\"> (";
                                }
                                else{
                                    if ($lo[1] < 0) {
                                       
                                        echo "<span style=\"color:#FF0000;\"> (";
                                    } else {
                                        echo "<span style=\"color:black;\"> (";
                                    }
                                }
                                echo $lo[1];
                                echo " )</span>";
    
    echo "</div>";
    switch ($option) {
        case 'su':
            # code...
            include 'results_sumary.php'; 
            include 'results/chart.php';
            break;
        case 'ob':
            # code...
            include 'results/order_book.php';
            break;
        case 'op':
            # code...
            include 'results/options_stock.php';
            break;
        case 'hp':
            # code...
            include 'results/historicaldata.php';            
            break;
        case 'ch':
            # code...
            include 'results/interactive_chart.php';
            break;
        case 'bc':
            # code...
            include 'results/basic_chart.php';
            break;
        case 'bt':
            # code...
            include 'results/basic_tech.php';

            break;
        case 'hl':
            # code...
            include 'results/headlines.php';
            break;
        case 'ks':
            # code...
            include 'results/key_statistics.php';
            break;
        default:
            # code...
            include 'results_sumary.php'; 
            include 'results/chart.php';
            break;
    }


}
?>