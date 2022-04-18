<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .display{
            width: 70%;
            height: auto;
            margin-left:15%;
            padding: 5px;
            text-align: center;
            margin-top:12px;
        }
        body {
            font-family: 'Kanit', sans-serif;
        }
        table td, table th{
            text-align: center;
            color:#cc8e35;
            
        }
    </style>
</head>

<body style="background-color:#2c2c54">
    <h1 style="font-size:23px;text-align: center;margin-top: 23px;color:white"> อันดับผู้เล่น </h1>
        <div class="display">    
        <table>
            <tr> 
                <th>Top</th>
                <th>Name</th>
                <th>Score</th>

            </tr>

            <?php
            require('connection.php');
            //SELECT  Age, Student_Fname, Student_Lname 
            //FROM    Student
            //ORDER BY Age, Student_Fname;
            $sql = "SELECT * FROM `users`ORDER BY score DESC ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $Top = 1;
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><div><?=$Top;?></div></td>
                        <td><?php echo ($row['name']) ?></td>
                        <td><?php echo ($row['score']) ?></td>
                    </tr>
            <?php
            $Top++;
                }
            }
            ?>

        </table>
        
        </div>
        <a href="http://localhost:50000/Home"style="background-color: #227093;color:white;padding:6px;
        border-radius:15px;" > ย้อนกลับ </a>
</body>

</html>