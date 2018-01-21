<?php


function load(){

	$pages=filter_input(INPUT_GET,"page",FILTER_SANITIZE_STRING);
	$pages=(!$pages)? "pages/home.php": "pages/{$pages}.php";
      
       if (!file_exists($pages)) {
       	throw new Exception("Error Processing Request");
       	
       }

       return $pages;

}