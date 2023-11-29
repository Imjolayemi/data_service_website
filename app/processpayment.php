<?php
require_once('session_controller.php');
function genReference($qtd){
    $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;

    $Hash=NULL;

    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }

    return $Hash;
}

$postemail=$_POST['email'];
$postamount=$_POST['amountw'];
$charge=$postamount*2.0/100;
$final_amount=($postamount+$charge)*100;

$url = "https://api.paystack.co/transaction/initialize";

  $fields = [
    'email' => $email,
    'amount' => $final_amount,
    'callback_url' => 'https://www.freesub.com.ng/app/verifypaystack.php'
  ];

  $fields_string = http_build_query($fields);

  //open connection
  $ch = curl_init();
  
  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_live_f0dfeb48a16cf6d56b045f14e0825958dc419314",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
  //execute post
//   $result = curl_exec($ch);
//   echo $result;
$response = curl_exec($ch);
$err = curl_error($ch);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

// comment out this line if you want to redirect the user to the payment page
$transid=$tranx['data']['reference'];
    $sql ="INSERT INTO `deposit_transactions` (`id`, `user_email`, `user_username`, `user_service`, `user_amount`, `user_prebal`, `user_postbal`, `user_descr`, `user_status`, `user_date`, `timestring`, `sys_ref`, `api_ref`, `pay_gateway`, `api_report`, `cashier`) VALUES (NULL, '$email', '', 'DEPOSIT', '$final_amount', '$final_amount', '$final_amount', '', 'FAIL', '', '', '', '$transid', 'PAYSTACK', 'GOOD', '$email')";

    if (mysqli_query($con, $sql)) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page

header('Location: ' . $tranx['data']['authorization_url']);


// }else{
//   header('Location: payment-gateway.php?m='.$min_fund);
// }

?>