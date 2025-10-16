<?php

$method = $_SERVER["REQUEST_METHOD"];

if($method == "GET") {
    $profile = [
        [
            "name"=> "Usenmfon",
        ]
    ];

    echo json_encode($profile);
} else{
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}
