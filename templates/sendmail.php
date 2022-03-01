<?php

$recipient_kh = "cambodia.admin@successconsultingasia.com";
$recipient_th = "thailand.admin@successconsultingasia.com";

if(isset($_POST['submit'])) {
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $senderEmail = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $sender = $fname . " " . $lname;

    $mailBody="Name: $fname . $lname\nEmail: $sender\n$subject\n$message";

    mail($recipient_kh, $recipient_th, $mailBody, "From: $sender<$senderEmail");
}

?>