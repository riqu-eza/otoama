<?php
session_start();
include("connection.php");
include("function.php");

$user_data =  check_login($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
<form action="signup.php" method="post" >
        <label for="">name</label>
        <input type="text" id="name" placeholder="name" >
        <label for="">username</label>
        <input type="text" id="username" placeholder="username"  >
        <label for="">email</label>
        <input type="email" id="email" placeholder="email"  >
        <label for="">password</label>
        <input type="password" id="pass" placeholder="password">
        <input type="password" id="cpass" placeholder="confirm password">
       <input type="submit" value="signup" >
       <a href="login.php">login</a>
    </form>
</body>
</html>
