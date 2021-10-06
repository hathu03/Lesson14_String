<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Email: <br>
    <input type="text" name="email" placeholder="Your email"> <br>
    Phone number: <br>
    <input type="text" name="phonenumber" placeholder=" Your phone number"> <br>
    Account: <br>
    <input type="text" name="account" placeholder=" Your account"> <br>
    Class name: <br>
    <input type="text" name="classname" placeholder="Your class name"> <br>
    <button type="submit">SUBMIT</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['account'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $class = $_POST['classname'];
    function checkEmail($mail)
    {
        $regexp = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
        if (preg_match($regexp, $mail)) {
            echo("Welcome");
        } else {
            echo("Ky tu khong hop le");
        }
    }

    function checkAccount($name)
    {
        $regexp = "/^[_a-z0-9]{6,}$/";
        if (preg_match($regexp, $name)) {
            echo("Welcome");
        } else {
            echo("Ky tu khong hop le");
        }
    }

    function checkClassName($class)
    {
        $regexp = "/^[A|P|C][0-9]{4 }[G|H|I|K|L|M]$/";
        if (preg_match($regexp, $class)) {
            echo("Welcome");
        } else {
            echo("Ky tu khong hop le");
        }
    }

    function checkPhoneNumber($phone)
    {
        $regexp = "/^\d{2}\-[0]*\d{9}$/";
        if (preg_match($regexp, $phone)) {
            echo("Welcome");
        } else {
            echo("Ky tu khong hop le");
        }
    }

    checkEmail($email);
    checkPhoneNumber($phone);
    checkAccount($name);
    checkClassName($class);

}
