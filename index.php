<?php
header('Content-Type: application/vnd.ms-excel; charset=utf-8');
header('Content-Type: application/x-msexcel; charset=utf-8');
header('Content-Disposition: attachment; filename="excelsayfasi.xls"');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false);

// Your PHP code to generate the Excel file goes here

echo "Ad" . "\t" . "Soyad";
echo "\n";
echo "Mehmet" . "\t" . "Geylani";

?>