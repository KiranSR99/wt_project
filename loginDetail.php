<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Detail</title>
</head>
<body>
        <?php
            $con=mysqli_connect('localhost','root','','wt_project');
            if(isset($_POST['login'])){
                $emailORusername = $_POST['emailORusername'];
                $password        = $_POST['loginPass'];

                $query="INSERT INTO login (emailORusername,loginPass) VALUES('$emailORusername','$password')";
                $run=mysqli_query($con,$query);
            }
        ?>
        Login Successful. <a href="index.php">HOME</a>
</body>
</html>