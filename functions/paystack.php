<?php
//header("Access-Control-Allow-Origin: *");
if(isset($_GET['reference'])){
    $curl = curl_init();
  
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$_GET['reference'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer sk_test_9dca7bab6b7cdc244c7fd40cc8b6c73ade443ded",
          "Cache-Control: no-cache",
        ),
      ));
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    
      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        var_dump($response);
      }
}
?>