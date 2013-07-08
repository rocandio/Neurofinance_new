<script>
$(document).ready(function(){
    $(".feedflare").hide();
 });
</script>
    <?php
        $i=0;
        $xml = simplexml_load_file('http://feeds.reuters.com/reuters/smallBusinessNews?format=xml'); //loading the document
        $items = $xml->channel->item; //gets the title of the document.     
        echo "<article  class=\"block_topic_post\">";
        foreach($items as $item){
            if($i<5){
                    $i++;
                    ?>
                    <?php
                    echo "<a class=\"links_news\"href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
                    echo "</br>";
                    echo "<p class=\"p_news\">";
                    echo $item->description;
                    echo "</p>";
                    echo "<p class=\"publ_news\"style=\" text-align: right;\">".$item->pubDate."</p>";
                    echo "</br></br>";

            }
            else
                break;
        }
        echo "</article>";
    ?>

