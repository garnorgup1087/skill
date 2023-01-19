<?php
session_start();
$to_email = $_SESSION['Email'];
$subject = "OTP Verification";
$otp1=rand(100000,999999);
$Email=$_SESSION['Email'];
$body = "Your OTP is: $otp1";
$headers = "From: garvitgupta.bt21ele@pec.edu.in";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
$servername="localhost";
$username="root";
$password="";
$database="login";
$conn=mysqli_connect($servername,$username,$password,$database);
$logged=false;
if(!$conn){
  die("Sorry! we failed to connect");
}
  else{
    $existSql = "SELECT * FROM `verify` WHERE Email = '$Email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
      $existSql = "DELETE FROM verify WHERE `verify`.`Email` = '$Email' ";
      $result = mysqli_query($conn, $existSql);
    }
    $Email=$_SESSION['Email'];
    $sql = "INSERT INTO `verify` (`otp`, `Email`) VALUES ('$otp1', '$Email')";
    $result = mysqli_query($conn, $sql);
    $logged=true;
    header("Location: rege.php");
    }
session_abort();
?>
