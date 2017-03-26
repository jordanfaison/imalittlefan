<?php
$myFile = "data.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$data = $_GET['id'];
$pieces = explode(",", $data);
$pieces[0] = strtoupper($pieces[0]);
$pieces[1] = strtoupper($pieces[1]);
$data = $piece1.",".$piece1.",".$pieces[2].",".$piece[3]
fwrite($fh, $data);
fclose($fh);
?>
