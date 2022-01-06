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
    <title>Pending Posts</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #4d4d4d;">
        <div class="container-fluid">
            <span style="font-size: 40px; color: white;">
                <i class="fas fa-store"></i>
            </span>
            <a class="navbar-brand text-light" href="../index.php">&nbsp;Let's Connect</a>
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
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./delete.php">Delete Product</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="./pending.php">Pending Product</a>
                    </li>
                    <li class="nav-item " style="background-color: #111111;">
                        <a class="nav-link text-light" href="./add_stuff.php">Add Stuff</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-light' href='./manage_order.php'>Manage Order</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <a href="./profile.php" class="btn btn-light mx-2" type="submit">Profile</a>
                    <a href="../logout.php" class="btn btn-danger text-light" type="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>


    <div class="row my-5">
        <div class="col mx-5">
            <div class="mb-3 col-5">
                <h1>Add a new Admin:</h1>
            </div>
            <form action="op_add_admin.php" method="post">
                <div class="mb-3 col-5">
                    <label class="form-label">Username:</label>
                    <input type="text" class="form-control" name="admin_user">
                </div>
                <div class="mb-3 col-5">
                    <label class="form-label">Password:</label>
                    <input type="password" class="form-control" name="admin_pass">
                </div>

                <button name="submit2" type="submit" class="btn btn-lg btn-primary">Add Admin</button>
            </form>
        </div>
        <div class="col">
            <div class="">
                <div class="mb-3 col-5">
                    <h1>Add a new Stuff:</h1>
                </div>
                <form action="op_add_stuff.php" method="post">
                    <div class="mb-1 col-5">
                        <label class="form-label">Username:</label>
                        <input type="text" class="form-control" name="stuff_user">
                    </div>
                    <div class="mb-1 col-5">
                        <label class="form-label">Password:</label>
                        <input type="password" class="form-control" name="stuff_pass">
                    </div>

                    <div class="mb-1 col-5">
                        <label class="form-label">Full Name:</label>
                        <input type="text" class="form-control" name="stuff_name">
                    </div>

                    <div class="mb-1 col-5">
                        <label class="form-label">Email:</label>
                        <input type="text" class="form-control" name="stuff_mail">
                    </div>

                    <div class="mb-1 col-5">
                        <label class="form-label">Phone:</label>
                        <input type="text" class="form-control" name="stuff_phone">
                    </div>
                    <label class="form-label mb-1">Role:</label><br>
                    <select class="custom-select col-5" name="stuff_role">
                        <option selected value="stuff">Stuff</option>
                        <option value="p_manager">Product Manager</option>
                        <option value="d_manager">Delivary Manager</option>
                        <option value="m_manager">Marketing Manager</option>
                    </select><br><br>
                    <button name="submit3" type="submit" class="btn btn-lg btn-primary">Add Stuff</button>
                </form>
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