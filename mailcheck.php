<?php
session_start();
$to_email = $_SESSION['Email'];
$subject = "OTP Verification";
$otp1=rand(100000,999999);
$Email=$_SESSION['Email'];
$body = "Your OTP is: $otp1";
$headers = "From: garvitgupta.bt21ele@pec.edu.in";
mail($to_email, $subject, $body, $headers);
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
session_abort();
?>