<?php
    $myInt['vadim']=123;
        if (isset($_POST['login']) && isset($_POST['password'])) 
        {
           foreach ($myInt as $key=>$value)
           {
             if ($key == $_POST['login'] && $value == $_POST['password']) 
                {
                header('Location: accept.html');
                }
            else 
                {
                header('Location: retry.html');
                }
        /*else 
            {
            header('Location: retry.html');
            }*/     
            }
        }
?>   
