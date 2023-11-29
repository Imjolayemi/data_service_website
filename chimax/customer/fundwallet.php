<?php
require("session_controller.php");

if ($_SESSION['csrftoken'] == $_POST['req_token']){

if (!empty($_POST['buyer_email']) && !empty($_POST['buyer_amount']) && !empty($_POST['buyer_narration']) && !empty($_POST['req_token']) && $_POST['buyer_amount']>0){

$buyer_email=strtolower(mysqli_real_escape_string($con, $_POST['buyer_email']));
$buyer_amount=mysqli_real_escape_string($con, $_POST['buyer_amount']);
$buyer_narration=mysqli_real_escape_string($con, $_POST['buyer_narration']);
$req_token=mysqli_real_escape_string($con, $_POST['req_token']);


$check_email=mysqli_query($con, "SELECT * FROM users WHERE email='$buyer_email'");

if (mysqli_num_rows($check_email)>0){

  $dateTime = new DateTime('now', new DateTimeZone('Africa/Lagos')); 
  $time=$dateTime->format("d-M-y  h:i A");
  $reference=strtoupper(time().uniqid().rand(10000000, 90000000));

  $userinfo = mysqli_fetch_array(mysqli_query($con, "SELECT wallets,username,email, id FROM users WHERE email='".$buyer_email."'"));
  $user_oldbal = $userinfo[0];
  $user_username=$userinfo[1];
  $user_email=$userinfo[2];
  $user_id=$userinfo[3];

if ($buyer_narration=="DEPOSIT"){
  $report=$buyer_amount." has been credited into your wallet !!!";
}
if ($buyer_narration=="REVERSE"){
  $report=$buyer_amount." has been reverse into your wallet !!!";
}

  $new_balance=$user_oldbal+$buyer_amount;
  mysqli_query($con, "UPDATE users SET wallets='$new_balance' WHERE id='$user_id' AND email='$user_email'");

  $setrecord=mysqli_query($con, "INSERT INTO `deposit_transactions` (`id`, `user_email`, `user_username`, `user_service`, `user_amount`, `user_prebal`, `user_postbal`, `user_descr`, `user_status`, `user_date`, `timestring`, `sys_ref`, `api_ref`, `pay_gateway`, `api_report`, `cashier`) VALUES (NULL, '$user_email', '$user_username', 'DEPOSIT', '$buyer_amount', '$user_oldbal', '$new_balance', '$report', 'SUCCESSFUL', '$time', '$timestring', '$reference', '0', 'MANUAL', 'DONE', '$admin_email')");

if ($setrecord){
    
     $checker2="SELECT percentage FROM `referal_percentage` WHERE `id`=1";
          $result22 = mysqli_query($con, $checker2);  
          $row22 = mysqli_fetch_array($result22);
      $percentage=$row22['percentage'];
      
    $checker="SELECT * FROM `referal_link` WHERE `email`='$user_email'";
          $result2 = mysqli_query($con, $checker);  
          $row2 = mysqli_fetch_array($result2);
          
        if($row2['status']=='no'&&$row2['amount']==0){
            
    $percentage_money=intval($buyer_amount)*(intval($percentage)/100);
    
      mysqli_query($con, "UPDATE referal_link SET amount='$percentage_money' WHERE email='$user_email' ");
        
            
        }
      
    
    
    
    
    
    
    
    
    
    
    $descr=$buyer_amount." is Successful Added To Your Wallet.";
    $subject = "You just receive a payment from ".$sitename;
    $body ='<h3>Description is as follows..</h3>';
    $body .='<p>Wallet Deposit: '.$report.'. <br/> Date : '.$time.'<br/><br/> Thank you for staying connected with '.$sitename.'.           <br/><hr/><br/>Your Customer Support at '.$sitename.'</p>';

    $email_to =$user_email;
    $email_from ="purchase@salabeb.com"; // Enter Sender Email


    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $subject, $body, $headers);


 $response=array(
    'status'=>'success',
    'message' => '<div class="alert alert-success text-left">Wallet funding successful !!! <br/> <p>Init. Bal:'.$user_oldbal.'<p><p>Post. Bal: '.$new_balance.'</p></div>',
  );
  echo json_encode($response);
  exit();


}

else{

 $response=array(
    'status'=>'fail',
    'message' => '<div class="alert alert-danger text-left">Critical error occur when funding !!!</div>',
  );
  echo json_encode($response);
  exit();

}


}

else{

 $response=array(
    'status'=>'fail',
    'message' => '<div class="alert alert-danger text-left">User record not found !!!</div>',
  );
  echo json_encode($response);
  exit();

}


}

else{

 $response=array(
    'status'=>'fail',
    'message' => '<div class="alert alert-danger text-left">Please fill all form !!!</div>',
  );
  echo json_encode($response);
  exit();

}


}

else{

 $response=array(
    'status'=>'fail',
    'message' => '<div class="alert alert-danger text-left">Something went wrong...</div>',
  );
  echo json_encode($response);
  exit();
}


?>