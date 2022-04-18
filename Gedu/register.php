<?php
header('Access-Control-Allow-Origin: *');
require('connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $password = $_GET['password'];
	echo $name;

    $sql = "INSERT INTO `users` (`id`,`name`,`password`) VALUES('$id','$name','$password')";
    $result = $conn->query($sql);
    if($result === true) {
        echo("Success");
    }
}else{
    echo("Not Found Get");
}