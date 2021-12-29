<?php
    include "../auth.php";
    if($_SESSION['role']!="admin"){
        echo "<script>top.window.location = './index.php?error=Access denied'</script>";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/3299f686b9.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis&family=M+PLUS+Code+Latin&family=Open+Sans:wght@300&family=Zen+Kurenaido&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Profile Edit</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4d4d4d;">
        <div class="container-fluid">
            <span style="font-size: 40px; color: white;">
                <i class="fas fa-store"></i>
            </span>
            <a class="navbar-brand text-light" href="./index.php">&nbsp;Let's Connect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="./index.php">Dashboard</a>
                    </li>
                    <?php
                    if($_SESSION['role']=="admin" || $_SESSION['role']=="seller"){
                        echo "
                        <li class='nav-item'>
                            <a class='nav-link text-light' href='./add.php'>Add Product</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link text-light' href='./edit.php'>Edit Product</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link text-light' href='./delete.php'>Delete Product</a>
                        </li>";
                    }
                    
                    ?>
                    <?php

                    if($_SESSION['role']=="admin"){
                        echo "<li class='nav-item'>
                                <a class='nav-link text-light' href='./pending.php'>Pending Product</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link text-light' href='./add_stuff.php'>Add Stuff</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link text-light' href='./manage_order.php'>Manage Order</a>
                            </li>
                            ";
                    }

                    ?>

                </ul>
                <form class="d-flex">
                    <a href="./profile.php" class="btn btn-light mx-2" type="submit">Profile</a>
                    <a href="../logout.php" class="btn btn-danger text-light" type="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>

    <?php
        include "db.php";
            
        $sql = "SELECT * FROM users where username='". $_SESSION['username'] ."';";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);


    ?>


    <div class="container my-5 text-center d-float">
        <div class="container">
            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://cdn4.iconfinder.com/data/icons/diversity-v2-0-volume-03/64/superhero-spiderman-comics-512.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?php echo $_SESSION['username']; ?></h4><hr>
                                        <h2><?php echo $row['full_name']; ?></h2><hr><br>
                                        <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Dhaka, Bangladesh</p><br>
                                        <a href="./msg_page.php" class="btn btn-outline-primary">Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">

                            <form action="./op_change_pass.php" method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Old Password</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" name="o_pass" placeholder="Enter Old Password">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">New Password</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" name="n_pass" placeholder="Enter New Password">  
                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">New Password</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" name="n_pass2" placeholder="Enter New Password">  
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-warning" name="submit" type="submit">Update Password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>