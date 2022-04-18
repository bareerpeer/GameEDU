<?php
    header('Access-Control-Allow-Origin: *');

    $conn = new mysqli("localhost","root","","gedu");

    if ($conn -> connect_error) {
       die("Failed to connec to database" . $conn->connect_error);
    }

    $id = $_GET['id'];
    $score = $_GET['score'];

    $query = $conn->query("SELECT * FROM users WHERE id = $id");
    $result = $conn->query("UPDATE users SET score = $score WHERE id = $id");

    $row = $query->fetch_array();
    echo $row['id'];

    $conn->close();
?>