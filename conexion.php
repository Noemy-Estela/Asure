<?php

// PHP Data Objects(PDO) Sample Code:

$password = "Sebitas_18";





try {

  $conn = new PDO("sqlsrv:server = tcp:tisnado.database.windows.net,1433; Database = senati.db", "atisnadocha", "{Sebitas_18}");

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch (PDOException $e) {

  print("Error connecting to SQL Server.");

  die(print_r($e));

}



// SQL Server Extension Sample Code:

$connectionInfo = array("UID" => "atisnadocha", "pwd" => "{your_password_here}", "Database" => "senati.db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);

$serverName = "tcp:tisnado.database.windows.net,1433";

$conn = sqlsrv_connect($serverName, $connectionInfo);

?>