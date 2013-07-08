<?php
        $i=0;
        $xml = simplexml_load_file('http://feeds.reuters.com/reuters/globalmarketsNews?format=xml'); //loading the document
        $items = $xml->channel->item; //gets the title of the document.     
        foreach($items as $item){
            if($i<5){
                    $i++;
                    ?>
                    <div style="float:left; width:500px; ">
                        <?php
                        echo "<a class=\"links_news\"href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
                        echo "</br>";
                        echo "<p class=\"p_news\">";
                        echo $item->description;
                        echo "</p>";
                        echo "</br></br>";
                        echo "<p style=\"publ_news\">".$item->pubDate."</p></br>";
                    echo "</div>";
            }
            else
                break;
        }
    ?>
