<?php
    $i=0;
    $url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
    $xml = simplexml_load_file('http://rss.cnn.com/rss/money_markets.rss'); //loading the document
    $items = $xml->channel->item; //gets the title of the document.     
    echo "<article  class=\"block_topic_post\">";
    foreach($items as $item){ if($i<10){ echo "<div id=\"news$i\">";$i++;
    ?>
    <div style="float: left; width:200px;">
    <a href="<?php echo $item->link;?>" target="_blank">
    <div style=" float: left; width:150px; height:90px; background-image: url(<?php echo $item->children('media',true)->attributes()->url;?>); background-size: 120px 90px;">
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