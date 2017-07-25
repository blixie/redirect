<?
$urls[]="http://www.url1.com/";
$urls[]="http://www.url2.com/";
//Add as many urls as you want this way
$rnd=rand(0,count($urls)-1);
$redirect=$url[$rnd];
echo "<html><head><meta http-equiv='refresh' content='0;url=".$redirect."'></head><body></body></html>"; 
?>
