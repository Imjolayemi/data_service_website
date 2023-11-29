<?php

// $payload=array(
//   'token' => '7b11adddda6c0f03e94d10b891a960946352ff0aa9a63',
//   'service_number' => '01831562351',
//   'service_id' => 'startimes',
//   'request_id' => strtoupper(time().rand(10000000, 90000000).mt_rand()),
//   'plan_code' => '701',
// );

// $url = 'https://vtpass.com/api/pay';
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));  //Post Fields
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $request = curl_exec($ch);
// curl_close($ch);
// $apidata=json_decode($request);
// $message=$apidata->message;
// $status=$apidata->status;

// echo $status;


//$string="Salako0048@gmail.com:Abeeblahi6884";
/*$vtpass_account='wfbmail15@gmail.com:11111111';
$us=base64_encode($vtpass_account);
  $postdata=array(
      "billersCode" => '1111111111111',
  "serviceID" => 'kano-electric',
  "type" => 'prepaid',
//   "variation_code" => $metertype,
//   "amount"=> $amount,
//   "phone"=> $customernum
);

 $url ="https://sandbox.vtpass.com/api/merchant-verify";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = [
    'Authorization: Basic '.$us.'',
    'Content-Type: application/json',
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$request = curl_exec($ch);
curl_close($ch);
$rdata=json_decode($request, true);
echo $request;
*/

/*$url='https://dailycashout.com.ng/api/buydatav2.php?api_key=7a47e347acbec4a7e3466ff19dfff782&network=MTN_CGD&plans=500&phonenumber=07040586592&return_url=https://salabeb.com';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$xx=json_decode($response);
echo $xx->status; 
*/

/*$postdata=array(
'network' => 1,
'plan' => 6,
'mobile_number' => '07040586592',
'Ported_number' => true
);

$url = "https://www.fastlink.com.ng/api/data/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = [
    'Authorization: Token  e357e3e8fd336ae60fb45b313bd79b31e6fd6b23',
    'Content-Type: application/json'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$request = curl_exec($ch);
curl_close($ch);
$xx=json_decode($request, true);
$status=$xx['Status'];
var_dump($xx); */

/*
$postdata=array(
'networkId' => 1,
'planId' => 1,
'phoneNumber' => '07040586592',
'reference' => '202210282129635C3BA433CB020375'
);

$url = "https://simhosting.ogdams.ng/api/v1/vend/data";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = [
    'Authorization: Bearer sk_live_c30b4355-60ee-4696-82a4-f1e9583130ca',
    'Content-Type: application/json'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$request = curl_exec($ch);
curl_close($ch);

$dataX=json_decode($request);
$status=$dataX->status;
var_dump($dataX);
//echo $status; 
*/

/*
$url='https://dailycashout.com.ng/api/buydatav2.php?api_key=7a47e347acbec4a7e3466ff19dfff782&network=MTN&plans=500&phonenumber=07040586592&return_url=https://salabeb.com';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$xx=json_decode($response,true);
$status=$xx['status'];
var_dump($xx);
echo $status;*/

/*
$postdata=array(
  'token' => 'e5f0fa0dc39526c11a1fb4bcbf398f6a7699b3e7047397cd0c559173ddc27a8e801bf6e8c8859d5ed7f9a4cc11a09a6f3c1b5cfb85503ecbe302b3e016ba5af5',
  'mobile' => '07040586592',
  'network' => 'MTN',
  'request_id' => 'uyiueqiu7398192379123',
  'plan_code' => '500',
);

$url = 'https://abumpay.com/apiv2/data';
$ch = curl_init();
https://abumpay.com/api/gifting?apiToken=TOKEN&network=GIFTING&network_code=1000&mobile=MOBILE_NO&ref=REFERENCE

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$request = curl_exec($ch);
curl_close($ch);
$data=json_decode($request);
$status=$data['status'];
var_dump($data);
echo $status;*/
$url='https://abumpay.com/api/mtn?apiToken=e5f0fa0dc39526c11a1fb4bcbf398f6a7699b3e7047397cd0c559173ddc27a8e801bf6e8c8859d5ed7f9a4cc11a09a6f3c1b5cfb85503ecbe302b3e016ba5af5&network=MTN&network_code=500&mobile=07040586592&ref=123968798567563454216356';

/*$url='https://abumpay.com/api/gifting?apiToken=23dd1052628bd01a4146b8c601e8619ec601e23dd1052628bd01a4146b88619e&network=GIFTING&network_code=1000&mobile=07040586592&ref=123968798567563454216357';*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$char=json_decode($response, true);
$status=$char['code'];
var_dump($char);
echo $status;



/*$postdata=array(
'token' =>'e5f0fa0dc39526c11a1fb4bcbf398f6a7699b3e7047397cd0c559173ddc27a8e801bf6e8c8859d5ed7f9a4cc11a09a6f3c1b5cfb85503ecbe302b3e016ba5af5',
'network'=>'mtn',
'mobile'=>'07040586592',
'amount'=>50,
'ref'=>'sadkjasdjkasd7u76837123hjhse'
);

$url = "https://abumpay.com/api/airtime/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = [
    'Authorization: Bearer sk_live_c30b4355-60ee-4696-82a4-f1e9583130ca',
    'Content-Type: application/json'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$request = curl_exec($ch);
curl_close($ch);

$dataX=json_decode($request);
$status=$dataX->status;
var_dump($dataX);
//echo $status; */




/*$url='https://dailycashout.com.ng/api/buydatav2.php?api_key=7a47e347acbec4a7e3466ff19dfff782&network=MTN_CGD&plans=500&phonenumber=07040586592&return_url=https://salabeb.com';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$xx=json_decode($response,true);
$status=$xx['status'];

var_dump($xx);
if($status=='success'){
    echo "Thanks dacodingsalaf";
}
?>