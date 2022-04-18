<?php 
header('Access-Control-Allow-Origin: *');
    require('connection.php');

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $password = $_GET['password'];
        
        $sql = "SELECT * FROM `users` WHERE `id` = '$id' AND `password` = '$password'";
        $result = $conn->query($sql);
        if($result->num_rows ==1){
            $row = $result->fetch_array();
            echo($row['name']);
        }
    }