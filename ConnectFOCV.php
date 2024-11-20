<?php

$serverName = "LAPTOP-8O9PNHV2\SQLEXPRESS";

$connectionInfo = [
     "Database"=>"FOCV"
];
$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn) {
     //Connection worked
    
} else {
     //Connection didn't work
     die(print_r( sqlsrv_errors(), true));
}

?>