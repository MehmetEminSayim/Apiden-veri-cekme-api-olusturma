<?php
    include "../config/config.php";


    $db->where("id", "1");
    $set = $db->getOne("settings");


    $valid_passwords = array ($set['api_key'] => $set['api_token']);
    $valid_users = array_keys($valid_passwords);

    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];

    $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

    if (!$validated) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        die ("Not authorized");
    }

    $gold_list = $db->get('gold_list');
    $goldLists = json_encode($gold_list,true);
    print_r($goldLists);



