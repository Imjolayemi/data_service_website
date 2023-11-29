<?php



$percent=$_POST['percentage'];

    $host2="localhost";
$user2="salaolid_salabeb39028";
$pass2="Ayoson@faq67";
$dbanme2="salaolid_SalabebDB39";

$con2=mysqli_connect($host2, $user2, $pass2, $dbanme2);

$update=mysqli_query($con2, "UPDATE referal_percentage SET percentage=$percent where id=1");

if($update){
    echo "Referral Bonus Successfully Set";
}





?>