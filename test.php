<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://megasubplug.com/API/?action=buy_datacard",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"action\"\r\n\r\nbuy_data\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"network_api_id\"\r\n\r\n32\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"datacard_api_id\"\r\n\r\n139\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"quantity\"\r\n\r\n1\r\n-----011000010111000001101001--\r\n",
  CURLOPT_COOKIE => "PHPSESSID=mh9bff5q688mecuc0l0svrugpt",
  CURLOPT_HTTPHEADER => [
    "Authorization:  Token 121273787563f0fa8058f2d",
    "Content-Type: multipart/form-data; boundary=---011000010111000001101001",
    "Password: Abeeb*6884*#"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo $response;
// $get = json_encode($response);
// $status = ($get -> 'status');
// echo ($get->{"Detail"});