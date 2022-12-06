<?php
    $queryUrl = 'https://yourname.bitrix24.ru/rest/1/webhookcode/crm.lead.add.json';
    $queryData = http_build_query(array(
        'fields' => array(
            'TITLE' => 'Заявка с лэндинга',
            'NAME' => $_POST["name"],
            'LAST_NAME' => $_POST["lastname"],
            'EMAIL' => $_POST["email"],
            'COMPANY_TITLE' => $_POST["company"],
            'COMMENTS' => $_POST["comment"],
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
?>