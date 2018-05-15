<?php

$method = $_SERVER['REQUEST_METHOD'];

$to = '5757@ait.nsw.edu.au';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From:" . $email . "\r\n";

mail($to,$subject, $name . ' wrote a message: ' . $message ,$headers);

?>