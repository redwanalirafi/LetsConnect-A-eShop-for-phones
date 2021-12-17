<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="project_beta1.0";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }

?>

