<?php 

/**
 * PHP Named Arguments
 */




/**
 * Skipping default arguments
*/

function create_anchor(
  $text,
  $href='#',
  $title='',
  $target='_self'
) {
  $href = $href ? sprintf('href="%s"',$href):'';
  $title = $title ? sprintf('title="%s"',$title):'';
  $target = $target ? sprintf('target="%s"',$target):'';

  return "<a $href $title>$text</a>";
}

// echo create_anchor("Facebook");





function displayAnchor(
  $text,
  $title="",
  $href="#",
  $target="_blank",
) {
  $title = $title ? sprintf("title='%s'",$title):"";
  $href = $href ? sprintf('href="%s"',$href):"";
  $target = $target ? sprintf('target="%s"',$target):"";

  echo "<a $href >$text</a>";
}

displayAnchor("Click",null,"facebook.com");