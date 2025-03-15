<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "meetmj";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $connexion = new mysqli($server, $username, $password, $database);
    $connexion->set_charset("utf8"); 
} catch (mysqli_sql_exception $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>