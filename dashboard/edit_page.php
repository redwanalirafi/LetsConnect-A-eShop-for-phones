<?php
    include "../auth.php";
    include_once 'db.php';

    // checking if this post is created by the currect user.
    //checking pending or not
    
    if($_SESSION['role']!="admin"){
        $id=$_GET['id'];
        echo "gg";
        $sql = "SELECT seller,pending FROM products where id=$id";
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
            
            while($row = $result->fetch_assoc()) {
                
                if($row['pending']==1){
                    echo " vitre ";
                    echo "<script>top.window.location = './edit.php'</script>";
                }
            }
            
        }
        else{
            echo "<script>top.window.location = './edit.php'</script>";
        }
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
    <title>Product Editor</title>
</head>

<body>
    

    <div class="container text-center d-float px-5 mb-3">
        <?php
            $id=$_GET['id'];
                    
            include_once 'db.php';
            $sql = "SELECT * FROM product_details where id=$id";
            $result=mysqli_query($conn,$sql);

            $row = $result->fetch_assoc();



        ?>


        <h2 class="mb-3 mt-2">Edit Product</h2>

        
    

        <form action="op_update.php" method="post">

            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-mobile-alt"></i></span>
                <input type="text" value="<?php echo  $row['model']; ?>" class="form-control" placeholder="Phone Model" aria-describedby="addon-wrapping"
                    style="color: blue; font-weight: bold;" name="x0">
            </div>


            <input class="form-control my-3" value="<?php echo  $row['display']; ?>" type="text" placeholder="Display" name="x1">
            <input class="form-control my-3" value="<?php echo  $row['processor']; ?>" type="text" placeholder="Processor" name="x2">
            <input class="form-control my-3" value="<?php echo  $row['fcam']; ?>" type="text" placeholder="Front Camera" name="x3">
            <input class="form-control my-3" value="<?php echo  $row['rcam']; ?>" type="text" placeholder="Rear Camera" name="x4">

            <input class="form-control my-3" value="<?php echo  $row['storage']; ?>" type="text" placeholder="Storage" name="x5">
            <input class="form-control my-3" value="<?php echo  $row['battery']; ?>" type="text" placeholder="Battery" name="x6">
            <input class="form-control my-3" value="<?php echo  $row['ram']; ?>" type="text" placeholder="Ram" name="x7">
            <input class="form-control my-3" value="<?php echo  $row['color']; ?>" type="text" placeholder="Fingerprint Reader" name="x8">
            <input class="form-control my-3" value="<?php echo  $row['connectivity']; ?>" type="text" placeholder="Connectivity" name="x9">
            <input class="form-control my-3" value="<?php echo  $row['sim']; ?>" type="text" placeholder="SIM Card" name="x10">
            <input class="form-control my-3" value="<?php echo  $row['sensor']; ?>" type="text" placeholder="Sensors" name="x11">


            <div class="input-group mb-3">
                <input type="text" value="<?php echo  $row['picture']; ?>" class="form-control" id="inputGroupFile02" name="x12" placeholder="link">
                <label class="input-group-text" for="inputGroupFile02">Phone Image</label>
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">BDT</span>
                <input type="text" value="<?php echo $row['price']; ?>" class="form-control" placeholder="Price" aria-describedby="addon-wrapping" name="x13">
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>"/>

            <br>
            <div class="d-grid gap-2 col-2 mx-auto">
                <button name= "submit" type="submit" class="btn btn-dark" style="font-size : 20px;">Update</button>
            </div>

        </form>
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