<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

$requestUri = $_SERVER["REQUEST_URI"];
$path = parse_url($requestUri, PHP_URL_PATH);

switch ($path) {
    case "/me":
        require __DIR__ . "/me.php";
        break;

    default:
         http_response_code(404);
         echo json_encode([
                "status" => "error",
                "message" => "Endpoint not found"
            ]);
         break;
}