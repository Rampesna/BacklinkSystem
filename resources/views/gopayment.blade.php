<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$websiteKey    = 'Ehn6DiBsIblmm05g';
$websiteSalt   = 'NEQQg7akftRggcOQ';
$userIp        = $_SERVER['REMOTE_ADDR'];
$userEmail     = 'rampesna@gmail.com';
$userName      = 'Talha Can';
$userAddress   = 'Malatya';
$userPhone     = '5383761370';
$paymentAmount = 1;
$paymentType   = 'credit_card';
$returnData   = "abcxyz123";

$postValues = [
    'website_key'    => $websiteKey,
    'website_salt'   => $websiteSalt,
    'user_ip'        => $userIp,
    'user_email'     => $userEmail,
    'user_name'      => $userName,
    'user_address'   => $userAddress,
    'user_phone'     => $userPhone,
    'payment_amount' => $paymentAmount,
    'payment_type'   => $paymentType,
    'return_data'    => $returnData
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.paycoo.net/payment/get-token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postValues);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
$result = @curl_exec($ch);

$ch = curl_init();
if (curl_errno($ch)){
    exit(curl_error($ch));
}
curl_close($ch);


$result = json_decode($result);

if ($result->status == 'success'){
    $paycooToken = $result->token;
}else{
    die($result->reason);
}

header('Location: https://api.paycoo.net/payment/' . $paycooToken);
return;


?>
</body>
</html>
