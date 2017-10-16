<?php

// Your API key
$apikey = '';
// Your list id
$list_id = '';
// Your datacenter name
$datacenter = '';

if (isset($_POST['email'])) {
    $sub_email = $_POST['email'];

    $data  = array('email_address'=> $sub_email, 'status'=>'pending', 'merge_fields'=>array('FNAME'=>'', 'LNAME'=>''));
    $json_string = json_encode($data);

    $ch = curl_init('');
    curl_setopt($ch, CURLOPT_URL, 'http://'. $datacenter .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_string);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
            array('Content-Type:application/json',
                'Authorization: apikey ' . $apikey));

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
} else {
    echo json_encode(array("success" => false,"error" => "No email provided"));
}


 ?>
