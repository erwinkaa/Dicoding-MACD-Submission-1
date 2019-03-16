<?php

$host = "erwinkawebappserver.database.windows.net";
$user = "erwinka";
$pass = "3rw1nk4azure!";
$db = "erwinka";

try {
    $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    echo "Success connected.";
} catch(Exception $e) {
    echo "Failed: " . $e;
}

?>