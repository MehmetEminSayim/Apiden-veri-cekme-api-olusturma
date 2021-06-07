<?php include "../config/config.php";


    function curlRequest($url){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Authorization: apikey 086SRq2aKCvnPFcQCitIgx:3dvTIBtPammLYg5Q5TxreZ';
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $result = json_decode($result,true);
        return $result;
    }

    $resultData = curlRequest("https://api.collectapi.com/economy/cripto");
    for ($i = 0; $i <count($resultData['result']); $i++) {
        if ($i == 10){
            break;
        }else{
            $db->where("code", $resultData['result'][$i]['code']);
            $user = $db->getOne("coin_list");
            if (empty($user)){
                $data = ["coin_name" => $resultData['result'][$i]['name'],
                    "currency" => $resultData['result'][$i]['currency'],
                    "code" => $resultData['result'][$i]['code'],
                    "price" => $resultData['result'][$i]['price'],
                    "volume" => $resultData['result'][$i]['volume'],
                    "marketCap" => $resultData['result'][$i]['marketCap'],
                    "changeWeek" => $resultData['result'][$i]['changeWeek'],
                    "changeDay" => $resultData['result'][$i]['changeDay'],
                    "changeHour" => $resultData['result'][$i]['changeHour'],
                ];
                $insert = $db->insert('coin_list', $data);
            }else{
                $data = ["coin_name" => $resultData['result'][$i]['name'],
                    "currency" => $resultData['result'][$i]['currency'],
                    "code" => $resultData['result'][$i]['code'],
                    "price" => $resultData['result'][$i]['price'],
                    "volume" => $resultData['result'][$i]['volume'],
                    "marketCap" => $resultData['result'][$i]['marketCap'],
                    "changeWeek" => $resultData['result'][$i]['changeWeek'],
                    "changeDay" => $resultData['result'][$i]['changeDay'],
                    "changeHour" => $resultData['result'][$i]['changeHour'],
                ];
                $db->where('code', $resultData['result'][$i]['code']);
                $db->update('coin_list', $data);
            }
        }
    }

    $resultGold = curlRequest("https://api.collectapi.com/economy/goldPrice");

    for ($i = 0; $i <count($resultGold['result']); $i++) {
        if ($i == 5){
            break;
        }else{
            $db->where("name", $resultGold['result'][$i]['name']);
            $gold = $db->getOne("gold_list");
            if (empty($gold)){

                $datagold = [
                    "name" => $resultGold['result'][$i]['name'],
                    "buy" => $resultGold['result'][$i]['buying'],
                    "sell" => $resultGold['result'][$i]['selling'],
                    "datetime" => $resultGold['result'][$i]['date'],
                ];
                $insert = $db->insert('gold_list', $datagold);
            }else{


                $datagold = [
                    "name" => $resultGold['result'][$i]['name'],
                    "buy" => $resultGold['result'][$i]['buying'],
                    "sell" => $resultGold['result'][$i]['selling'],
                    "datetime" => $resultGold['result'][$i]['date'],
                ];
                $db->where('name', $resultGold['result'][$i]['name']);
                $db->update('gold_list', $datagold);
            }
        }
    }

    header("Location:api_manager.php?update=true");







