<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('./dbConfig.php');
$response =  ["status" => false, "message" => ""];

$query = "select theatre_name from theatres
            order by id desc limit 5;";

$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($result) {
    $response["status"] = True;
    $response["message"] = "Theatres Fetched";
    echo json_encode($result);
}
