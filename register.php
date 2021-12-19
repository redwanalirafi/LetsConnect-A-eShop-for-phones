<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="css/register.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
   <div class="sidenav">
      <div class="login-main-text">
         <h1 style="font-family: 'Lobster', cursive; color: #CD1818;"> <span style="color: #F3950D;">Lets</span> Connect
         </h1>
         <h2>Register Page</h2>
         <p>Login or register from here to access.</p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form action="op_register.php" method="post">
               <?php
                  
                  if(isset($_GET['error'])){
                     echo "<div class='alert alert-danger' role='alert'>
                           ". $_GET['error'] ."
                        </div>";
                  }

               ?>
               <div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control" placeholder="User Name" name="user_name">
               </div>
               <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" placeholder="Full Name" name="user_fname">
               </div>
               <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" class="form-control" placeholder="Email" name="user_email">
               </div>
               <div class="form-group">
                  <label>Contact No. </label>
                  <input type="text" class="form-control" placeholder="Phone" name="user_phone">
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="user_pass">
               </div>
               <div class="form-group">
                  <lebel style="font-size:20px">Role: </lebel>
                  <select class="form-select col-5" style="font-size:20px" name="user_role">
                     <option value="" selected disabled>Select</option>
                     <option value="buyer">Buyer</option>
                     <option value="seller">Seller</option>
                  </select><br><br>
               </div>
               


               <button type="submit" name="submit" class="btn btn-black">Sign Up</button>


               <br>
               <br>
               <br>
               <a href="./login.php" class="btn btn-black">BACK</a>
            </form>
         </div>
      </div>
   </div>
</body>

</html>