<?php
$connectionInfo = array("UID" => "MarkalaRohan", "pwd" => "Rohan@123$", "Database" => "ResumeCraftDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:resume-craft.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true)); // Display an error message if the connection fails
} else {
    echo "Connected successfully"; // Display a success message if the connection is established
}

?>
