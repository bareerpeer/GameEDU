<?php

    $conn = new mysqli("localhost","nittiya","1234","gedu");

    if ($conn -> connect_error) {
       die("Failed to connec to database" . $conn->connect_error);
    }
?>
