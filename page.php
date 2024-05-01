<?php

$a = "COUCOU";
print($a);

$hostname = "localhost";
$dbUser = "root";
$dbPassword = ""; 
$dbName = "BananappleDatabase";
$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);
if (!$conn){
    die("something went wrong;");
}


try {
    $sqlQuery = 'SELECT * FROM users';
    $result = mysqli_query($conn, $sqlQuery);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    foreach ($users as $user) {
?>
    <p>
        <?php echo $user['name'] ?>
    </p>
<?php
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
?>