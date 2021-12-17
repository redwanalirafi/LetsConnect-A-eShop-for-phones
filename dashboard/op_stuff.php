<?php

include_once 'db.php';

if(isset($_POST['submit2']))
{   
    $username=$_POST['stuff_user'];
    $password=$_POST['stuff_pass'];
    $role=$_POST['stuff_role'];

    echo $username.$password.$role;
    
}


?>