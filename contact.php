<?php

if (isset($_POST{'submit'})) {
  $name = $_POST{'name'};
  $email = $_POST{'email'};
  $phone = $_POST{'phone'};
  $message = $_POST{'message'};

  $mailto = "vblanco@mail.com";
  $headers = "From: ".$email, $phone;
  $txt = "You have received an email form ".$name." .\n\n".$message;

  email($mailto, $txt, $headers);
  header("Location: index.php?mailsend");
}