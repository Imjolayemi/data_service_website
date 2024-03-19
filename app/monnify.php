<?php

require("session_controller.php");

$monnify_hashkeys="$monnify_pk:$monnify_sk";
$stringk=base64_encode($monnify_hashkeys);
$url = 'https://api.monnify.com/api/v1/auth/login';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
   $ch, CURLOPT_HTTPHEADER, [
        "Authorization: Basic ".$stringk."", ///// STRINGK is the return base64 hash of the Sk & apiKey
    ]

);
$json = curl_exec($ch);
curl_close($ch);

   $result = json_decode($json, true);
   $accessToken=$result['responseBody']['accessToken'];
   
   $monnifyfullname=$fullname;
   $c_code=rand(1000000000, 9000000000);
   $aref=uniqid();
   $bref=rand(1000, 9000);
   $ref=$aref.$bref.time();
   $monnifyemail=$email;
   $xx=$monnify_cc;
   

$postdata = array(
    'accountName' => "$monnifyfullname", ///////// Account Name to display
    'accountReference' => "$ref", /// Unique ID to update customer wallet
    'currencyCode' => "NGN",        //////// Currency to pay
    'customerEmail' => "$monnifyemail",           ////// Customer email address
    'contractCode' => "$xx",    //////// Nunique number to start trade
    'customerName' => "$monnifyfullname",    /////// Customer Name to setup account
    'getAllAvailableBanks' => false,
    'preferredBanks' => ['50515', '232', '035', '070'],
);

$rurl = 'https://api.monnify.com/api/v2/bank-transfer/reserved-accounts';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $rurl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
   $ch, CURLOPT_HTTPHEADER, [
       "Content-Type: application/json",
        "Authorization: Bearer ".$accessToken."",
    ]
);
$json = curl_exec($ch);
curl_close($ch);

//echo $json;
//exit();

$datax = json_decode($json, true); 
$acctName=$datax['responseBody']['accountName']; ////// Return Account Name
$accountReference=$datax['responseBody']['accountReference'];  // Account Reference
$bankinfos=$datax['responseBody']["accounts"];

$sterlingacctno=$bankinfos[0]['accountNumber'];
$wemaacctno=$bankinfos[1]['accountNumber'];
$rolexacctno=$bankinfos[2]['accountNumber'];
$fidelityacctno=$bankinfos[3]['accountNumber'];
   

mysqli_query($con, "UPDATE users SET wema='".$wemaacctno."', fidelity='".$fidelityacctno."', rolez='".$rolexacctno."', sterling='".$sterlingacctno."', acctname='".$acctName."' WHERE email='".$monnifyemail."'");

?>