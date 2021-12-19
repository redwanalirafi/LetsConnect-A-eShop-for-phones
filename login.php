<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="css/login.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
   <div class="sidenav">
      <div class="login-main-text">
         <h1 style="font-family: 'Lobster', cursive; color: #CD1818;"> <span style="color: #F3950D;">Lets</span> Connect
         </h1>
         <h2>Login Page</h2>
         <p>Login or register from here to access.</p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form action="validate_user.php" method="post">
               <div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control" placeholder="User Name" name="userid">
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password">
               </div>


               <button type="submit" name="submit" class="btn btn-black">Login</button>
               <a href="./register.php" class="btn btn-secondary">Register</a>
               <br>
               <br>
               <br>
               <br>
               <a href="./index.php" class="btn btn-black">BACK</a>
            </form>
         </div>
      </div>
   </div>
</body>

</html>