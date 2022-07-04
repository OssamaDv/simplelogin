<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
         <div id="main">
            <h1>SIMPLE LOGIN</h1>
            <form method="POST">

            Username <input type="text" name="username" class="text" autocomplete="off" required>
            Password <input type="password" name="password" class="text" required>

            <input type="submit" name="submit" id="sub">
            </form>
          </div>  
</body>
</html>

<?php

$sql=mysqli_connect("localhost","root","","simple login");


if(isset($_POST['submit']))
{
    $un=$_POST['username'];
    $pw=$_POST['password'];
    $result=mysqli_query($sql,"select password from user where username='$un'");
    
    if($row=mysqli_fetch_array($result))
    {
        if($pw==$row['password'])
        {
            header("location:home.php");
            exit();
        }
        else
        {
            echo "invalid password";
        }
    }
    else
    {
        echo "invalid username";
    }
    
   
}

?>