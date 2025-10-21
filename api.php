<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

require_once 'config.php';

$cv = getCVData();

if ($cv) {
    echo json_encode($cv, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} else {
    http_response_code(404);
    echo json_encode([
        'error' => true,
        'message' => 'Nie znaleziono danych CV w bazie'
    ], JSON_UNESCAPED_UNICODE);
}
?>