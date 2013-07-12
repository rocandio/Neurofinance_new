<?php 
    if(!empty($info->ErrorIndicationreturnedforsymbolchangedinvalid)){
echo "<div class=\"error_stock\">Stock symbol not found, please try again...</div>";
}
else{
    echo "<div class = \"stock_info\">";
    echo "<div class=\"infoss\" style=\"color:#000\">".$info->Name." (".$info->symbol.") - <b style=\"font-size:16px;\">".$info->StockExchange."</b></div>";
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
    echo "</br>";
    echo "</div>";
}
?>