<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'database.php';
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

    $exist = false;
    $sql="SELECT * FROM `gym` WHERE `username` LIKE '$username'";
    $ans = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($ans); 

    if($num == 1)
    {
         $exist = true;
    }

    $sql1="SELECT * FROM `gym` WHERE `email` LIKE '$email'";
    $ans1 = mysqli_query($conn , $sql1);
    $num1 = mysqli_num_rows($ans1); 

    if($num1 == 1)
    {
         $exist = true;
    }
    
    // Logic for signup 
    if(( $password == $cpassword) && $exist == false)
    {
        $sql="INSERT INTO `gym` (`first_name`, `last_name`, `username`, `email`, `password`, `timestamp`) VALUES ( '$first_name', '$last_name', '$username', '$email', '$hashpassword', current_timestamp())";
        
        $result = mysqli_query($conn , $sql);
        
        if($result)
        {
          echo'<script type="text/javascript">alert("Sign Up successful!!..Login to continue:)");</script>';
          echo '<script> location.href = "index.php"; </script> ';
        }
       
    }
    else
    {
        if($exist == true)
        {
          echo'<script type="text/javascript">alert("Email already exists!!!...Try with different email id:)");</script>';
        }
        
        else
        {
          echo'<script type="text/javascript">alert("Password do not match!!!...Enter password again:)");</script>';
        }
    }
}
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitnessForSUB - Sign Up</title>
    <link rel="stylesheet" href="registration.css?v=<?php echo time(); ?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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
      <a href="welcome.php">Home</a>
      <a href="index.php" >Log In</a>
      <a href="signup.php" class="active">Sign Up</a>
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
    
     <div class="regform"> <h1>Registration Page</h1></div>
       <div id="error_message"></div>
        <div class="main">
            <form id="myform" action="signup.php" method="post">
                <div id="name">
                    <h2 class="name">Name</h2>
                    <input id="fname" class="fname" type="text" name="first_name" placeholder="Firstname" required>
                    <label class="flabel"></label><br/>
                    <input id="lname" class="lname" type="text" name="last_name" placeholder="Lastname" required>
                    <label class="llabel"></label>
                </div>
                
                <div>
                <h2 class="name">Username</h2>
                <input id="txt_username" class="txt_username" type="text" name="username" placeholder=" Username" required>
                <!-- Response -->
                <div id="uname_response" ></div>
                </div>

                <br><br>
                <h2 class="name">Email</h2>
                <input id="email" class="email" type="email" name="email" required placeholder="xyz@gmail.com" required>
                
                <h2 class="name">Password</h2>
                <input id="password" class="code" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>
                <h6 style="color:#d8da53d4;">Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</h6>


                <h2 class="name">Confirm Password</h2>
                <input id="cpassword" class="code" type="password" name="cpassword" placeholder="Re-Enter Password" required>
                <!-- <div class="registrationFormAlert" style="color:#d8da53d4;" id="CheckPasswordMatch"> -->
                <span id='message'></span>
                
               <input class="btn" type="submit" id="submit"  value="Sign Up" name="submit" >
            </form>
        </div>
</body>
</html>

<script>
$(document).ready(function(){

   $("#txt_username").keyup(function(){

      var username = $(this).val().trim();

      if(username != ''){

         $.ajax({
            url: 'ajaxfile.php',
            type: 'post',
            data: {username: username},
            success: function(response){

                $('#uname_response').html(response);

             }
         });
      }else{
         $("#uname_response").html("");
      }

    });

 });
</script>

<script>
$('#cpassword').on('keyup', function () {
    if ($(this).val() == $('#password').val()) {
        $('#message').html('Password Matching').css('color', 'green');
    } else $('#message').html('Not matching').css('color', 'red');
});
</script>