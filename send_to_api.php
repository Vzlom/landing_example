<?php
//settings
$offer_id = '99'; // offer id
$web_master_id = '32'; // web master id
//////////
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://cpabazuka.com/api/v2/?offer_id=".$offer_id."&user_id=".$web_master_id."&name=".$_POST['name']."&phone=".$_POST['phone']."&sub1=".$_POST['sub1']."&sub2=".$_POST['sub2']."&sub3=".$_POST['sub3']."&sub4=".$_POST['sub4']."&sub5=".$_POST['sub5']."&ip=".$_POST['ip'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
header('Location: thanks.html');
exit();
