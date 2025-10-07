<?php
// echo "<pre>";
// print_r($renewalreport);
// exit;
$filename = 'Inquiry' . date('d-m-Y H:s:i') . '.xls';

header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=" . $filename);

ob_end_clean();

echo
"Sr.No"
."\t" ."Name"
."\t" ."Mobile"
."\t" ."Email"
."\t" ."Date"
."\t" ."Message"

 . "\n";


$i = 1;
$total=0;

foreach ($Inquiry as $key => $row)  
{

echo
    $i
  . "\t" . $row->name
  . "\t" . $row->mobileNumber
  . "\t" . $row->email
  . "\t" . $row->message
  . "\t" . date('d-m-Y', strtotime($row->created_at))

    . "\n";

    $i++;
}