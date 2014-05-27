<?php
$myfeed = simpleXML_load_file("http://wegeekedthis.com/feed/");
foreach($myfeed->channel[0] as $element){
    $itemdate = explode(" ", $element->pubDate);
    echo "<small>" .$itemdate[0]. " " .$itemdate[1]. " " .$itemdate[2].
            " " .$itemdate[3]. "</small>";
    echo "<br>";
    echo "<a href='" .$element->link. "'>" .$element->title. "</a>";
    echo "<br>";
}
// var_dump($myfeed);
?>
