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
    <title>FitnessForSUB-Nutrition</title>
    <link rel="stylesheet" href="nutrition.css" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 1170px)"
      href="phone.css"
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
    <!-- Navigation Menu -->

    <div class="topnav" id="myTopnav">
      <a href="welcome.php" class="fitness"> FitnessForSUB </a>
      <a href="welcome.php">Home</a>
      <a href="Workouts.php">Workouts</a>
      <div class="dropdown active">
        <button class="dropbtn" >
          Nutrition
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="vegan.php">Vegan</a>
          <a href="veg.php">Vegetarian</a>
          <a href="nonveg.php">Non-Vegeterian</a>
        </div>
      </div>
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
        <h1 class="h-primary center">Nutrition</h1>

        <div id="nutrition">
          <div class="box">
            <!-- <h2 class="h-secondary center">Diet Plan</h2> -->
            <p class="center">
              Nutrition can be defined as food at work in the body. It can also
              be defined as the process by which the organism ingests, digests,
              absorbs, transports and utilizes nutrients and disposes of their
              end-products. Nutrition is an important aspect of each
              individual’s life.
            </p>
            <p class="center">
              It is imperative to ensure that each one of us gets a balanced
              nutritional diet with all components that are needed in our stage
              of life. Hence it is important to consult a nutrition expert to
              ensure that you are on the right nutritional track.
            </p>
          </div>
          <br />

          <!-- Types Of Food -->

          <!-- <section id="nutrition-container">
          <h1 class="h-primary center">What is your type???</h1> -->

          <h2 class="h-secondary center"><a href="vegan.php">Vegan</a></h2>
          <br />
          <p class="center">
            A vegan diet involves eating only foods comprising plants. Those who
            follow this diet avoid all animal products, including meat, dairy,
            and eggs. Some people also avoid eating honey. For some, being vegan
            is a dietary choice, while for others, it is a lifestyle choice.
            People who choose to live a vegan lifestyle may also avoid clothes,
            soaps, and other products that use or contain parts of animals, such
            as leather and animal fur. Some adopt this lifestyle for its
            environmental benefits as a sustainable diet.
            <br />
            For some receipe <a href="vegan.php">Click Here</a>
          </p>
          <br />

          <h2 class="h-secondary center">
            <a href="veg.php">Vegeterian</a>
          </h2>
          <br />
          <p class="center">
            Vegetarians enjoy a diet of grains, pulses, nuts, seeds, vegetables
            and fruit with some also choosing to include dairy products,
            including cheese (made using vegetable rennet) and eggs. Studies
            suggest that a plant-based diet like this can be a healthier way to
            eat with fewer reported cases of obesity, heart disease and type 2
            diabetes. Typically, a varied vegetarian diet contains less
            saturated fat and more folate, fibre and antioxidants, plus as a
            vegetarian you’re more likely to exceed the recommended daily intake
            of fruit and vegetables.
            <br />For some receipe
            <a href="veg.php">Click Here</a>
          </p>
          <br />

          <h2 class="h-secondary center">
            <a href="nonveg.php">Non-Vegeterian</a>
          </h2>
          <br />
          <p class="center">
            A non-vegetarian diet includes chicken, meat, eggs and fish. A
            non-vegetarian diet also has several health benefits because this
            type of food is rich in protein and vitamin B. Non-vegetarian food
            strengthens our muscles and helps them grow faster. It also helps to
            maintain body stamina and hemoglobin. <br />
            For some receipe <a href="nonveg.php">Click Here</a>
          </p>
          <br />
        </div>
      </section>
    </section>
  </body>
</html>
