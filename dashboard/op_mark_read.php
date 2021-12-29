<?php
    session_start();

    $id=$_GET['id'];
    include_once 'db.php';
                
    $sql = "UPDATE messages set mark_as_read=1 WHERE id=$id";
    $result=mysqli_query($conn,$sql);

    echo "<script>window.location = './msg_page.php'</script>"
?>