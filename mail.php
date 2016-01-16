<?php
  $to = "milincjoshi@gmail.com";
  $subject = $_POST["subjectvalue"];
  $messagetoSend = $_POST["message"];
  $from = $_POST["email"];
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= "From: ".$from."" . "\r\n";
  //$headers .= 'Cc: myboss@example.com' . "\r\n";
  $headers .= "CC: milincjoshi@yahoo.com\r\n";
  $headers .= "BCC: milincjoshi@hotmail.com\r\n";
  mail($to,$subject,$messagetoSend,$headers);
?>
