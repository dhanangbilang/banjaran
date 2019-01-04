<?php
session_start();
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8443",
  CURLOPT_URL => "https://platform.antares.id:8443/~/antares-cse/antares-id/POCKFBanjaran/Dosing_PW/la",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Postman-Token: 1914ba03-bad3-44d6-9cf3-df6b9dd603a4",
    "X-M2M-Origin: aad17ec856e961b1:2795113be6a7f8ef",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  //echo "<br><br>";
  //-------------------------------------------------------
  $someJSON = '[' . $response . ']';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  //print_r($someArray);        // Dump all data of the Array

  //echo "<br><br>";
  //echo $someArray[0]["m2m:cin"]["con"]; // Access Array data
  //echo "<br><br>";

  //--------------------------------------------------------
  $temp_url = $someArray[0]["m2m:cin"]["con"];
  $someJSONFix = '[' . $temp_url . ']';

  // Convert JSON string to Array
  $someArrayFix = json_decode($someJSONFix, true);
  //print_r($someArrayFix);        // Dump all data of the Array
  echo '{"dosing_water":"' . $someArrayFix[0]["dosing water"] . '","inflight_time":"' . $someArrayFix[0]["inflight time"] . '","temp":"' . $someArrayFix[0]["temp"] . '","flushing_time":"' . $someArrayFix[0]["flushing time"] . '"}';
}?>