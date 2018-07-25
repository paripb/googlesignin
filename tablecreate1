<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:tt1.database.windows.net,1433; Database = tt1", "paripb", "Apple@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "paripb@tt1", "pwd" => "{your_password_here}", "Database" => "tt1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:tt1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
