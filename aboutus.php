<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
  // echo "login fail";
     header("location:index.php");
     exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitnessForSUB-About Us</title>
    <link rel="stylesheet" href="aboutus.css?v=<?php echo time();?>" />
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
  <body id="workout">
    <div class="topnav" id="myTopnav">
      <a href="welcome.php" class="fitness"> FitnessForSUB </a>
      <a href="welcome.php">Home</a>
      <a href="Workouts.php">Workouts</a>
      <a href="nutrition.php">Nutrition</a>
      <a href="meditation.php">Meditation</a>
      <a href="contact.php">Contact Us</a>
      <a href="logout.php">Log Out</a>
      <a href="aboutus.php" class="active">About Us</a>
      <a href="welcome.php" style="background-color:gray"><?php echo $_SESSION['username'];?></a> 
      <a
        href="javascript:void(0);"
        style="font-size: 15px"
        class="icon"
        onclick="myFunction()"
        >&#9776;</a
      >
    </div>

    <section id="home">
      <section id="services">
        <section id="main-container">
          <h1 class="h-primary center" style="color:white;">ABOUT US</h1>

          <div id="main">
              <div class="box">
              <h2 class="h-secondary center">
                Bhaskar Kumbhar
              </h2>
              <img src="bhaskar.jpeg" alt="Error" />
              <br />
              <p class="center">
               ROll No: 6118023   Department : Information Technology
              </p>
              <p class="center">
                Lives In : - Parel<br>
                Mobile No. : - 8108035581<br>
                Email : - bhaskarkumbhar15@gmail.com
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                Umair Ansari
              </h2>
              <img src="umair.jpeg" alt="Error" />
              <br />
              <p class="center">
                ROll No: 6118006   Department : Information Technology
              </p>
              <p class="center">
              Lives In : - Vikhroli<br>
                Mobile No. : - 9619565040<br>
                Email : - umairansari1252@gmail.com
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                Siddhant Patodia
              </h2>
              <img src="siddhant.jpeg" alt="Error" />
              <br />
              <p class="center">
                ROll No: 6118035   Department : Information Technology
              </p>
              <p class="center">
              Lives In : - Bhayander<br>
                Mobile No. : - 8655230092<br>
                Email : - sidpatodia@gmail.com
              </p>
            </div>
            
          </div>
        </section>
      </section>
    </section>
  </body>
</html>
