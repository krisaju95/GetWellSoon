<?php
        $servername = 'localhost';
        $username = 'root';
        $password = "mysql";
        $dbname = "health_centre";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }
?>

