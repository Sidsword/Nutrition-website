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
    <title>FitnessForSUB-Overweight</title>
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
  <body id="motya"> 
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
          <h1 class="h-primary center">Body Weight Loss Tips</h1>

          <div id="main">
            <div class="box">
              <h2 class="h-secondary center">Obesity</h2>
              <p class="center">
                Obesity increases the risk of many diseases. Fat accumulates in our bodies when the energy (kilojoules) we consume from food and drink is greater than the energy we use in activities and at rest. Consuming even slightly more energy than you use, over long periods of time, can cause you to become overweight or obese.
              </p>
              <p class="center">           
Obesity and non-communicable diseases such as heart disease, cancer and diabetes are now the world’s biggest killers. They cause an estimated 41 million deaths each year – that’s 71% of all deaths globally. 
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="nutrition.php">Nutrition Tips For Weight Loss</a
                >
              </h2>
              <br />
              <p class="center">
                Losing and maintaining weight is a life-long commitment to a healthy lifestyle. Don’t change everything at once – a few small tweaks to your diet and movement in the beginning can make a big difference.
              </p>
<p class="center">
    You can lose body fat by making these few easy changes to your eating habits: 
</p>
<p class="center">
    Avoid crash and fad diets to reduce your risk of yoyo dieting.<br>
Try to eat a wide variety of foods from all five food groups from the Australian Guide to Healthy Eating).<br>
Increase your fruit and vegetable intake – particularly vegetables, most are low in kilojoules and contain fibre, which helps you feel full. <br>
Be mindful of the portions of foods and drinks you’re consuming – the bigger the serve, the more energy it contains. <br>
Reduce your intake of foods that are high in added fat, saturated fat, sugar and salt. <br>
Make soft drinks, lollies, snack foods and alcoholic drinks an occasional 'extra'. <br>
Most adults should eat no more than one or two 'treats' a day. If you are overweight or inactive, you may need to limit treats to less than one a day.<br>
How many standard drinks are you having during the week?<br>
Try to balance an 'extra' food with extra exercise. The more energy you burn, the more treats you can afford to have. Remember, you should only add extra foods after you have covered your nutrient needs with choices from the healthier food groups.<br>
Don't eliminate any food group. Instead, choose from a wide range of foods every day and choose 'whole', less-processed foods. <br>
Have a regular pattern of eating and stick to it.<br>
Replace sugary drinks with water.<br>
Avoid using food for comfort, such as when you are upset, angry or stressed. Explore other healthy ways to cope with these feelings, (such as going for a walk, reading a book, having a bath or listening to music). <br>
Look at the facts – for instance, although it might be easy to eat a family-sized block of chocolate in one sitting, it will take 2.5 hours of jogging (or over 6 hours of walking) to burn off the energy it contains!<br>
</p><br>
<p class="center link">
     <a href="nutrition.php">FOR NUTRITIONAL DISHES CLICK HERE...</a>
</p>
            </div>

            <div class="box">
                <h2 class="h-secondary center">
                  <a href="Workouts.php">Exercise Tips</a
                  >
                </h2>
                <br />
                <p class="center">
                    Although we may make excuses such as being too busy or tired, remember, physical activity does not have to be overly strenuous. <br>

                    Even moderate amounts of physical activity of about 30 minutes a day can speed up our metabolic rate and help us lose weight. We may also find ourselves less tired and have more energy to do the things we enjoy. <br>  
                    
                    When starting out, take it slowly. You can increase your activity levels by simply increasing movement throughout the day. The human body is designed for movement and any physical activity brings benefits. <br>
                </p>
  <p class="center">
      Suggestions include:<br>
      Incorporate moderate intensity activities into your day – (go for a walk, do some gardening or mow the lawn). <br>
If you drive to work, walk or ride your bike.<br>
If you need to drive, try to include some movement into your day. Park further away or take public transport.<br>
While at work, speak to your colleagues in person rather than emailing them. <br>
If you spend most of the day sitting at work, get a stand-up desk or hold stand up meetings. Go for a walk at lunchtime. <br>
When shopping, park further away.<br>
Play a sport or do an activity you enjoy.<br>
Walk instead of taking the car on short trips.<br>
Get off the train, bus or tram one stop early and walk the rest of the way.<br>
Play more outdoor games with your family and friends.<br>
Walk the dog.<br>
Take stairs instead of lifts.<br>
Choose fun activities, rather than those you think are good for you. This gives you a greater chance at sticking with them.<br> 
Be creative – take up an activity you enjoyed as a child. <br>
  </p><br>
  <p class="center link">
       <a href="Workouts.php">FOR HOME WORKOUTS CLICK HERE...</a>
  </p>
              </div>
          </div>
        </section>
      </section>
    </section>
  </body>
</html>
