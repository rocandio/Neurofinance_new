<script>
$(document).ready(function(){
    $(".feedflare").hide();
 });
</script>
    <?php
        $i=0;
        $xml = simplexml_load_file('http://www.bloomberg.com/tvradio/podcast/cat_markets.xml'); //loading the document
        $items = $xml->channel->item; //gets the title of the document.     
        echo "<article  class=\"block_topic_post\">";
        foreach($items as $item){
            if($i<10){
                    $i++;
                    ?>
                    <?php
                    echo "<a class=\"links_news\"href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
                    echo "</br>";
                    echo "<p class=\"p_news\">";
                    echo $item->children('itunes',true)->subtitle;
                    echo "</p>";
                    echo "<p class=\"publ_news\"style=\" style=\"text-align:right\">"."Duration: ".$item->children('itunes',true)->duration." PubDate: ".$item->pubDate."</p></br>";
                    echo "</br></br>";

            }
            else
                break;
        }
        echo "</article>";
    ?>
