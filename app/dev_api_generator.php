
<?php
require "session_controller.php";
$baseurl = "https://salabeb.com/app";
$mainpage = "https://salabeb.com";
$adminurl = "https://salabeb.com/sal6587"; 

$host="localhost";
$user="salaolid_salabeb39028";
$pass="Ayoson@faq67";
$dbanme="salaolid_SalabebDB39";

// $con=mysqli_connect($host, $user, $pass, $dbanme);
// if (!$con){die("Error Connecting DB".mysql_error());}



$email = $_SESSION['useremail'];
$pass = $_SESSION['userpas'];
$query = mysqli_query($con, "SELECT sk_token FROM `users` WHERE email = '$email' AND users_sid = '$pass'");
$return_data=mysqli_fetch_assoc($query);
$token=$return_data['sk_token'];

if ($token == "")
{
  $token=uniqid().md5($email);  
}

if($_POST['action']=="action"){
// $token=md5($email.$pass);
// $token=uniqid().md5($email);
// $token=md5($email).uniqid();
$sql = mysqli_query($con, "UPDATE users SET api_token='$token' WHERE email = '$email' && users_sid = '$pass'");
echo "Your api token has successfully been generated";
}
?>