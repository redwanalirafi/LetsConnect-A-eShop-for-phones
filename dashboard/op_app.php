<?php
    include_once 'db.php';
    $id=$_GET['id'];

    $sql = "UPDATE products SET pending=1 WHERE id=" . $id . ";";
    $result=mysqli_query($conn,$sql);
    echo "<script>window.location = './pending.php'</script>"
?>