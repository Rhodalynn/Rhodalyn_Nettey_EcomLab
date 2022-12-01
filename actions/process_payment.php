<?php
include('../settings/core.php');


$ref=$_GET['reference'];
$curl = curl_init();
  
 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.paystack.co/transaction/verify/:".$ref,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
     "Authorization: Bearer sk_test_47868eacefe552a50e043f444f9739107eacf45e",
     "Cache-Control: no-cache",
   ),
 ));
 displaySuccessfulPayment();
 goToUserIndex();

//  $response = curl_exec($curl);
//  $err = curl_error($curl);

//  curl_close($curl);
 
//  if ($err) {
//    echo "cURL Error #:" . $err;
//  } else {
//   header("location: ../view/userIndex.php");
// }







?>

