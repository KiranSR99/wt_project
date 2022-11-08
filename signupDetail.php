<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Details</title>
</head>
<body>
<?php

        $con=mysqli_connect('localhost','root','','wt_project');
        if(isset($_POST['signup'])){
            $fname       = $_POST['fname'];
            $lname       = $_POST['lname'];
            $email       = $_POST['email'];
            $contact     = $_POST['contact'];
            $username    = $_POST['username'];
            $password    = $_POST['password'];
            $confirmPass = $_POST['confirmPass'];
            // if($password == $confirmPass){
            //     save
            // }
            // else{
            //     dont save
            // }
            $query = "INSERT INTO signup (fname,lname,email,contact,username,password,confirmPass   ) 
            VALUES('$fname','$lname','$email','$contact','$username','$password','$confirmPass')";
            $run = mysqli_query($con,$query);
        }
    ?>
    Successfully signed up, please <a href="index.php">login</a> 
</body>
</html>