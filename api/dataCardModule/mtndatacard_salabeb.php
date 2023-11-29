<?php
if ($mtndatacard_access > 0){

require ("../functions/mtndatacard_price.php");

 if ($plan_id==15){
 $service_price=$mtndatacard_15*$quantity;
 $service="mtn-datacard";
 $databyte="1.50GB";
 $package_name="MTN DATA CARD 1.50GB";
 $planCode=1;
 }
 if ($plan_id==75){
 $service_price=$mtndatacard_75*$quantity;
 $service="mtn-datacard";
 $databyte="750MB";
 $package_name="MTN DATA CARD 750MB";
 $planCode=3;
 }
 if ($plan_id==2){
 $service_price=$mtndatacard_2*$quantity;
 $service="mtn-datacard";
 $databyte="2.0GB";
 $package_name="MTN DATA CARD 2.0GB";
 $planCode=2;
 }
 if ($account_balance >= $service_price && $service_price > 0){

 $new_wallet=$account_balance-$service_price;
 mysqli_query($con, "UPDATE users SET wallets='$new_wallet' WHERE id='$user_id' AND username ='$account_username'");


$payload=array(
'token' => $token,
'network' => 'MTN',
'plan_code' => $plan_id,
'cus_name' => $cus_name,
'quantity' => "$quantity",
'request_id' => 'REF-UNIQUE72300674352',
);
$url = 'https://salabeb.com/api/data_card';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$request = curl_exec($ch);
curl_close($ch);
$xx=json_decode($request,true);

$status=$xx['status'];
$message=$xx['msg'];
$api_reference=$xx['reference'];
  if ($status=='success' || $status=='processing'){

$order_report=strtoupper($package_name.' N'.$service_price.' Purchase Successful on '.$cus_name.' {'.$message.'}');

 mysqli_query($con, "INSERT INTO `final_transactions` (`id`, `mobile_number`, `buyer_email`, `buyer_username`, `buyer_service`, `buyer_amount`, `buyer_prebal`, `buyer_postbal`, `buyer_descr`, `buyer_status`, `buyer_date`, `timestring`, `charge_from`, `user_type`, `sys_ref`, `api_ref`, `api_report`, `src_price`, `profit`, `databyte`) VALUES (NULL, '$mobile_no', '$account_email', '$account_username', '$message', '$service_price', '$account_balance', '$new_wallet', '$order_report', 'SUCCESSFUL', '$time', '$timestring', 'WALLET', '$level', '$api_reference', '$reference', 'DONE', '0', '0', '$databyte')");

 //mysqli_query($con, "INSERT INTO `earn_transactions` (`id`, `buyer_username`, `buyer_email`, `ref_code`, `buyer_amount`, `commission`, `buyer_status`, `buyer_descr`, `buyer_date`, `sys_ref`) VALUES (NULL, '$account_username', '$account_email', '$account_refby', '$service_price', '$acdata_comm', 'SUCCESSFUL', '$order_report', '$time', '$api_reference')");

  //$new_bonus=$account_bonus+$acdata_comm;
 //mysqli_query($con, "UPDATE users SET cashback='$new_bonus' WHERE id='$user_id' AND username ='$account_username'");

    $response=array(
    'status' => 'success',
    'status_code' =>'200',
	'old_balance'=> $account_balance, ////// 
	'new_balance'=> $new_wallet, ////// 
	'time' => $time,
    'amountPaid' => $service_price,
	'message' => $order_report,
    );
    echo json_encode($response);
    exit;


}


else{

 $new_wallet=$account_balance;
 mysqli_query($con, "UPDATE users SET wallets='$new_wallet' WHERE id='$user_id' AND username ='$account_username'");

 $order_report=strtoupper($package_name.' N'.$service_price.' Purchase failed by '.$cus_name.' / '.$detail);

 mysqli_query($con, "INSERT INTO `final_transactions` (`id`, `mobile_number`, `buyer_email`, `buyer_username`, `buyer_service`, `buyer_amount`, `buyer_prebal`, `buyer_postbal`, `buyer_descr`, `buyer_status`, `buyer_date`, `timestring`, `charge_from`, `user_type`, `sys_ref`, `api_ref`, `api_report`, `src_price`, `profit`, `databyte`) VALUES (NULL, '$mobile_no', '$account_email', '$account_username', '$service', '$service_price', '$account_balance', '$account_balance', '$order_report', 'FAILED', '$time', '$timestring', 'WALLET', '$level', '$api_reference', '$reference', 'DONE', '0', '0','$databyte')");

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


 }


 else{

     $response=array(
    'status' => 'fail',
    'status_code' =>'100',
    'message' => 'MTN DATA CARD purchase is not permitted for this account !!!',
    );
    echo json_encode($response);
    exit;
 }


?>