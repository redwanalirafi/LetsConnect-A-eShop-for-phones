<?php
    include "./auth2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/orderconfirmation.css">

</head>

<?php
    $id=$_GET['id'];                
    include_once 'dashboard/db.php';
    $sql = "SELECT * FROM product_details where id=$id";
    $result=mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();

?>

<body>
    <header>
        
        <div class="container-fluid">
            <div class="row navbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" class="img-fluid"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.php">Contact Us</a>
                                </li>
                            </ul>
                </nav>
            </div>
        </div>
    </header>
    <form action="./op_order.php" method="post">
        <div class="order_details mb-5" >
            <div class="container">
                <div class="row" style="margin-bottom: 30px;">
                    <h3 style="text-align: center; margin-bottom: 50px; margin-top: 50px;">Order Details</h3>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <h4 style="margin-bottom: 30px;" ><u>Buyer's Required Information</u></h4>
                        
                        
                            <h5>Name</h4>
                            <input style="margin-bottom: 15px; width: 50%;" type="text" id="name" name="name" placeholder="Enter your name"><br>
                            <h5>Cell No.</h4>
                            <input style="margin-bottom: 15px; width: 50%;" type="text" id="cell" name="cell" placeholder="Enter your cell number"><br>
                            <h5>Address</h4>
                            <textarea  name="address" id="address" style="width: 50%;" rows="4" placeholder="Enter your address"></textarea><br>
                            <input type="hidden" id="pay" name="pay" value="<?php echo (int)($row['price']+$row['price']*5/100+250); ?>">
                            <input type="hidden" id="pid" name="pid" value="<?php echo $_GET['id']; ?>">
                            
                        
                    </div>
                    

                    
                    <div class="col-5">
                        <div class="img-bg" style="background:#d2f8d2">
                            <img class="my-2 ms-3" src="<?php echo $row['picture']; ?>" height="150px">
                            <p class="ms-4 mb-2">In Stock</p>
                        </div>
                        <h4 style="margin-bottom: 30px;"> <u>Product Details</u></h4>
                        <h5><b>Product Name: </b> <?php echo $row['model'] ?></h5>
                        <h5><b>Product ID: </b> #RRFNR_<?php echo $row['id'] ?></h5>
                        <h5><b>Product's Price:  ৳</b> <?php echo $row['price'] ?> </h5>
                        <h5><b>Value Added Tax (VAT): </b> 5%</h5>
                        <h5><b>Delivery Charge:  ৳</b> 250 </h5>
                        <?php
                            $pay=(int)($row['price']+$row['price']*5/100+250);
                        ?>
                        <h5><b>Total Payable Amount:  ৳</b> <?php echo $pay ?></h5>
                        
                    </div>
                    <div class="col-1"></div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-course" style="margin-right: 5px;"><b>CONFIRM</b></button>
                    <a href="./index.php" class="btn btn-course" style="margin-left: 5px;"><b>BACK</b></a>
                </div>
                <h5 style="text-align: center;"> <b>Payment Method:</b> Cash on Delivery</h5>

            </div>
        </div>
    </form>
    <footer>
        <div class="container-fluid pt-3" style="background: currentColor;">
            <div class="row text-center" >
                <p style="color:white">Copyright © 2022 Let's Connect All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>