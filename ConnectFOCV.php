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



/*
$serverName = "LAPTOP-8O9PNHV2\SQLEXPRESS";

$connectionInfo = [
     "Database"=>"FOCV"
];
$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn) {
    // Connection worked
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];

        if (!empty($email)) {
            $sql = "INSERT INTO EMAIL_LIST (EMAILS) VALUES (?)";

            $stmt = sqlsrv_prepare($conn, $sql, array(&$email));

            if (sqlsrv_execute($stmt)) {
                echo "Email successfully added to the list!";
            } else {
            }
        } else {
        }
    }
} else {
    // Connection didn't work
    die(print_r( sqlsrv_errors(), true));
}

sqlsrv_close($conn);
*/



?>