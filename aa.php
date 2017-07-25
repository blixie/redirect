<?php
    $urls = array('http://1.com',"http://2.com","http://3.com"); //specify array of possible URLs
    $rand = rand(0,count($urls)-1); //get random number between 0 and array length
    $location = $urls[$rand]; //get random item from array
    header ('HTTP/1.1 301 Moved Permanently'); //send header
    header ('Location: '.$location);
?>
