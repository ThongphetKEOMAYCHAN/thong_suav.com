<?php

$file = $_GET['file']. ".pdf";

header("Content-Disposition: attachment; filename=" .
urldecode($file));

$fb = fopen($file,"r");

while(!feof($fb)){
     echo fread($fb, 8192);
     flush();

}
fclose($fb);
?>