@php

    $response = array(
        "status" => "error",
        "code" => $code,
        "message" => $message
    );

    echo json_encode($response);

@endphp
