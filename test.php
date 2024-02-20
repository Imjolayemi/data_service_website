<?php


    
    
    $payload=array(
'token' => '4b53e8cb47ef1d638b82811c799478e465b2920a6826d',
'network' => 'MTN',
'plan_code' => 500,
'mobile' => '08134628953',
'request_id' => 'REF-UNIQUE72300674352',
);
$url = 'https://abrons.com.ng/app/user/dev_data';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$request = curl_exec($ch);
curl_close($ch);
echo $request


?>