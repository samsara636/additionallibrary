<?php

//defer 3rd party js
function defer_parsing_of_js($url)
{
  if (is_admin()) return $url; //don't break WP Admin
  if (false === strpos($url, '.js')) return $url;
  if (strpos($url, 'jquery.js')) return $url;
  return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);

//defer 3rd party js for newer version of wordpress
function defer_parsing_of_js($url)
{
  if (is_admin()) return $url; //don't break WP Admin
  if (false === strpos($url, '.js')) return $url;
  if (strpos($url, 'jquery.min.js')) return $url;

  if (strpos($url, 'jquery-migrate.js')) return $url;
  return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);




