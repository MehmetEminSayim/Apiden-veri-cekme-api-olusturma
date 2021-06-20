<?php
    include("../config/config.php");

    $db->where("id", "1");
    $set = $db->getOne("settings");


    $ch = curl_init();
    $url =  $set['site_url']."admin/publish_coin_api.php";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_USERPWD, 'xx' . ':' . 'xx');

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);


    print_r($result);
