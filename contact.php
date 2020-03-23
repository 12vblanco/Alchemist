<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

$email_from = 'www.thealchemistscavetattoo.com';
$email_subject = "New From Submission";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "User Message: $message.\n";
$to = "vblanco@mail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");

?>

<!--  
//  if (isset($_POST['submit']))
//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $phone = $_POST['phone'];
//    $message = $_POST['message'];

//    $mailto = "vblanco@mail.com";
//    $headers = "From: ".$email;
//    $txt = "You have received an email form ".$name." .\n\n".$message" .\n\n".$phone";

//    email($mailto, $txt, $headers);
//    header("Location: index.php?mailsend");
// ?>-->