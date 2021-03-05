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
    <title>FitnessForSUB-Workouts</title>
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
  </head>
  <body id="workout">
    <div class="topnav" id="myTopnav">
    <a href="welcome.php" class="fitness"> FitnessForSUB </a>
      <a href="welcome.php">Home</a>
      <a href="Workouts.php" class="active">Workouts</a>
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
          <h1 class="h-primary center">Home Workouts without Gym Equipments</h1>

          <div id="main">
            <div class="box">
              <h2 class="h-secondary center">Importance...</h2>
              <p class="center">
                When life gets busy, it can put a strain on your fitness.
                Instead of skipping exercise altogether, take just 10 minutes
                out of your day to do an effective workout and help you feel a
                lot better.
              </p>
              <p class="center">
                The truth is you can actually get a great workout in a short
                amount of time! But it has to be done correctly: You need the
                right exercises with the right format to crank up your
                metabolism, boost your fat loss and build lean muscle.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/K3vgNL2OFI8" target="_blank"
                  >Reverse Lunges</a
                >
              </h2>
              <a href="https://youtu.be/K3vgNL2OFI8" target="_blank">
                <img src="Reverse-Lunge.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Reverse lunges help strengthen your thighs and hips. They’re
                simple and target each leg individually for more balance and
                stability.
              </p>
              <p class="center">
                Stand with your feet hip-width apart. Take a long step
                back — so your knees make two 90-degree angles at the bottom —
                and pull yourself back up with your forward leg. Start without
                dumbbells and advance to dumbbells or a barbell in either the
                back squat or front squat position.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/2G5XluLSUhM" target="_blank"
                  >Lateral Split Squats</a
                >
              </h2>
              <a href="https://youtu.be/2G5XluLSUhM" target="_blank">
                <img src="lateralsquats.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Doing your squats side-to-side, you can build more strength
                in each leg than with regular squats while also targeting
                different muscles.
              </p>
              <p class="center">
                 Start with a very wide stance and your feet straight.
                Sit back into one hip and push that knee out. Repeat on the
                other side.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/IODxDxX7oi4" target="_blank"
                  >Push Ups</a
                >
              </h2>
              <a href="https://youtu.be/IODxDxX7oi4" target="_blank">
                <img src="Pushup-1.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                This is the best bodyweight exercise for your upper body: It
                builds a strong chest, shoulders, arms and abs.
              </p>
              <p class="center">
                Get in a pushup position with your hands about
                shoulder-width apart.<br />
                Keep your lower back flat and don’t let your hips sag. Lower
                yourself and keep your elbows close to your body as you descend.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/MiVHq0EM234" target="_blank"
                  >Hip Bridges</a
                >
              </h2>
              <a href="https://youtu.be/MiVHq0EM234" target="_blank">
                <img src="Hip-Bridge-1.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Want strong legs and a nice-looking backside? Look no further
                than hip bridges! They’re a simple way to strengthen your glutes
                and can even help release lower-back tension.
              </p>
              <p class="center">
               Lie on the ground with your knees bent and feet flat
                on the floor. Drive through your heels and squeeze your glutes
                to push your hips up. Repeat. Do not use your lower back to pull
                yourself up.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/nmwgirgXLYM" target="_blank"
                  >Mountain Climbers</a
                >
              </h2>
              <a href="https://youtu.be/nmwgirgXLYM" target="_blank">
                <img src="Mountain-Climbers-updated.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Spike your heart rate, burn extra calories and fire up your
                metabolism with this great cardio exercise. It looks simple, but
                in just a few seconds, you’ll feel it!
              </p>
              <p class="center">
                The move: Get into a pushup position. Keep your core tight and
                run as fast as you can while driving your knees to your chest.
                Don’t let your hips rise; keep them at the same height as when
                you started.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/vKaLCCNxMho" target="_blank"
                  >T-Pushups</a
                >
              </h2>
              <a href="https://youtu.be/vKaLCCNxMho" target="_blank">
                <img src="T-Pushups.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Holding a strong plank position, lower your chest to 3–5 inches
                off the floor and return to a plank position. Rotate one hand
                toward the sky and hold a brief side plank. Repeat and rotate
                onto the other hand during the next rep. To modify, do the
                pushup on your knees, followed by a high plank and rotation.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/-YpR9cNjLu0" target="_blank"
                  >Floor-Y Raise</a
                >
              </h2>
              <a href="https://youtu.be/-YpR9cNjLu0" target="_blank">
                <img src="Floor Y raise.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Begin by lying prone with your toes pointed and relaxed on the
                floor, and arms extended overhead, palms facing one another.
                Exhale, pull your shoulders down and back, and elevate your arms
                in a “Y” position. Gently lower down and repeat.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/6kALZikXxLc" target="_blank"
                  >Triceps Dips</a
                >
              </h2>
              <a href="https://youtu.be/6kALZikXxLc" target="_blank">
                <img src="Tricep-Dip.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Find an elevated bench or step. Sit on it with your hands
                aligned just to the outside your hips. Gently slide your hips
                forward, bend both elbows to 90 degrees, and return to the
                starting position. The further your feet are away from the
                bench/step, the harder the exercise is.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/PdQ746fBJt4" target="_blank"
                  >Plank Walkdown</a
                >
              </h2>
              <a href="https://youtu.be/PdQ746fBJt4" target="_blank">
                <img src="Plank-Walkdown.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Begin in a hand plank position. With a minimal wiggle, lower
                your right forearm to the ground, followed by your left. Return
                to the top by pressing back up to the right hand then the left.
                On the next rep, lead with the left side. To modify, you can do
                this move from your knees.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/qLBImHhCXSw" target="_blank"
                  >Burpee</a
                >
              </h2>
              <a href="https://youtu.be/qLBImHhCXSw" target="_blank">
                <img src="Burpee.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Begin in a tight, active plank position on the ground. Keeping
                your body in a straight line, lower down, and press through the
                floor to complete a pushup. Immediately snap your feet under
                your body to land in a perfect squat position. While driving
                your arms up to the ceiling, press your feet through the floor
                and engage through the glutes as you leave the ground for your
                jump. Hinge the hips back, place your hands on the floor and hop
                back into an active plank. To reduce the intensity, step back to
                a plank and step up to the squat rather than jumping from plank
                to squat. Also, you can remove the jump portion of the burpee.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/QT1rXDK8tco" target="_blank"
                  >Single-Leg Deadlift to Knee Drive</a
                >
              </h2>
              <a href="https://youtu.be/QT1rXDK8tco" target="_blank">
                <img
                  src="22-Single-Leg-Deadlift-to-Knee-Drive.gif"
                  alt="Error"
                />
              </a>
              <br />
              <p class="center">
                Balance on one foot. Hinge at the hips and extend your arms out
                in front, maintaining a neutral spine and balance between reps
                (Don’t sit down unless you have to!). As you return, drive your
                extended knee up and in toward your chest while simultaneously
                standing upright. Add weights to up the intensity.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/rvqLVxYqEvo" target="_blank">
                  Alternating Lateral Lunges</a
                >
              </h2>
              <a href="https://youtu.be/rvqLVxYqEvo" target="_blank">
                <img src="Alternating-Lateral-Lunges.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Begin with your feet together and standing upright. Step wider
                than hip-width apart with your right leg, keeping the toes of
                your right foot pointed forward as you land. Immediately upon
                coming in contact with the floor, bend at the knee and sink your
                right hip down and back. Press back to the starting position and
                repeat on the other side.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/jNXZ3xjzaXI" target="_blank">
                  Forward Lunge With Rotation</a
                >
              </h2>
              <a href="https://youtu.be/jNXZ3xjzaXI" target="_blank">
                <img src="21-Forward-Lunge-with-Rotation.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Step forward with your right leg and lower both knees to 90
                degrees. In this position, your back knee should be about 2
                inches off of the floor. Brace your core and hips, extend your
                arms in front and rotate toward the right. Return and step back
                to the starting position. Repeat on the left side.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/oDTK8wnBAaA" target="_blank">
                  Lateral Skater Leaps</a
                >
              </h2>
              <a href="https://youtu.be/oDTK8wnBAaA" target="_blank">
                <img src="Lateral-Skater-Jumps.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Standing on the left leg, leap laterally to the right,
                immediately bending at the knee and hip to absorb the landing.
                Simultaneously reach the left leg behind and tap it to the floor
                for stability. Repeat by pressing off the right leg and landing
                on the left. You can also remove the jump and simply step and
                curtsy to each side.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/U4s4mEQ5VqU" target="_blank">
                  Squat Jumps</a
                >
              </h2>
              <a href="https://youtu.be/U4s4mEQ5VqU" target="_blank">
                <img src="Squat-Jumps.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Begin with your feet slightly wider than shoulder-width apart.
                Drive your arms back, and sink your hips down and back.
                Simultaneously press through the floor, drive your arms up and
                jump off of the ground. Immediately absorb the landing by
                bending at the knees, hips, and ankles upon impact, ending in
                the squat position. Remember, the jump can be optional.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/Pc-ylOVKc-E" target="_blank"
                  >Front Plank With Arm Reaches</a
                >
              </h2>
              <a href="https://youtu.be/Pc-ylOVKc-E" target="_blank">
                <img src="Plank-With-Reach.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                With your forearms on the ground and elbows directly under your
                shoulders, brace every muscle of your body (especially those
                glutes!) and hold a perfectly straight line. Slide your right
                hand out in front of your body, return, then repeat with the
                left hand. Ensure there is no rotation or other movement with
                the plank.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/ZZkgopVBPMg" target="_blank"
                  >Side Plank With Leg Raises</a
                >
              </h2>
              <a href="https://youtu.be/ZZkgopVBPMg" target="_blank">
                <img src="03-side-plank-leg-raise.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Line your elbow up with your shoulder and your shoulder with
                your hip and heel. With a very tight and braced core, push the
                ground away from you, staying active in the shoulder joint.
                Squeeze your glutes and drive your hips forward. While holding a
                strong, straight active plank, lift your top leg up about 6
                inches and slightly back to engage the glutes. Lower and return.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/cc6UVRS7PW4" target="_blank"
                  >Superman</a
                >
              </h2>
              <a href="https://youtu.be/cc6UVRS7PW4" target="_blank">
                <img src="Superman.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                Begin by lying on your stomach with your body long, arms
                overhead and toes pointed. Squeeze the glutes and lift your arms
                and legs off of the floor. Lower back down to almost touching,
                and repeat, arching back up into position. To make it easier,
                lift your opposite arm and leg together, rather than everything
                at once.
              </p>
            </div>

            <div class="box">
              <h2 class="h-secondary center">
                <a href="https://youtu.be/9FGilxCbdz8" target="_blank"
                  >Bicycles</a
                >
              </h2>
              <a href="https://youtu.be/9FGilxCbdz8" target="_blank">
                <img src="Bicycles.gif" alt="Error" />
              </a>
              <br />
              <p class="center">
                With your head resting in your hands, begin by bringing the
                right elbow and left knee toward one another while extending the
                right leg long. Repeat on the other side all while keeping your
                shoulders off of the ground as high as possible.
              </p>
            </div>
          </div>
        </section>
      </section>
    </section>
  </body>
</html>
