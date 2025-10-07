<?php
// dd('hello');
$file = file_get_contents('https://aagamhospital.com/mailers/contacteinquirymail.html');
    $file = str_replace('#name', $data['name'], $file);
    $file = str_replace('#email', $data['email'], $file);
    $file = str_replace('#mobile', $data['mobileNumber'], $file);
    $file = str_replace('#message', $data['message'], $file);
    $file = str_replace('#service', $data['service'], $file ?? ''); 
    $file = str_replace('#date', $data['date'], $file ?? '');
    echo $file;
?>
