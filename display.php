<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>authentification</title>
</head>
<body>
    <?php
    $myInt = array('login' => 'vadim', 'password' => 123);
    $newInt = $_POST['login'];
    $newInt = $_POST['password'];
        if ($myInf == $newInt) {
        echo "Добро пожаловать на сайт";
    }    
        else {
            echo "Введен неверный Логин и Пароль";
        }
    ?>  
</body>
</html>