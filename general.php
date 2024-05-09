<?php

$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "BananappleDatabase";
$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("something went wrong;");
}

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain = $_SERVER['SERVER_NAME'];
$port = $_SERVER['SERVER_PORT'];
$base_url = $protocol . "://" . $domain . ":" . $port . "/";

function DatabaseGet(string $sqlQuery, $conn)
{
    $results = mysqli_query($conn, $sqlQuery);
    return mysqli_fetch_all($results, MYSQLI_ASSOC);
}
