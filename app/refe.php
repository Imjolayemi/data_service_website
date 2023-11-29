<?php
$host2="localhost";
$user2="salaolid_salabeb39028";
$pass2="Ayoson@faq67";
$dbname2="salaolid_SalabebDB39";

$con2=mysqli_connect($host2,$user2,$pass2,$dbname2);
$username=trim(mysqli_real_escape_string($con2,$_POST['username']));
$checker="SELECT sum(amount) as amount FROM `referal_link` WHERE `referal_username`='$username' and amount>0 and status='no'";
          $result2 = mysqli_query($con2, $checker);  
          $row2 = mysqli_fetch_array($result2);
$cashout=$row2['amount'];
if(empty($cashout)){
    $cashout=0;
}
if($cashout==0){
        echo "false";
}else{
    
    $sql ="UPDATE referal_link SET status='yes' WHERE referal_username='$username' and amount>0";
if (mysqli_query($con2, $sql)) {
 // echo "Record updated successfully";
} else {
  //echo "Error updating record: " . mysqli_error($con2);
}

    
    $checker2="SELECT wallets FROM `users` WHERE `username`='$username' ";
          $result3 = mysqli_query($con2, $checker2);  
          $row3 = mysqli_fetch_array($result3);
        $total= intval($row3['wallets'])+intval($cashout);
    
    $sql2 ="UPDATE users SET wallets=$total WHERE username='$username'";
if (mysqli_query($con2, $sql2)) {
  echo "true";
} else {
  //echo "Error updating record: " . mysqli_error($con2);
}
    
    
}



?>