<?php

include "db.php";

session_start();

$op=$_POST['o_pass'];
$newp=$_POST['n_pass'];
$newp2=$_POST['n_pass2'];

if(empty($op)){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}
if(empty($newp)){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}
if(empty($newp2)){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}

if($newp!=$newp2){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}

$sql = "SELECT * FROM users where username='". $_SESSION['username'] ."';";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

echo $row['password']. " = ". $op;

if($row['password']==$op){
    $sql = "UPDATE users SET password='$newp' where username='". $_SESSION['username'] ."';";
    $result=mysqli_query($conn,$sql);   
    echo "<script>window.location = './profile.php?log=success'</script>";
}
else{
    echo "<script>window.location = './profile.php?log=error'</script>";
}

?>