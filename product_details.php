<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Buy Product</title>

    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
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
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <?php
        $id=$_GET['id'];

                        
        include_once 'dashboard/db.php';
        $sql = "SELECT * FROM product_details where id=$id";
        $result=mysqli_query($conn,$sql);

        $row = $result->fetch_assoc();

    ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-4 text-center py-5"
                style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
                <img src="<?php echo $row['picture']; ?>" height="300px">
            </div>
            <div class="col-7 py-5 mx-5 text-center"
                style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
                <h1>
                    <?php echo $row['model'] ?>
                    </h3>
                    <h2> ৳
                        <?php echo $row['price'] ?>
                    </h2>
                    
                    <a href="./orderconfirmation.php?id=<?php echo $_GET['id'];?>" 
                        class="btn btn-primary" style="font-size: 20px; background-color:#58aa3a"> 
                        Buy Now </a>
            </div>

        </div>

        <h3 class='text-center my-5'> Details : </h3>

        <div style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;">
            <table class='table text-center' style="font-size: 20px;">
                <thead>
                    <tr>
                        <th scope='col'>Name</th>
                        <th scope='col'>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    
                        
                        
                        echo "
                        
                            <tr>
                                <th scope='row'>Model: </th>
                                <td style='color:blue;'> <strong>". $row['model'] ."</strong></td>
                            </tr>
                            <tr>
                                <th scope='row'>Display: </th>
                                <td>". $row['display'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Processor: </th>
                                <td>". $row['processor'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Front Camera: </th>
                                <td>". $row['fcam'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Back Camera: </th>
                                <td>". $row['rcam'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Storage: </th>
                                <td>". $row['storage'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Bettery: </th>
                                <td>". $row['battery'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>RAM: </th>
                                <td>". $row['ram'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Color: </th>
                                <td>". $row['color'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Connectivity: </th>
                                <td>". $row['connectivity'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>SIM: </th>
                                <td>". $row['sim'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Sensor: </th>
                                <td>". $row['sensor'] ."</td>
                            </tr>
                            <tr>
                                <th scope='row'>Release Date: </th>
                                <td>". $row['r_date'] ."</td>
                            </tr>
                        
                        ";
    
                    ?>

                </tbody>
            </table>

        </div>
    </div>

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