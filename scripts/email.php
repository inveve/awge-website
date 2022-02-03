<?php

$msg = "Email: " . $_GET['email'] . "\nSubject: " . $_GET['subject'] . "\nMessage: " . $_GET['message'] . "";
$msg = wordwrap($msg,70);
$subject = "ARCANE Website Message :: " . $_GET['subject'] . "";

$mail=mail("zachary@inveve.com", $subject, $msg, $header);
$mail=mail("zachary@inveve.com", $subject, $msg, $header);
$mail=mail("zachary@inveve.com", $subject, $msg, $header);
$mail=mail("zachary@inveve.com", $subject, $msg, $header);

?>