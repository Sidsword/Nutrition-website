<?php
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'database.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    // $sql="SELECT * FROM `gym` WHERE `username` LIKE '$username' AND `password` LIKE '$password'";
    $sql="SELECT * FROM `gym` WHERE `username` LIKE '$username'";
    $result = mysqli_query($conn , $sql);
    $num= mysqli_num_rows($result);
    if ( $num == 1 )
    {
      while ($row = mysqli_fetch_assoc($result))
      {
        if (password_verify($password, $row['password'])) {
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
          echo '<script> location.href = "welcome.php"; </script> ';
      }
      else{
        echo'<script type="text/javascript">alert("Wrong Password!!!Enter Correct Password");</script>';
      echo '<script> location.href = "index.php"; </script> ';
      }
    }
  }     
    else
    {
      echo'<script type="text/javascript">alert("Wrong login details!!!");</script>';
      echo '<script> location.href = "index.php"; </script> ';
}
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnessForSUB - Login</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link
      rel="stylesheet"
      media="screen and (max-width: 1170px)"
      href="phonework.css?v=<?php echo time();?>"
    />
    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
</head>
<body>
<div class="topnav" id="myTopnav">
<a href="welcome.php" class="fitness"> FitnessForSUB </a>
      <a href="welcomee.php">Home</a>
      <a href="index.php" class="active">Log In</a>
      <a href="signup.php">Sign Up</a>
      <a href="logout.php">Log Out</a>
      <a href="aboutus.php">About Us</a>
      <a
        href="javascript:void(0);"
        style="font-size: 15px"
        class="icon"
        onclick="myFunction()"
        >&#9776;</a
      >
    </div>

<form action="index.php" method="post">
   <div class="container">
      <h1> Login Page</h1>
      <div class="box">
      <i class="fa fa-user" style="font-size: 1.5em" ></i>
       <input id="username" class="username" type="text" name="username" placeholder=" Enter Your Username">
       </div>
   <div class="box">
      <i class="fa fa-key" style="font-size: 1.5em"></i>
       <input type="password" name="password" id="password" placeholder="Enter Your Password">
       <span class="eye" onclick="meraFunction()">
       <i id="hide1" class="fa fa-eye fa-lg fa-cog"></i>
       <i id="hide2" class="fa fa-eye-slash fa-lg fa-cog"></i>
       </span>
   </div>
   <button class="btn" type="submit" name="submit">LOGIN</button>
   <br><br>
   <b>
   <p><a class="link" href="signup.php">Click here</a> to Sign Up Now!!</p><br>
   </b>
    </div>
    </form>

    <script>
          function meraFunction(){
            var x = document.getElementById("password");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if(x.type === 'password'){
              x.type = "text";
              y.style.display = "block";
              z.style.display = "none";
            }
            else{
              x.type = "password";
              y.style.display = "none";
              z.style.display = "block";
            }

          }
    </script>
</body>
</html>