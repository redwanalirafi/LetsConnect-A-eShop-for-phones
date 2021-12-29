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
    <title>Profile</title>
</head>

<body>
    <div class="container text-center">
        <a class="my-5 mx-auto btn btn-dark " href="./profile.php" style="width: 200px; font-size:25px">Go Back</a>
                
                <?php
                    include_once 'db.php';
                
                    $sql = "SELECT * FROM messages ORDER BY id desc;";
                    $result=mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc()) {
                        if($row['mark_as_read']==1){
                            echo "
                            <div class='card'>
                            <div class='card-body' style='box-shadow: 2px 5px 8px #888888;'>
                                <h5 class='card-title'>". $row['name'] ."</h5>
                                <h6 class='card-subtitle mb-2 text-muted'>". $row['email'] ."</h6>
                                <hr>
                                <p class='card-text'>". $row['msg'] ."</p>
                
                
                
                                
                                        
                                <a class='btn btn-outline-secondary' href='./op_mark_read.php?id=" . $row['id'] . "'>Mark as read</a>
                                        
                                <a class='btn btn-outline-danger' href='./op_msg_delete.php?id=" . $row['id'] . "'>Delete</a>
                                            
                                
                            </div>
                            </div>
                            <br>
                            ";
                        }
                        else{
                            echo "
                            <div class='card'>
                            <div class='card-body' style='box-shadow: 2px 5px 8px #888888; background-color:#DCDCDC;'>
                                <h5 class='card-title'>". $row['name'] ."</h5>
                                <h6 class='card-subtitle mb-2 text-muted'>". $row['email'] ."</h6>
                                <hr>
                                <p class='card-text' >". $row['msg'] ."</p>
                
                
                
                                <a class='btn btn-outline-secondary' href='./op_mark_read.php?id=" . $row['id'] . "'>Mark as read</a>
                                        
                                <a class='btn btn-outline-danger' href='./op_msg_delete.php?id=" . $row['id'] . "'>Delete</a>

                            </div>
                            </div>
                            <br>
                            ";

                        }


                    }
                    //echo "<script>window.location = './pending.php'</script>"

                ?>


            
        
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