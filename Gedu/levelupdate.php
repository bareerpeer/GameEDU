<?php 
    header('Access-Control-Allow-Origin: *');
    require('connection.php');

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $level = $_GET['level'];
        
        $sql = "UPDATE `users` SET `level` = '$level'   WHERE `id` = '$id'";
        $result = $conn->query($sql);
        if($result->num_rows ==1){
            $row = $result->fetch_array();
            echo('Sucess');
        }
    }