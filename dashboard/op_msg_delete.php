<?php
    session_start();

    $id=$_GET['id'];
    include_once 'db.php';
                
    $sql = "DELETE FROM messages WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    
    echo "<script>window.location = './msg_page.php'</script>"
?>