<?php

include_once 'db.php';

if(isset($_POST['submit3']))
{   
    $username=$_POST['stuff_user'];
    $password=$_POST['stuff_pass'];
    $full_name=$_POST['stuff_name'];
    $mail=$_POST['stuff_mail'];
    $phone=$_POST['stuff_phone'];

    echo $username.$password;
    
}


?>