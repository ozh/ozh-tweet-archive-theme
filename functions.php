<?php

if ( function_exists('register_sidebar') )
    register_sidebar();
	
// highlights the current nav item for monthly archive listings
function get_archives_link_mod ( $link_html ) {
  preg_match ("/href='(.+?)'/", $link_html, $url);
  $requested = "http://{$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}";
  if ($requested == $url[1]) {
    $link_html = str_replace('<li>', '<li class="current">', $link_html);
  }
  return $link_html;
}
add_filter("get_archives_link", "get_archives_link_mod");


?>