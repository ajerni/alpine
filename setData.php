<?php
header("Access-Control-Allow-Origin: https://alpine.andierni.ch");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");

require_once 'db.php';
$db = new DB();

$data = json_decode(file_get_contents("php://input"), true); // Read raw input stream

if (isset($data['newValue'])) {

    $newValue = $data['newValue'];
    $db->setData($newValue);
} 

?>
