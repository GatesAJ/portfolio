<?php

// $file_url = 'downloads/AndrewGatesResume.pdf';
// header('Content-Type: application/octet-stream');
// header("Content-Transfer-Encoding: Binary"); 
// header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
// readfile($file_url); // do the double-download-dance (dirty but worky)

$url = "http://localhost/myproject/downloads/AndrewGatesResume.pdf";
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"AndrewGatesResume.pdf\""); 
echo readfile($url);

?>

