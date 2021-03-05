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
    <title>Nutrition - Vegetarian</title>
    <link rel="stylesheet" href="style2.css?v=<?php echo time();?>" />
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
  <body>
    <!-- Navigation Menu -->

    <div class="topnav" id="myTopnav">
      <a href="welcome.php" class="fitness"> FitnessForSUB </a>
      <a href="welcome.php">Home</a>
      <a href="nutrition.php">Nutrition</a>
      <a href="vegan.php">Vegan</a>
      <a href="veg.php" class="active">Vegetarian</a>
      <a href="nonveg.php">Non-Vegeterian</a>
      <a href="Workouts.php">Workouts</a>
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

    <!-- Vegitarian-->

    <section id="home">
      <section id="services">
        <section id="nutrition-container">
          <h1 class="h-primary center">Nutrition - Vegitarian</h1>

          <div id="nutrition">
            <div class="box">
              <h2 class="h-secondary center">Vegitarian Diet Plan</h2>
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

            <!--Curried Lentil Salad with Paneer-->

            <details>
              <summary>Curried Lentil Salad with Paneer</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/9BBPGb65Jz4" target="_blank"
                    >Curried Lentil Salad with Paneer</a
                  >
                </h2>
                <a href="https://youtu.be/9BBPGb65Jz4" target="_blank">
                  <img
                    src="Curried Lentil Salad with Paneer.jpeg"
                    alt="Curried Lentil Salad with Paneer"
                  />
                </a>
                <br /><br />

                <p class="center">
                  <b>Lentil Salad Recipe Ingredients</b><br />
                  Ready to try this lentil salad recipe? Here’s what you’ll need
                  to make it: French green lentils – Unlike regular green or
                  brown lentils, French green lentils hold their shape when
                  cooked, and they have a nice al dente bite. If you can’t find
                  French green lentils, you can substitute black Beluga lentils,
                  but any other lentil variety would be too mushy for this
                  recipe! Read more about the different types of lentils here.
                  Paneer – Cubes of roasted paneer add a rich, savory, and chewy
                  element to this salad. If you’re not familiar with paneer,
                  it’s a fresh Indian cheese. Look for it in the cheese section
                  of your grocery store. I find mine at Whole Foods! Cilantro
                  lime dressing – I blend serrano chiles into my regular
                  cilantro lime dressing to give this salad some heat. If you
                  don’t like spice, just use one pepper here, but I make mine
                  with two for extra kick! Cumin, cardamom, ginger, and garlic –
                  Mixed into a simple dressing with lemon juice, these
                  seasonings infuse the cooked lentils with delicious curry
                  flavor. Chopped spinach – It makes this lentil salad extra
                  fresh! Roasted cauliflower – It adds the perfect light crunch!
                  I toss the cauliflower with ground turmeric while it’s still
                  warm from the oven, which gives it a vibrant yellow color and
                  amps up the other curry seasonings here.
                </p>
              </div>
            </details>

            <!--Ratatouille-->

            <details>
              <summary>Ratatouille</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/RQlp-p_Qcsw" target="_blank"
                    >Ratatouille</a
                  >
                </h2>
                <a href="https://youtu.be/RQlp-p_Qcsw" target="_blank">
                  <img src="Ratatouille.jpg" alt="Ratatouille" />
                </a>
                <br /><br />

                <p class="center">
                  <b>Ratatouille Ingredients</b><br />
                  Ready to try this ratatouille recipe? Here’s what you’ll need
                  to make it: Onion and garlic – They create the stew’s
                  flavorful base. Eggplant – Any kind! Zucchini – I’ve been
                  obsessed with Italian striped zucchini (pictured above) this
                  summer, but other varieties of summer squash are also fair
                  game. Feel free to use regular zucchini, yellow squash, yellow
                  zucchini, or whatever you have on hand! Peppers – Yellow,
                  orange, and red bell peppers all taste great! I’ve had good
                  results with red pimento peppers too. Cherry tomatoes – I add
                  them in two parts. Half get really soft and saucy, while the
                  rest become tender and bursty, but still hold their shape. I
                  love this combination in the final dish! Dried oregano, fresh
                  thyme, and herbes de Provence – They add aromatic depth of
                  flavor. White wine vinegar – It makes the ratatouille tangy
                  and bright. Fresh herbs – For garnish! Basil and thyme are
                  fantastic, but I especially love ratatouille with fresh
                  oregano on top. Extra-virgin olive oil – Use it to sauté the
                  veggies first. Then, drizzle it over the finished stew for
                  extra body and richness. Red pepper flakes and salt and pepper
                  – The red pepper flakes add heat, and the salt and pepper make
                  all the flavors pop!
                </p>
              </div>
            </details>

            <!--Vegan Ranch Dressing-->

            <details>
              <summary>Vegan Ranch Dressing</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/r5YFjvq7gak" target="_blank"
                    >Vegan Ranch Dressing</a
                  >
                </h2>
                <a href="https://youtu.be/r5YFjvq7gak" target="_blank">
                  <img
                    src="Vegan Ranch Dressing.jpg"
                    alt="Vegan Ranch Dressing"
                  />
                </a>
                <br /><br />

                <p class="center">
                  <b>How to Use Vegan Ranch Dressing</b><br />
                  I love to keep this vegan ranch dressing in the fridge at all
                  times. Versatile and delicious, it’s a fun way to dress up
                  veggies, salads, sandwiches, and more. Once you have it on
                  hand, you’ll find all sorts of ways to use it. Here are a few
                  ideas to get you started: Use it as a dipping sauce. It’s
                  fantastic with fresh veggies, sweet potato fries, air fryer
                  French fries, and baked zucchini chips. Toss it with a salad.
                  Mix it with your favorite greens to create a fresh, flavorful
                  side salad, or use it in place of the dressing in my Caesar
                  salad or taco salad recipes. Drizzle it over cooked veggies. I
                  love it with grilled corn on the cob, grilled veggie skewers,
                  and grilled potatoes as well as roasted cauliflower, broccoli,
                  radishes, Brussels sprouts, and butternut squash. Dollop it
                  onto a grain bowl. Try it in this Buddha bowl or this grain
                  bowl, or build your own bowl with quinoa, brown rice, or
                  farro, fresh veggies, and a protein like tofu, tempeh,
                  lentils, or roasted chickpeas. Slather it on a burger. Spread
                  it on your hamburger bun the next time you’re eating a veggie
                  burger, black bean burger, quinoa burger, or portobello
                  mushroom burger. Top it onto tacos. It’d be great in my sweet
                  potato tacos, portobello mushroom tacos, grilled corn tacos,
                  or any of these 11 best vegetarian taco recipes.
                </p>
              </div>
            </details>

            <!-- Creamy Coleslaw-->

            <details>
              <summary>Creamy Coleslaw</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/GRhWyuOObiE" target="_blank"
                    >Creamy Coleslaw</a
                  >
                </h2>
                <a href="https://youtu.be/GRhWyuOObiE" target="_blank">
                  <img src="Creamy Coleslaw.jpg" alt="Creamy Coleslaw" />
                </a>
                <br /><br />

                <p class="center">
                  <b>Coleslaw Recipe Ingredients</b><br />
                  You only need a few basic ingredients to make this homemade
                  coleslaw recipe! I like to think of it in two parts: the
                  coleslaw mix and the dressing. To simplify this coleslaw
                  recipe, you can buy pre-shredded mix, but I like to make my
                  own. I use these basic ingredients to give it a variety of
                  colors, textures, and flavors: Cabbage – I use a mix of red
                  and green cabbage, but just one will work here too. Thinly
                  slice it with a sharp knife or mandoline. Carrots – They add
                  extra color and a light sweetness. Instead of shredding the
                  carrots on a box grater, use a vegetable peeler to slice them
                  into thin strips. Scallions – You won’t find them in packaged
                  coleslaw mix, but I love their fresh, oniony flavor and green
                  hue. That’s it for the veggies! Now, you need these
                  ingredients to make the coleslaw dressing: Mayo – Make this
                  recipe vegan by substituting store bought vegan mayo, or make
                  your own. Apple cider vinegar and Dijon mustard – They give
                  the dressing a tangy depth of flavor. Maple syrup – It
                  balances the assertive mustard and vinegar. Celery seeds –
                  These little guys give this coleslaw recipe a delicious savory
                  flavor. If you don’t have them on hand, they’re worth
                  investing in. I love them in my deviled eggs, egg salad, and
                  potato salad, too!
                </p>
              </div>
            </details>

            <!-- Okonomiyaki-->

            <details>
              <summary>Okonomiyaki</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/S3TG5eLB-rw" target="_blank"
                    >Okonomiyaki</a
                  >
                </h2>
                <a href="https://youtu.be/S3TG5eLB-rw" target="_blank">
                  <img src="Okonomiyaki.jpg" alt="Okonomiyaki" />
                </a>
                <br /><br />

                <p class="center">
                  <b
                    >Toppings Once you’ve cooked your okonomiyaki, it’s time for
                    the fun part:</b
                  ><br />
                  the toppings! In Japan, it’s traditionally topped with
                  okonomiyaki sauce, drizzles of Kewpie mayo, dried seaweed
                  flakes, and bonito flakes. At home, I like to use these
                  ingredients: Vegan Worcestershire sauce – Traditional
                  okonomiyaki sauce contains oyster sauce, so it isn’t entirely
                  vegetarian. Instead, I top mine with Annie’s vegan
                  Worcestershire sauce. It actually has a fairly similar
                  ingredient list to regular okonomiyaki sauce, but it’s
                  entirely plant-based! Its sweet umami flavor is fantastic in
                  this recipe. If you can’t find it, use a drizzle of tamari or
                  soy sauce instead. Mayo – If you can find Kewpie mayo, I
                  highly recommend using it here. It’s made with rice vinegar,
                  so it really complements the Japanese flavors in this recipe.
                  Otherwise, Sir Kensington’s is my go-to because it has great
                  flavor as well. Nori – Nori keeps for months in the pantry, so
                  I almost always have it on hand. Its umami flavor really takes
                  this recipe over the top. Pickled ginger – It adds a sweet,
                  tangy pop of flavor. Sesame seeds – Sprinkle them on top of
                  the pancake to add toasty, nutty crunch. Extra scallions and
                  microgreens – Because I can never resist topping anything with
                  fresh garnishes!
                </p>
              </div>
            </details>

            <!--   Broccoli Rice-->

            <details>
              <summary>Broccoli Rice</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/k7y1dC7RrM8" target="_blank"
                    >Broccoli Rice</a
                  >
                </h2>
                <a href="https://youtu.be/k7y1dC7RrM8" target="_blank">
                  <img src="Broccoli Rice.jpg" alt=" Broccoli Rice" />
                </a>
                <br /><br />

                <p class="center">
                  <b>How to Make Broccoli</b><br />
                  Rice Broccoli rice is SO easy to make! All you need is a head
                  of broccoli, a knife and/or vegetable peeler, and a food
                  processor. Then, follow these simple steps: First, trim the
                  stalk. Use the knife to cut away any tough, woody parts at the
                  bottom. If the skin is thick, peel it off with the vegetable
                  peeler. Next, chop the broccoli into 1-inch pieces. This step
                  is crucial! If the pieces you add to the food processor are
                  too large, they won’t process evenly. You’ll end up with a mix
                  of big chunks and mushy, over-processed broccoli. For the best
                  results, break or cut the broccoli florets and stem into
                  1-inch chunks. Then, pulse! Add the broccoli to a food
                  processor and pulse until it resembles (green) grains of rice.
                  Stop there and use it in any recipe that calls for broccoli or
                  cauliflower rice, or follow the recipe below to make my easy
                  cilantro lime broccoli rice. That’s it!
                </p>
              </div>
            </details>
          </div>
        </section>
      </section>
    </section>
  </body>
</html>
