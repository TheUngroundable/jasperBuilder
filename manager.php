<?php
$url = "localhost/jasperBuilder/template.php?";
$outputUrl = "output.txt";

$num_creditlines = 70;
$num_partners = 3;
$num_details = 30;

file_put_contents("output.txt", "");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url."num_creditlines=".$num_creditlines."&num_partners=".$num_partners."&num_details=".$num_details); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

$output = curl_exec($ch); 

$outputFile = fopen($outputUrl, "w") or die("Unable to open file!");
fwrite($outputFile, $output);
fclose($outputFile);
?>