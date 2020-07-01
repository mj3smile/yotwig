<?php

    $response = array(
        "status" => "ok",
        "code" => "200 - Valid",
        "result" => array(
            "email" => $email,
            "api_key" => $result
        )
    );

    echo json_encode($response);

?>
