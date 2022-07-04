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

mysql_connect("localhost","root","password");
mysql_selectdb("simplelogin");

if(isset($_POST['submit']))
{
    $un=$_POST['username'];
    $pw=$_POST['password'];
    $sql=mysql_query("select password from user where username='$un'");
    
    if($row=mysql_fetch_array($sql))
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