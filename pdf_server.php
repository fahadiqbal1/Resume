<?php 
header("Content-Type: application/octet-stream");

$file = "resume.pdf";
header("Content-Disposition: attachment; filename=FahadIqbalResume.pdf");   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp);