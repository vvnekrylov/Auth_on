<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>authentification</title>
</head>
<body>
    <?php
        $myInt['vadim']=123;
        foreach ($myInt as $key=>$value)    {
            if ($key == $_POST['login'] && $value == $_POST['password']) {
            echo "Добро пожаловать на сайт!";
        }    
        else {
            include "index.html";
            echo "Введен неверный Логин и Пароль!";
        }
    }
        
    ?>  
</body>
</html>