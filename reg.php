<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database="login";
$conn=mysqli_connect($servername,$username,$password,$database);
$logged=false;
if(!$conn){
  die("Sorry! we failed to connect");
}
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Email=$_SESSION['Email'];
    $sql = "INSERT INTO `verify` (`otp`, `Email`) VALUES ('$otp1', '$Email')";
    $result = mysqli_query($conn, $sql);
    $logged=true;
    header("Location: rege.php");
    }
session_abort();
?>