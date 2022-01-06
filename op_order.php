<?php

    include "dashboard/db.php";


    $name= $_POST['name'];
    $phone= $_POST['cell'];
    $address=$_POST['address'];
    $amount = $_POST['pay'];
    $id= $_POST['pid'];

    $sql = "INSERT INTO `orders` (p_id,amount,name,phone,address,status) 
    VALUES ($id,'$amount','$name','$phone','$address','pending')";

    //mysqli_query($conn,$sql);
    
    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/last.css">
</head>

<body>
    <div class="card">
        <div style="border-radius:200px; height:230px; width:230px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Successful</h1>
        <p>Your order has been placed successfully;<br> Our Team will contact you shortly!</p>
        <br><br>
        <p><b>Thank you for shopping with us</b></p>
    </div>
    <div style="margin-top: 40px;">
        <a href="./index.php" class="btn btn-home">Go to Home</a>
    </div>
    
</body>

</html>