<?php

        $servername = 'localhost';
        $username = 'healthcentre';
        $password = "nitc1234";
        $dbname = "db_health_centre";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }
?>
