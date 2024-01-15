<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://bio.ziller.vn/api/qr/add",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 2,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer 1ce1dabef93dbd497483b0c23d5d2bf2",
        "Content-Type: application/json",
    ),
    CURLOPT_POSTFIELDS => json_encode(array (
  'type' => 'link',
  'data' => 'https://google.com',
  'background' => 'rgb(255,255,255)',
  'foreground' => 'rgb(0,0,0)',
  'logo' => 'https://site.com/logo.png',
)),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
