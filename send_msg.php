<?php
    include_once 'dashboard/db.php';
    $name=$_POST['x1'];
    $email=$_POST['x2'];
    $msg=$_POST['msgg'];

    $sql = "INSERT INTO `messages` (name,email,msg) 
    VALUES ('$name','$email','$msg')";

    //mysqli_query($conn,$sql);
    
    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    echo "<script>top.window.location = 'contact.php'</script>";

?>