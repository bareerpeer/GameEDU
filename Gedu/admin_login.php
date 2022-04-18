<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#2c2c54">
    <center>
        <h1 style="text-align: center;color:white;font-weight: bold;margin-top: 18rem;">GAME EDUCATION NO 4</h1>
        <form method="post">
            <input type="password" name="password" style="font-size:2rem;"><br><br>
            <button type="submit" name="submit" style="padding:1em; border-radius: 20px;
             border:None;font-size: 14px;">เข้าสู่ระบบ</button>
        </form>
    </center>


    <?php 
        if(isset($_POST['submit'])){
            session_start();
            $password = $_POST['password'];
            require('connection.php');
            $sql = "SELECT * FROM `admin` WHERE `Admin_pass` = '$password'";
            $result = $conn -> query($sql);
            if($result -> num_rows == 1){
                $_SESSION['admin'] = 'admin';
                header('location:dashboard.php');
            }else{
                echo(`<h1 style="color:red">รหัสผ่านไม่ถูกต้อง !!!</h1>`);
            }
        }
    ?>
    <div class="btn1">
    <a href="http://localhost:50000/" style="background-color: #227093;color:white;padding:6px;
        border-radius:15px;"> ย้อนกลับ </a>
    </div>
</body>

</html>
