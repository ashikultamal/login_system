<?php
    include_once("User.php");
    if(isset($_POST['submit'])){
        $name = $_POST['user'];
        $pass = $_POST['pass'];

        $object = new User();
        $object->Login($name, $pass);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="index.php" method="post">
    username: <input type="text" name="user" />
    password: <input type="password" name="pass" id=""/>
    <input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>