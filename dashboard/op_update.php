<?php
    $img = "<img src='https://img.icons8.com/emoji/48/000000/cross-mark-emoji.png'/>";
    $checker=false;

    $id=$_POST['id'];

    echo $id;

    include_once 'db.php';
    if(isset($_POST['submit']))
    {    
        $x0 = $_POST['x0'];
        $x1 = $_POST['x1'];
        $x2 = $_POST['x2'];
        $x3 = $_POST['x3'];
        $x4 = $_POST['x4'];
        $x5 = $_POST['x5'];
        $x6 = $_POST['x6'];
        $x7 = $_POST['x7'];
        $x8 = $_POST['x8'];
        $x9 = $_POST['x9'];
        $x10 = $_POST['x10'];
        $x11 = $_POST['x11'];
        $x12 = $_POST['x12'];
        $x13 = $_POST['x13'];   

        

        
        
        $sql = "UPDATE product_details 
        SET model='$x0', display='$x1', processor='$x2', fcam='$x3', rcam='$x4', storage='$x5', battery='$x6', ram='$x7', freader='$x8', connectivity='$x9', sim='$x10', sensor='$x11', picture='$x12', price='$x13' 
        WHERE id=$id;";

        
        //$sql = "INSERT INTO product_details (ram) VALUES('gx');";
        if (mysqli_query($conn, $sql)) {
            $img = "<img src='https://img.icons8.com/color/50/000000/checked-2.png'/>";
            $checker=true;

        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }
    else{
        echo  "<p style='text-align: center;'>Error! Complete the form and try again.</p>";            
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
    <title>Add Product</title>
</head>

<body>
    <div class="container">

        <div class="d-grid gap-2 col-6 mx-auto my-5 px-3">
            <?php
                echo $img;
                if(!$checker){
                    echo "<div class='alert alert-danger' role='alert'>
                        Someting Wrong! Try again.
                    </div>";
                }
            ?>

            <div class="alert alert-success py-5" role="alert" style="text-align: center;">
                Data Updated Successfully.
            </div>

            <div class="alert alert-info" role="alert" style="text-align: center;">
                Thank You.
            </div>

            <a class="my-3 mx-auto btn btn-outline-dark " href="./edit.php" style="width: 200px; font-size:25px">Go Back</a>
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