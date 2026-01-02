<?php
require("connection.php");
if(isset($_POST['Login']))
{
    $query="SELECT `Ad_email`, `Ad_Password` FROM `admin_login` WHERE `Ad_email`='$_POST[Adminemail]' AND `Ad_Password`='$_POST[Adminpass]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
            session_start();
            header("location:dashboard.php");
        }   
    else{
        echo"<script>alert('Incorrect Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>