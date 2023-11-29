<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://v2.api.ibrolinks.com/api/v2/packages',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{

    "product_id": 6

}',
  CURLOPT_HTTPHEADER => array(
    'secret-key : "c2FsYWtvMDA0OEBnbWFpbC5jb206MDgxMDQ2ODg0NTQ="'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>