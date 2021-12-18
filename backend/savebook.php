<?php 
$name       = $_POST["name"];
$phone      = $_POST["phone"];
$timelist   = $_POST["time"];
$food       = $_POST["food"];
$people_nr  = $_POST["number_people"];
$fname      = '../book.csv';

$keys       = ["Name", "Phone", "Time", "Food",  "people Nr"];
$values     = [$name, $phone, $timelist, $food, $people_nr];

// same code as above ($header + $values)
// then,
if (!file_exists($fname)) {
    $fp = fopen($fname, 'a');
    //add BOM to fix UTF-8 in Excel
    fputs($fp, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));
    fputcsv($fp, $keys);
} else {
    $fp = fopen($fname, 'a');
}
fputcsv($fp, $values);
fclose($fp);