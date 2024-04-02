<?php
require'connect.php';
if(isset($_POST['submit'])){
    $email = $_post["email"];
    $password = $_post["password"];
    $confirmpassword = $_post["confirmpassword"];
    $duplicate = mysqli_query($conn,"SELECT * FROM registration WHERE = email='$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo"<script>alert('email has allready taken') </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO registration VALUE('','$email','$password','$confirmpassword')";
            mysqli_query($conn,$query);
            echo"<script>alert('Registration successfully') </script>";
        }
        else{
            echo"<script>alert('password does does not match') </script>";
        }

    }

}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>registration</h2>
    <form action="" method="post">
        <label for="email">email:</label>
        <input type="email" name="email" id="email" value="" required><br>

        <label for="password">password:</label>
        <input type="password" name="password" id="password" value="" required><br>

        <label for="confirmpassword">confirm password:</label>
        <input type="password" name="confirmpassword" id="confirmpassword" value="" required><br>
        <button type="submit" name="submit"> register</button>
    </form>
    <a href="login.php">login</a>
</body>
</html>