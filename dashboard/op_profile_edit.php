<?php

include "db.php";

session_start();

$user=$_POST['f_name'];
$phone=$_POST['phone'];
$mail=$_POST['email'];

if(empty($user)){
    echo "<script>window.location = './profile.php?error'</script>";
    exit();
}
if(empty($phone)){
    echo "<script>window.location = './profile.php?error'</script>";
    exit();
}
if(empty($mail)){
    echo "<script>window.location = './profile.php?error'</script>";
    exit();
}

$sql = "UPDATE users SET full_name='$user', phone='$phone', email='$mail' where username='". $_SESSION['username'] ."';";
$result=mysqli_query($conn,$sql);

echo "<script>window.location = './profile.php'</script>";

?>