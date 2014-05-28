<?php
   print '<h1>' . $xml->channel->title . '</h1>';
  echo '<p><img src="' . $xml->channel->url . '" /></p>';
  foreach($xml->channel->item as $story)
  {
    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br /><br />';
  }