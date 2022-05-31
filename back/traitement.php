<?php

$tagada = json_decode(file_get_contents("php://input"), true);



$data = ["status" => "OK", "response" => json_encode($tagada)];
header('Access-Control-Allow-Origin: http://localhost:3000/*');
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
