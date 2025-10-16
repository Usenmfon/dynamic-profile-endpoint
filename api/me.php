<?php

$method = $_SERVER["REQUEST_METHOD"];

function getRandomCatFact() {
    $apiUrl = "https://catfact.ninja/fact";

    $req = curl_init($apiUrl);
    curl_setopt($req, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($req);
    $error = curl_error($req);
    curl_close($req);

    if($error) {
        return "Could not fetch cat fact.";
    }

    $data = json_decode($response, true);
    return $data["fact"] ?? "No fact available";
}

$catFact = getRandomCatFact();

if($method == "GET") {
    $response = [
        "status" => "success",
        "user" =>[
            "email" => "usenmfonuko@gmail.com",
            "name"=> "Usenmfon Uko",
            "stack" => "PHP/Laravel"
        ],
        "timestamp" => gmdate("c"),
        "fact" => $catFact
    ];

    echo json_encode($response, JSON_PRETTY_PRINT);
} else{
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
}
