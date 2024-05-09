<?php

$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "BananappleDatabase";
$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("something went wrong;");
}

function DatabaseGet(string $sqlQuery, $conn)
{
    $results = mysqli_query($conn, $sqlQuery);
    return mysqli_fetch_all($results, MYSQLI_ASSOC);
}
