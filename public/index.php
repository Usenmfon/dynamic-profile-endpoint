<?php

header("Contnent-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

$requestUri = $_SERVER["REQUEST_URI"];
$path = parse_url($requestUri, PHP_URL_PATH);

switch ($path) {
    case '/api/me':
        require __DIR__ . '/.../api/users.php';
        break;

    default:
         http_response_code(404);
         echo json_encode(['error' => 'Endpoint not found']);
         break;
}