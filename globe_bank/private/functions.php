<?php

//create absolute urls that are relative to the root of the entire website
function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    // set absolute point that we can base all of our other URLs off of
    return WWW_ROOT . $script_path;
  }

  function u($string=""){
    return urlencode($string);
  }
  function raw_u($string=""){
    return rawurlencode($string);
  }

  // turn special characters enetered into browser search bar and puts it into simple text (prevents XSS) 
  function h($string="") {
    return htmlspecialchars($string);
  }

  function error_404() {
    header($_SERVER['SERVER_PROTOCOL'] . " 404 NOT Found");
    exit();
  }
  function error_500() {
    header($_SERVER['SERVER_PROTOCOL'] . " 500 Internal Server Error");
    exit();
  }
  
  // 
  function redirect_to($location) {
    header("Location: " . $location);
    exit;
  }

  // if the condition equals a POST REQUEST, this function will run
  function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }

// if the condition equals a GET REQUEST, this function will run
function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>
