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
    <title>FitnessForSUB-Normal Weight</title>
    <link rel="stylesheet" href="tips.css?v=<?php echo time();?>" />
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
      <a href="Workouts.php">Workouts</a>
      <a href="nutrition.php">Nutrition</a>
      <a href="meditation.php">Meditation</a>
      <a href="contact.php">Contact Us</a>
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
    </div>

    <section id="home">
      <section id="services">
        <section id="main-container">
          <h1 class="h-primary center">Tips for Normal Weight People</h1>

          <div id="main">
            <div class="box">
              <h2 class="h-secondary center">Weight</h2>
              <p class="center">
                A person’s build depends largely on genetic factors, which is why it is difficult for a naturally thin person to put on weight. The human body can change to a limited extent through weight training and increased food intake. Gaining or regaining weight can be just as difficult as losing weight. When done in a smart, healthful way, many of the same basic principles apply to both gaining and losing weight.
              </p>
              <p class="center">  
                It is important to consult with your doctor to make sure that your weight-gaining tactics are healthy and appropriate for you.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/WwASmxrIEiI">Things that make people put on weight</a
                >
              </h2>
              <br />
              <p class="center">
                Things that can contribute to making people gain weight include:
              </p>
<p class="center">
    Eating foods that are too high in fat and sugar<br>
    Eating too much of any food (too much energy for what your body needs)<br>
    Eating large serve sizes<br>
    Drinking too much soft drink, cordial, sports and energy drinks<br>
    Drinking too much alcohol<br>
    Not doing enough physical activity<br>
    Some medications.<br> 
</p>
            </div>

            <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/oKHs_-6oR6s">Things to remember</a
                  >
                </h2>
                <br />
                <p class="center">
    Eating and drinking foods that are high in fat and sugar, eating large serves, drinking alcohol, some medications and not being very active all contribute to weight gain.<br>
    Eating fresh fruit and vegetables, legumes, lean meat, chicken and fish can help you to maintain a healthy weight.<br>
    Many foods have hidden fat and sugar.<br>
    The more active you are, the easier it will be to lose weight and stay healthy.<br>
  </p><br>
  <p class="center link">
       <a href="Workouts.php">FOR HOME WORKOUTS CLICK HERE...</a>
  </p><br>
  <p class="center link">
    <a href="nutrition.php">FOR NUTRITIONAL DISHES CLICK HERE...</a>
</p>
              </div>
          </div>
        </section>
      </section>
    </section>
  </body>
</html>
