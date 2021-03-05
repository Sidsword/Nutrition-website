

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitnessForSUB</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 1170px)"
      href="phonework.css?v=<?php echo time();?>"
    />

    <script type="text/javascript">
      function BMI() {
        var h = document.getElementById("h").value;
        var w = document.getElementById("w").value;
        var bmi = w / (((h / 100) * h) / 100);
        var bmio = bmi.toFixed(2);

        document.getElementById("result").innerHTML = "Your BMI is " + bmio;
      }
    </script>

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
      <a href="welcome.php" class="active">Home</a>
      <a href="Workouts.php">Workouts</a>
      <a href="nutrition.php">Nutrition</a>
      <a href="meditation.php">Meditation</a>
      <a href="contact.php">Contact Us</a>
    
      <a href="aboutus.php">About Us</a>
     
      <a
        href="javascript:void(0);"
        style="font-size: 15px"
        class="icon"
        onclick="myFunction()"
        >&#9776;</a
      >
    </div>
   
    <!-- Welcome -->
      <div>
    <section id="home">
      <div id="sign" class="h-primary">
        <span class="fast-flicker">F</span>ITN<span class="flicker">E</span
        >SS&nbsp;<span class="fast-flicker">F</span>OR<span class="flicker"
          >&nbsp;SU</span
        >B
      </div>
      <div>
      <p style="margin-top:-6%">
        “If you don’t make time for exercise, you’ll probably have to make time
        for illness.”
      </p>
      <p>Eat.Exercise.Sleep.Repeat.</p></div>
    </section>
</div>
    <!-- Benefits Section Starts Here -->

    <section id="hom">
      <section id="services-container">
        <h1 class="h-primary center">Why FitnessForSUB?</h1>

        <div id="services">
          <div class="box">
            <details>
              <summary>
                <h2 class="h-secondary center">
                  How lockdown has affect on our health?
                </h2>
              </summary>
              <p class="center">
                The lockdown applied to three main areas: physical movement out
                of the home, social distancing when outside the home, and
                restricted availability of most public services while sparing
                essential services. There was a sudden and drastic alteration in
                the daily routine, with many millions stranded in boarding
                houses and rental apartments, without work and far from home.
              </p>
            </details>
          </div>

          <div class="box">
            <details>
              <summary>
                <h2 class="h-secondary center">Why to take care of Health?</h2>
              </summary>
              <p class="center">
                Health problems, even minor ones, can interfere with or even
                overshadow other aspects of your life. Even relatively minor
                health issues such as aches, pains, lethargy, and indigestion
                take a toll on your happiness and stress levels. One way to
                improve your ability to cope with stress and feel better is to
                make a commitment to healthier habits. Poor health habits can
                add stress to your life and also play a role in how well you are
                able to cope with stress. The stress that comes from poor health
                is significant. Health challenges also affect other areas of
                your life. Health problems can make daily tasks more
                challenging, create financial stress, and even jeopardize your
                ability to earn a living. Stress itself can exacerbate health
                issues from the common cold to more serious conditions and
                diseases,so maintaining healthy habits can pay off in the long
                run.
              </p>
            </details>
          </div>

          <div class="box">
            <details>
              <summary>
                <h2 class="h-secondary center">
                  Why taking care of our body necessary in 21st century?
                </h2>
              </summary>
              <p class="center">
                1. Exercise controls weight 2. Exercise combats health
                conditions and diseases 3. Exercise improves mood 4. Exercise
                boosts energy 5. Exercise promotes better sleep 6. Exercise puts
                the spark back into your sex life 7. Exercise can be fun … and
                social!
              </p>
            </details>
          </div>
        </div>

        <!-- Calculator Section starts Here -->
        <section id="client-section">
          <section id="calculatorc,-container">
            <h1 class="h-primary center">Our Fitness Calculator</h1>
            <div id="calculator">
              <div class="box">
                <h2>BMI Calculator</h2>
                <p class="text">Height(in cm)</p>
                <input type="text" id="h" />
                <p class="text">Weight(in kg)</p>
                <input type="text" id="w" />
                <p id="result"></p>
                <button id="hw" onClick="BMI()">Calculate</button>
                <p id="info">A healthy BMI ranges between 19 and 25.</p>
                <p class="text">Weight(in kg)</p>
                <br>
                <span>
                <a href="patla.php">If your BMI value is less than 19....Click Here...</a><br>
                <a href="normal.php">If your BMI value is between 19 to 25....Click Here...</a><br>
                <a href="motya.php">If your BMI value is more than 25....Click Here...</a>
                </span>
              </div>
            </div>
            <!--End of div id=calculator-->
          </section>

          <h2 class="h-secondary center">
            <a href="nutrition.php">Nutrition</a>
          </h2>
          <p class="center">
            Nutrition can be defined as food at work in the body. It can also be
            defined as the process by which the organism ingests, digests,
            absorbs, transports and utilizes nutrients and disposes of their
            end-products. Nutrition is an important aspect of each individual’s
            life. It is imperative to ensure that each one of us gets a balanced
            nutritional diet with all components that are needed in our stage of
            life. Hence it is important to consult a nutrition expert to ensure
            that you are on the right nutritional track.
          </p>
          <br />
          <h2 class="h-secondary center">
            <a href="Workouts.php">Importance of Exercise</a>
          </h2>
          <p class="center">
            When life gets busy, it can put a strain on your fitness. Instead of
            skipping exercise altogether, take just 10 minutes out of your day
            to do an effective workout and help you feel a lot better. The truth
            is you can actually get a great workout in a short amount of time!
            But it has to be done correctly: You need the right exercises with
            the right format to crank up your metabolism, boost your fat loss
            and build lean muscle.
          </p>
          <br /><br />
        </section>
      </section>
    </section>
  </body>
</html>
