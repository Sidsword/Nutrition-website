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
    <title>FitnessForSUB-Underweight</title>
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
  <body id="patla">
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
          <h1 class="h-primary center">Body Weight Gain Tips</h1>

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
                <a href="nutrition.php">Nutrition Tips For Weight Gain</a
                >
              </h2>
              <br />
              <p class="center">
                Being underweight usually occurs when energy (kilojoule) intake is less than the energy used. In other words, you need to eat more in order to gain weight.
              </p>
<p class="center">
    The secret to healthy weight gain is to make all your kilojoules as nutrient-rich as possible. Consuming more empty-calorie foods like soft drinks and chips is not a successful way to build muscle, strengthen bones or repair tissue after surgery.
</p>
<p class="center">
    Suggestions include:<br>
Use a kilojoule-counter book to calculate how many kilojoules you eat on an average day.<br> The amount may be smaller than you think.
Eat three good meals every day.<br> Give yourself slightly larger serves if you can.
If you have a small appetite, eat five to six times a day. Drink fluids before and after meals, but not with them. This helps leave more room for food.<br>
Successful weight gain requires that you increase your daily intake of carbohydrates. Avoid low carbohydrate diets.<br>
Eating vast amounts of dietary protein won’t make your muscles grow faster and will put unnecessary pressure on your body, especially your kidneys. Avoid high-protein diets.<br>
A healthy snack may include fruit, yoghurt, muffin, rice pudding, low-fat custard, milkshake or liquid meal supplement.<br>
Avoid high-fat junk foods. Instead, choose nutritious high-fat foods such as avocado or nuts.<br>
Top your usual foods with some concentrated calories, like grated cheese. Spread peanut or almond butter on a wholegrain muffin.<br>
Prepare hot oatmeal or other cereal with milk, not water. Add powdered milk, honey, dried fruits or nuts after cooking.<br>
Garnish salads with healthy oils such as olive oil, whole olives, avocados, nuts and sunflower seeds.<br>
Pump up soups, casseroles, mashed potatoes and liquid milk with one to two tablespoons of dry milk powder.
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
                    Resistance training promotes muscle growth. Examples of resistance training include the use of free weights, weight machines, your own body weight or resistance bands. 
                </p>
  <p class="center">
      Suggestions include:<br>
      Train just two or three times per week to give your muscles time to recover. If you’re tempted to train more often, remember that muscle growth occurs during recovery.<br>Choose compound exercises that work multiple major muscle groups, for example, the squat and bench press.<br>Make your workouts short and intense rather than long and leisurely.<br>
      Don’t waste your time or money on powders, pills and products that claim to increase muscle mass. These claims are not scientifically proven.<br>
      Seek professional advice. A gym instructor, personal trainer, exercise physiologist or physiotherapist will help make sure you are doing each exercise correctly. Good advice will increase your gains and reduce your risk of injury.
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
