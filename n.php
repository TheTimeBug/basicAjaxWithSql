<?php 
    //$url = 'https://kobo.humanitarianresponse.info/assets/a358FF54kcBZXwbiZbW2y9/submissions/?format=json&sort={"_id":-1}&query={"PSU":"0001"}';
    $start= 0;
    $limit=100;
    
    //custom
    $url = 'https://kobo.humanitarianresponse.info/assets/a358FF54kcBZXwbiZbW2y9/submissions/?format=json&query={"GM11/RT12PREG_count":"2"}&start='.$start.'&limit='.$limit;
    
    //by id
    //$url = 'https://kobo.humanitarianresponse.info/assets/a358FF54kcBZXwbiZbW2y9/submissions/?format=json&query={"_id":"360515298"}';
    $token = "9b4a7317d04e9d85370d65edbe66730119827799";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
        "Authorization: Token $token"
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);
    curl_close($curl);
    $decoded_data1 = json_decode($resp, true); //decoding json
    echo $resp;
    unset($resp); //unset the json data


?>