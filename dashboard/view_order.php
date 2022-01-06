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
    <title>View Post</title>
</head>

<body>


    <div class="container my-2 text-center">
        <h1>Order Details</h1>
        <hr>

        <?php
            $id=$_GET['id'];
            include_once 'db.php';
            $sql = "SELECT * FROM orders where order_id=$id";
            $result=mysqli_query($conn,$sql);

            $row = $result->fetch_assoc();

            $p_id=$row['p_id'];

            $sql2 = "SELECT * FROM product_details where id=$p_id";
            $result2=mysqli_query($conn,$sql2);
            $row2 = $result2->fetch_assoc();
            
            $model=$row2['model'];
            $pic=$row2['picture'];

            $name=$row['name'];
            $phone=$row['phone'];
            $address=$row['address'];
            $amount=$row['amount'];
            
        ?>

        <div class="row">
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Name</h5>
                        <p class="card-text">
                            <?php echo $name; ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Address</h5>
                        <p class="card-text">
                            <?php echo $address; ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Model</h5>
                        <p class="card-text">
                            <?php echo $model; ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Amount</h5>
                        <p class="card-text">
                            <?php echo $amount." TK"; ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5 py-5">
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Picture</h5>
                        <p class="card-text">
                            <img src="<?php echo $pic; ?>">
                        </p>

                    </div>
                </div>
            </div>
        </div>
        



        <a class="my-3 mx-auto btn btn-outline-dark " href="javascript:history.go(-1)"
            style="width: 200px; font-size:25px">Go Back</a>
        <hr>

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