<?php
    include_once 'db.php';
    $id=$_GET['id'];

    $sql = "UPDATE orders SET status='delivered' WHERE order_id=" . $id . ";";
    
    $result=mysqli_query($conn,$sql);
    echo "<script>window.location = './manage_order.php'</script>"
?>