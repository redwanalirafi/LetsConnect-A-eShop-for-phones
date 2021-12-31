<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="lets_connect";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die('Could not Connect MySql Server:' . mysqli_connect_error());
    }

?>

