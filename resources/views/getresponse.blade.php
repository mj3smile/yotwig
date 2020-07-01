<?php

    $response = array(
        "status" => "ok",
        "code" => "200 - Valid",
        "results" => array(
            "source" => $source,
            "url_content" => $url,
            "download_links" => $links
        )
    );

    echo json_encode($response);

?>
