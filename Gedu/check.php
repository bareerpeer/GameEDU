<?php 
header('Access-Control-Allow-Origin: *');
    require('connection.php');

    if (isset($_GET['id'])){
        $id = $_GET[''];
        $password = $_GET['password'];
        
        $sql = "SELECT * FROM `users` WHERE `name` = '$username' AND `password` = '$password'";
        $result = $conn->query($sql);
        if($result->num_rows ==1){
            $result->fetch_array();
            echo ("1");
        }
    }