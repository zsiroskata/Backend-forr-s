<?php
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(["error" => "Érvénytelen kérési módszer!"]);
    exit;
}


include 'connect.php';


$sql = "SELECT * FROM csokik";
$result = mysqli_query($dbconn, $sql);
//var_dump($result);

if (!$result) {
    http_response_code(500);
    echo json_encode(["error" => "Hiba történt az adatok lekérésekor!"]);
    exit;
}


$csokik = mysqli_fetch_all($result, MYSQLI_ASSOC);

header("Content-Type: application/json; charset=UTF-8");

file_put_contents('csokik.json', json_encode($csokik, JSON_UNESCAPED_UNICODE));

echo json_encode($csokik, JSON_UNESCAPED_UNICODE);

mysqli_close($dbconn);
?>
