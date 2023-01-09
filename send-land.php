<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $comment = $_POST['comment'];

    $queryUrl = 'https://itsapsan.bitrix24.ru/rest/12/64reiv6xaccp6ppn/crm.lead.add.json';

    $queryData = http_build_query(array(
        'fields' => array(
            'TITLE' => "Лид от ".$company,
            'NAME' => $name,
            'LAST_NAME' => $lastname,
            'EMAIL' => Array(
                "n0" => Array(
                    "VALUE" => "$email",
                    "VALUE_TYPE" => "WORK",
                ),
            ),
            'COMMENTS' => $comment,
        ),
        'params' => array("REGISTER_SONET_EVENT" => "Y")
    )); 

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($result, 1);
    if (array_key_exists('error', $result)) echo "ошибка при сохранении лида: ".$result['error_description']."<br/>";
?>