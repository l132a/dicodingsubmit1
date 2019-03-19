<?php
    $host = "smart-dev.database.windows.net";
    $user = "suryo";
    $pass = "L132aboy";
    $db = "suryodicoding";

    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }
?>