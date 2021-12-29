<?php
    include "../auth.php";
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
    <title>Delete Posts</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #4d4d4d;">
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
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./add.php">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./edit.php">Edit Product</a>
                    </li>
                    <li class="nav-item" style="background-color: #111111;">
                        <a class="nav-link text-light" href="./delete.php">Delete Product</a>
                    </li>
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



    <div class="container my-2 text-center">
        <h2>All Posts:</h2>

        <?php
            if($_SESSION['role']=="seller"){
                echo"
                    <div class='alert alert-info ' role='alert'>
                        You can only delete your pending posts.
                    </div>
                ";
            }
        ?>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    include_once 'db.php';

                

                    if($_SESSION['role']=="admin"){
                    
                        $sql = "SELECT id,seller,pending FROM products ORDER BY id DESC;";
                        $result=mysqli_query($conn,$sql);
                        $count=0;
                        while($row = $result->fetch_assoc()) {
                            $stat = $row['pending'];            // Print a single column data
                        
                            if($stat==1){
                                echo "
                                <tr>
                                    <th scope='row'>" . ++$count . "</th>
                                    <td>" . $row['seller'] . "</td>
                                    <td>
                                        <a type='button' class='btn btn-info' btn-info' href='generate_post.php?id=" . $row['id'] . "'> Viewpost  </a> 
                                    </td>
                                    <td>
                                        <a type='button' class='btn btn-danger' btn-danger' href='op_del.php?id=" . $row['id'] . "'> Delete  </a> 
                                    </td>
                                </tr>
                                ";
                            }
                        }
                    }
                    else if($_SESSION['role']=="seller"){
                        $sql = "SELECT id,seller,pending FROM products WHERE seller='". $_SESSION['username'] ."';";
                        $result=mysqli_query($conn,$sql);
                        $result = $conn->query($sql) or die($conn->error);
                        $count=0;
                        while($row = $result->fetch_assoc()) {
                            $stat = $row['pending'];            // Print a single column data
                        
                            if($stat==0){
                                echo "
                                <tr>
                                    <th scope='row'>" . ++$count . "</th>
                                    <td>" . $row['seller'] . "</td>
                                    <td>
                                        <a type='button' class='btn btn-info' btn-info' href='generate_post.php?id=" . $row['id'] . "'> Viewpost  </a> 
                                    </td>
                                    <td>
                                        <a type='button' class='btn btn-danger' btn-danger' href='op_del.php?id=" . $row['id'] . "'> Delete  </a> 
                                    </td>
                                </tr>
                                ";
                            }
                        }
                    }

                ?>
                   


            </tbody>
        </table>


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