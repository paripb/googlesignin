<?php
$host = 'tt1.database.windows.net';
$username = 'paripb';
$password = 'Apple@123';
$db_name = 'tt1';

//Establishes the connection
$conn = mysqli_init();
mssql_real_connect($conn, $host, $username, $password, $db_name);
if (mssql_connect_errno($conn)) {
die('Failed to connect to MsSQL: '.mssql_connect_error());
}

// Run the create table query
if (mssql_query($conn, '
CREATE TABLE Products (
`Id` INT NOT NULL AUTO_INCREMENT ,
`ProductName` VARCHAR(200) NOT NULL ,
`Color` VARCHAR(50) NOT NULL ,
`Price` DOUBLE NOT NULL ,
PRIMARY KEY (`Id`)
);
')) {
printf("Table created\n");
}

//Close the connection
mssql_close($conn);
?>
