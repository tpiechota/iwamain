<?php
$html = "";
echo $html;
$url = "http://www.gatheringmagic.com/feed/";
$xml = simplexml_load_file($url);
for($i = 0; $i < 3; $i++){
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;

    $html .= "<div class=\"feed\">";
    $html .= "<h5><a href='$link'>$title</a></h5><span class=\"rss-feed-date\">$pubDate</span>";
    $html .= "<div class=\"rss-desc\">$description</div>";
    $html .= "</div>";
    $html .= "<hr />";
}
?>