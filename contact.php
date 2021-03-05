<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
  // echo "login fail";
     header("location:index.php");
     exit;
}
?>

<?php

if(isset($_POST['submit']))
{
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $subject=trim($_POST['subject']);
    $message=trim($_POST['message']);
    
    $myMail="bhaskarkumbhar008@gmail.com";
    $header="From:".$email;
    $message2="You Have Received A message From " . $name .". \n\n". $message;
    
    mail($myMail,$subject,$message2,$header);
    header("Location:contact.php?mailsent");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitnessForSUB-Contact Us</title>
    <link rel="stylesheet" href="style3.css?v=<?php echo time();?>" />
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
    <style>
        body{
            background-image: url('123.jpg');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        
    div{
    margin: 0 auto;
    text-align: center;
}
h1{
    margin: 0;
    font-size: 50px;
    text-align: center;
}
p{
    font-size: 18px;
    text-align: center;
}

form{
    margin:0 auto;
    text-align: center;
    padding: 20px 0px 0px 0px;
    
}

input{
    width: 225px;
    height: 25px;
    display: block;
    margin: 20px auto;
    box-shadow: 0 0 10px #000;
    border: :1px solid #f2f2f2;
    background-color: #f2f2f2;
    padding: 4px;
}
::placeholder{
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
}
textarea{
    width: 225px;
    height: 100px;
    display: block;
    margin: 20px auto;
    box-shadow: 0px 0px 10px #000;
    border: 1px solid #f2f2f2;
    background-color: #f2f2f2;
    padding: 4px;
}
button{
    width: 120px;
    height: 40px;
    background-color: #000000;
    color: #ffffff;
}
    </style>
</head>
<body>
<div class="topnav" id="myTopnav">
      <a href="welcome.php" class="fitness"> FitnessForSUB </a>
      <a href="welcome.php">Home</a>
      <a href="Workouts.php">Workouts</a>
      <a href="nutrition.php">Nutrition</a>
      <a href="meditation.php">Meditation</a>
      <a href="contact.php" class="active">Contact Us</a>
      <a href="logout.php">Log Out</a>
      <a href="aboutus.php">About Us</a>
      <a href="welcome.php" style="background-color:gray"><?php echo $_SESSION['username'];?></a> 
      <a
        href="javascript:void(0);"
        style="font-size: 15px"
        class="icon"
        onclick="myFunction()"
        >&#9776;</a
      >
    </div><br><br>
  <h1>Get In Touch</h1>
  <p>Please fill in the fields</p>
  <div>
  <form action="contact.php" method="post">
      <input type="text" name="name" placeholder="Full name">
      <input type="text" name="email" placeholder="E-mail">
      <input type="text" name="subject" placeholder="Subject">
      <textarea name="message" placeholder="Enter Message"></textarea>
      <button type="submit" name="submit">SEND</button>
  </form>
    </div>
    <br><br>
    <div class="mapouter"> <h3 style="text-align: center;">Find us @ M.H.Saboo Siddik College,Byculla</h3><br><div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=m.h.saboo%20siddik&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">google map websites</a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style></div>
</body>
</html>