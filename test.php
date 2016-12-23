<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode([
    'data' => [
        'id' => rand(0, 99),
        'thumb' => 'https://placehold.it/350x150',
        'title' => 'Test'
    ]
]);