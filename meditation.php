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
    <title>FitnessForSUB-Meditation</title>
    <link rel="stylesheet" href="style4.css?v=<?php echo time();?>" />
    <link
    rel="stylesheet"
    media="screen and (max-width: 1170px)"
    href="phone.css?v=<?php echo time();?>"
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
  <body id="meditation">
    <div class="topnav" id="myTopnav">
      <a href="welcome.php" class="fitness"> FitnessForSUB </a>
      <a href="welcome.php">Home</a>
      <a href="Workouts.php">Workouts</a>
      <a href="nutrition.php">Nutrition</a>
      <a href="meditation.php" class="active">Meditation</a>
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
    <section id="main-container">
      <section id="services">
      <div id="main">
        <div class="box">
          <h2 class="h-secondary center">Importance...</h2>
          <p class="center">
            Meditation is a practice where an individual uses a technique – such
            as mindfulness, or focusing the mind on a particular object,
            thought, or activity – to train attention and awareness, and achieve
            a mentally clear and emotionally calm and stable state.
            
          </p>
        </div>

        <div class="box">
          <h2 class="h-secondary center">
            <a
              href="https://www.youtube.com/watch?v=DZbk6HhF7GE"
              target="_blank"
              >How to Meditate</a
            >
          </h2>

          <p>
            Meditation is simpler (and harder) than most people think. Read
            these steps, make sure you’re somewhere where you can relax into
            this process, set a timer, and give it a shot:<br />
            <b>1) Take a seat</b>
            <br />Find a place to sit that feels calm and quiet to you. <br />
            <b>2) Set a time limit</b>
            <br />If you’re just beginning, it can help to choose a short time,
            such as five or 10 minutes. <br />
            <b>3) Notice your body</b>
            <br />You can sit in a chair with your feet on the floor, you can
            sit loosely cross-legged, you can kneel—all are fine. Just make sure
            you are stable and in a position you can stay in for a while.<br />
            <b>4) Feel your breath</b>
            <br />Follow the sensation of your breath as it goes in and as it
            goes out.<br />
            <b>5) Notice when your mind has wandered</b>
            <br />Inevitably, your attention will leave the breath and wander to
            other places. When you get around to noticing that your mind has
            wandered—in a few seconds, a minute, five minutes—simply return your
            attention to the breath. <br />
            <b>6) Be kind to your wandering mind</b>
            <br />Don’t judge yourself or obsess over the content of the
            thoughts you find yourself lost in. Just come back.<br />
            <b>7) Close with kindness1</b>
            <br />
            When you’re ready, gently lift your gaze (if your eyes are closed,
            open them). Take a moment and notice any sounds in the environment.
            Notice how your body feels right now. Notice your thoughts and
            emotions.
          </p>
        </div>
      </div>
    </section>
  </section>
</section>
  </body>
</html>
