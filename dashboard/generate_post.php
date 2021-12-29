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
    <title>View Post</title>
</head>

<body>


    <div class="container my-2 text-center">
        <h1>Full Post:</h1><hr>

        <?php
            $id=$_GET['id'];
            include_once 'db.php';
            $sql = "SELECT * FROM product_details where id=$id";
            $result=mysqli_query($conn,$sql);

            $row = $result->fetch_assoc();

            $link=$row['picture'];

            echo "<img src=". $link ." class='rounded mx-auto d-block mt-3' height='200'>";

        ?>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Name</th>
                    <th scope='col'>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $id=$_GET['id'];
                    
                    include_once 'db.php';
                    $sql = "SELECT * FROM product_details where id=$id";
                    $result=mysqli_query($conn,$sql);

                    $row = $result->fetch_assoc();
                    
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
                        <tr>
                            <th scope='row' style='background-color:#DCDCDC;'>Price: </th>
                            <td style='background-color:#90ee90;'><strong>". $row['price'] ."</strong></td>
                        </tr>
                    
                    
                    ";

                ?>

            </tbody>
        </table>
        
        <a class="my-3 mx-auto btn btn-outline-dark " href="javascript:history.go(-1)" style="width: 200px; font-size:25px">Go Back</a>
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