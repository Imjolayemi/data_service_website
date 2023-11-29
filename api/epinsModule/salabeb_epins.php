<?php
require ("../functions/epins_price.php");

$service_url="https://salabeb.com/api/education";

if ($service=="WAEC"){
$service_price=$waec;
$service_comm=$waec_comm;
}

if ($service=="NECO"){
$service_price=$neco;
$service_comm=$neco_comm;
}

if ($service=="NABTEB"){
$service_price=$nabteb;
$service_comm=$nabteb_comm;
}

if ($service=="NBAIS"){
$service_price=$nbais;
//$service_comm=$nabteb_comm;
}

if ($account_balance > $service_price && $service_price > 0){

$new_wallet=$account_balance-$service_price;
mysqli_query($con, "UPDATE users SET wallets='$new_wallet' WHERE id='$user_id' AND username ='$account_username'");

$payload=array(
  'token' => $token,
  'service_id' => $service,
  'request_id' => strtoupper(time().rand(10000000, 90000000).mt_rand()),
);

$url = $service_url;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$request = curl_exec($ch);
curl_close($ch);
$apidata=json_decode($request);
$message=$apidata->message;
$status=$apidata->status;

if ($status=="success"){


 $order_report=strtoupper($service.' N'.$service_price.' E-Pin Purchase Successful on '.$mobile_no.' ['.$message.']');

 mysqli_query($con, "INSERT INTO `final_transactions` (`id`, `mobile_number`, `buyer_email`, `buyer_username`, `buyer_service`, `buyer_amount`, `buyer_prebal`, `buyer_postbal`, `buyer_descr`, `buyer_status`, `buyer_date`, `timestring`, `charge_from`, `user_type`, `sys_ref`, `api_ref`, `api_report`, `src_price`, `profit`, `databyte`) VALUES (NULL, '$mobile_no', '$account_email', '$account_username', '$service', '$service_price', '$account_balance', '$new_wallet', 'message', 'SUCCESSFUL', '$time', '$timestring', 'WALLET', '$level', '$api_reference', '$reference', 'DONE', '0', '0','0')");

 //mysqli_query($con, "INSERT INTO `earn_transactions` (`id`, `buyer_username`, `buyer_email`, `ref_code`, `buyer_amount`, `commission`, `buyer_status`, `buyer_descr`, `buyer_date`, `sys_ref`) VALUES (NULL, '$account_username', '$account_email', '$account_refby', '$service_price', '$service_comm', 'SUCCESSFUL', '$order_report', '$time', '$api_reference')");

 //$new_bonus=$account_bonus+$service_comm;
  //mysqli_query($con, "UPDATE users SET cashback='$new_bonus' WHERE id='$user_id' AND username ='$account_username'");

    $response=array(
    'status' => 'success',
    'status_code' =>'200',
    'old_balance'=> $account_balance, ////// 
    'new_bal'=> $new_wallet, ////// 
    'time' => $time,
    'amountPaid' => $service_price,
    'pin' => $epin,
    'message' => $message,
    );
    echo json_encode($response);
    exit;


}

else{


 $new_wallet=$account_balance;
 mysqli_query($con, "UPDATE users SET wallets='$new_wallet' WHERE id='$user_id' AND username ='$account_username'");

$order_report=strtoupper($service.' N'.$service_price.' E-pin Purchase failed on '.$mobile_no);

 mysqli_query($con, "INSERT INTO `final_transactions` (`id`, `mobile_number`, `buyer_email`, `buyer_username`, `buyer_service`, `buyer_amount`, `buyer_prebal`, `buyer_postbal`, `buyer_descr`, `buyer_status`, `buyer_date`, `timestring`, `charge_from`, `user_type`, `sys_ref`, `api_ref`, `api_report`, `src_price`, `profit`, `databyte`) VALUES (NULL, '$mobile_no', '$account_email', '$account_username', '$service', '$service_price', '$account_balance', '$account_balance', '$order_report', 'FAILED', '$time', '$timestring', 'WALLET', '$level', '$api_reference', '$reference', 'DONE', '0', '0','0')");

    $response=array(
    'status' => 'fail',
    'status_code' =>'100',
    'old_balance'=> $account_balance, ////// 
    'new_bal'=> $account_balance, ////// 
    'time' => $time,
    'message' => $order_report,
    );
    echo json_encode($response);
    exit;

}

}

else{

    $response=array(
    'status' => 'fail',
    'status_code' =>'100',
    'message' => 'Your account is too low for this transaction !!!',
    );
    echo json_encode($response);
    exit;
}

?>