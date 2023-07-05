<?php

function getToken()
{
    $data = "ONlineINdia#2022";
    $token_number = hash('sha512', $data);
    return $token_number;
}

function convertowords($number)
{
    $no = floor($number);
    $point = round($number - $no, 2) * 100;
    $hundred = null;
    $digits_1 = strlen($no);
    $i = 0;
    $str = array();
    $words = array('0' => '', '1' => 'one', '2' => 'two',
     '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
     '7' => 'seven', '8' => 'eight', '9' => 'nine',
     '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
     '13' => 'thirteen', '14' => 'fourteen',
     '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
     '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
     '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
     '60' => 'sixty', '70' => 'seventy',
     '80' => 'eighty', '90' => 'ninety');
    $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
    while ($i < $digits_1) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += ($divider == 10) ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number] .
             " " . $digits[$counter] . $plural . " " . $hundred
             :
             $words[floor($number / 10) * 10]
             . " " . $words[$number % 10] . " "
             . $digits[$counter] . $plural . " " . $hundred;
        } else {
            $str[] = null;
        }
    }
    $str = array_reverse($str);
    $result = implode('', $str);
    $points = ($point) ?
     "." . $words[$point / 10] . " " .
           $words[$point = $point % 10]."Paise" : '';
    return $result . "Rupees  " . $points;
}

function request_log()
{
    $ci = &get_instance();
    $data['ip'] = $ci->input->ip_address();
    $data['request'] = json_encode($_REQUEST);
    $data['header'] = json_encode($_SERVER);

    $ci->db->insert('tbl_request_log', $data);
}
// function push_notification_android($device_id, $message)
// {
//     //API URL of FCM
//     $url = 'https://fcm.googleapis.com/fcm/send';

//     /*api_key available in:
//     Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key*/    $api_key = SERVER_KEY;

//     $fields = array(
//         'registration_ids' => array(
//                 $device_id
//         ),
//         'data' => array(
//                 "message" => $message
//         )
//     );

//     //header includes Content type and api key
//     $headers = array(
//         'Content-Type:application/json',
//         'Authorization:key='.$api_key
//     );

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
//     $result = curl_exec($ch);
//     if ($result === false) {
//         die('FCM Send Error: ' . curl_error($ch));
//     }
//     curl_close($ch);
//      echo $result;
//     // exit;
//     return $result;
// }
function push_notification_android($device_id, $message)
{

     $url = "https://fcm.googleapis.com/fcm/send";
    $token = $device_id;
    $serverKey = 'BCM0laTEyJaqyv6g8sjI7vIy3F6LdsSIV4SCNl8JZ-Njq8W-74w0hFtRiYdWVgkGR-JCGin5oOcRzkYWeeHo1dQ';
    $title = "checking For Update";
    $body = ".......";
    // if(is_array($message)) {
    //     $title = $message[0];
    //     $body = "With : ".$message[1];
    // } else {
    //    // echo "Not an Array";
    // }
    $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
    $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
    $json = json_encode($arrayToSend);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Send the request
    $response = curl_exec($ch);
    //Close request
    
    // if ($response === FALSE) {
    // die('FCM Send Error: ' . curl_error($ch));
    // }
    curl_close($ch);
   //echo $response;
   return $response;
}
function push_notification_android_Data($device_id, $message)
{

     $url = "https://fcm.googleapis.com/fcm/send";
    $token = $device_id;
     $serverKey = 'AAAAYofV1lA:APA91bEA0eP5l3lI2od7-fTGz9t25MKk3gTFmIJmsE4SCbKjwakxPeBYqOJ8Uggg9b11duovP16vUGuxrSDMTFBH0CZW1wtCGVmk_AiJub-5TJzEvbKeURipR6B04eSZDIOdVF5xJI1m';
    $title = "New Notofication From Last Ride";
    $body = "Click Me for more information";
    // if(is_array($message)) {
    //     $title = $message[0];
    //     $body = "With : ".$message[1];
    // } else {
    //   // echo "Not an Array";
    // }
    $notification = array('title' =>$title , 'body' => $body, 'sound' => 'disabled', 'badge' => '1');
    $arrayToSend = array('to' => $token, 'data' => $notification,'notification' => $notification,'priority'=>'high');
    $json = json_encode($arrayToSend);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Send the request
    $response = curl_exec($ch);
    //Close request
    
    if ($response === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
     echo $response;
   return $response;
}