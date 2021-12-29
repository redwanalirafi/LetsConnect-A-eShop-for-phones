<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Buy Product</title>
    <link rel="stylesheet" href="css/product.css">
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
    <div class="container">
        <div class="row text-center" style="margin-top: 25px;">
            <h1 style="margin-bottom: 0px;"> <b><?php echo strtoupper($_GET['brand']);?></b> </h1>
        </div>
        <?php

            $brand=$_GET['brand'];


            include_once 'dashboard/db.php';
                    
            $sql = "SELECT * FROM product_details WHERE brand='$brand' AND id IN (SELECT id FROM products WHERE pending=1) ORDER BY id DESC;";
            $result=mysqli_query($conn,$sql);
            $count=0;
            while($row = $result->fetch_assoc()) {
                $mod = $row['model'];            // Print a single column data

                if($count==0){
                    echo "<div class='row'>";
                }
                echo "
                <div class='col-md-4'>
                    <div class='thumb-wrapper'>
                        <span class='wish-icon'><i class='fa fa-heart-o'></i></span>
                        <div class='img-box'>
                            <img src='". $row['picture'] ."' class='img-fluid'
                                alt='Headphone'>
                        </div>
                        <div class='thumb-content'>
                            <h4>". $row['model'] ."</h4>
                            <p class='item-price' style='font-size: 20px;'><b>৳ ". $row['price'] ."</b></p>
                            <a href='./product_details.php?id=".$row['id']."' class='btn btn-primary'>Details</a>
                        </div>
                    </div>
                </div>
                
                ";

                $count++;

                if($count==3){
                    $count=0;
                    echo "
                    </div>
                    <div class='row'>
                    ";
                }

                /*if($stat==0){
                    echo "
                    <tr>
                        <th scope='row'>" . ++$count . "</th>
                        <td>" . $row['seller'] . "</td>
                        <td>
                            <a type='button' class='btn btn-info' btn-info' href='generate_post.php?id=" . $row['id'] . "'> Viewpost  </a> 
                        </td>
                        <td>
                            <a type='button' class='btn btn-success' btn-success' href='op_app.php?id=" . $row['id'] . "'> Approve  </a> 
                            <a type='button' class='btn btn-danger' btn-danger' href='op_del.php?id=" . $row['id'] . "'> Delete  </a> 
                        </td>
                    </tr>
                    ";
                }*/
            }

        ?>
        
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>