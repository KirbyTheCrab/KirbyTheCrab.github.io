<?php
if (isset($_POST['Submit'])) {
  $name = $_POST['name'];
  $emailfrom = $_POST['email'];
  $subject= $_POST['Subject'];
  $message = $_POST['message'];

  $mailto = "zoard.vincze15@gmail.com"
  $headers ="From: ".$emailfrom;
  $txt ="You have received an Email from ".$name."./n/n". $message;

  mail($mailto, $subject, $txt, $headers);
  head(Location: contact.html?mailsend);
} ?>
