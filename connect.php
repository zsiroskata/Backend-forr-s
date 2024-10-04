<?php

header("Content-Type: text/html; charset=UTF-8");


define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "csokik");

$dbconn = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Hiba az adatbázis csatlakozásakor!");


if (mysqli_connect_errno()) {
    die("Sikertelen csatlakozás: " . mysqli_connect_error());
}


mysqli_set_charset($dbconn, "utf8");


echo "Adatbázis kapcsolat sikeresen létrejött";
?>
