<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailheader = "FROM:".$name."<".$email.">\r\n";

$recipient = "adnan.krndzija.ak@gmail.com";

mail($recipient, $subject, $message, $emailheader)
or die("Error!");

echo"message send";


?>