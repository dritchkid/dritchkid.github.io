<?php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$formcontent="From: $fname $lname \n Comment: $comment";
$recipient = "mail@davidritch.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Refresh and try again.");
echo "Message Sent.";
?>
