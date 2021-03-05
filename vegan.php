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
    <title>Nutrition - Vegan</title>
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
      <a href="vegan.php" class="active">Vegan</a>
      <a href="veg.php">Vegetarian</a>
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
    <!-- Vegan-->

    <section id="home">
      <section id="services">
        <section id="nutrition-container">
          <h1 class="h-primary center">Nutrition - Vegan</h1>

          <div id="nutrition">
            <div class="box">
              <h2 class="h-secondary center">Vegan Diet Plan</h2>
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

            <!--Creamy Vegan Pasta-->

            <details>
              <summary>Creamy Vegan Pasta</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/uqL1OVdCKsg" target="_blank"
                    >Creamy Vegan Pasta</a
                  >
                </h2>
                <a href="https://youtu.be/uqL1OVdCKsg" target="_blank">
                  <img src="creamyveganpasta.jpg" alt="Creamy Vegan Pasta" />
                </a>
                <br /><br />
                <p class="center">
                  <b>Vegan Pasta Recipe Ingredients<br /></b>
                  Of course, this creamy vegan pasta sauce is totally
                  dairy-free, but it’s also different than many vegan pasta
                  sauces I make. Often, I turn to raw cashews or coconut milk in
                  these recipes, but this time, I went in a different direction.
                  Here’s what I used: White beans are the secret ingredient that
                  make this sauce thick, smooth, and creamy! They also add a
                  good amount of plant-based protein. Use canned beans, or cook
                  your own. Lemon juice brightens it up. Olive oil adds
                  richness. Nutritional yeast fills this vegan pasta with yummy
                  cheese-like flavor. Onion powder & garlic amp up the savory,
                  umami flavors in this recipe. Vegetable broth (and pasta
                  cooking water, if you like) loosens the sauce as needed.
                  Pasta. I used small shell pasta, but use what you have on
                  hand. Orecchiette, bow ties, or rigatoni would all be great.
                  Read the label on your pasta to make sure it’s vegan – most
                  dried pastas are. Broccoli and chopped up broccoli stems. This
                  recipe is a great way to use up the whole vegetable. If your
                  broccoli still has leaves attached, toss those in too! And
                  pine nuts add a delicious crunch!
                </p>
              </div>
            </details>
            <!--Veggie Fajitas-->

            <details>
              <summary>Veggie Fajitas</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/isJCQUGx8H4" target="_blank"
                    >Veggie Fajitas</a
                  >
                </h2>
                <a href="https://youtu.be/isJCQUGx8H4" target="_blank">
                  <img src="fajitas.jpg" alt="Veggie Fajitas" />
                </a>
                <br /><br />
                <p class="center">
                  Veggie Fajita Recipe Ingredients
                  <b>Ready to cook? Here’s what you’ll need:<br /></b>

                  Sweet bell peppers – I love to use a mix of colors. Red,
                  yellow, green, and orange peppers (even though they’re not
                  pictured) would be great. Red onion – For bold purple color
                  and savory flavor. Portobello mushrooms – Thanks to their
                  hearty, meaty texture, they make a delicious veggie fajita
                  recipe without any meat!
                </p>
                <p class="center">
                  You don’t need a fancy fajita seasoning mix to pack these
                  veggies with flavor! I use a simple 5-ingredient marinade.
                  It’s a lightly spicy mix of avocado oil, garlic, chili powder,
                  cumin, and sea salt. I use Simply Nature Avocado Oil here
                  because I like its neutral taste with the Tex Mex spices. In
                  addition, it’s great for grilling because it has a high smoke
                  point, so you don’t need to worry about putting it on the hot
                  grill.
                </p>
              </div>
            </details>

            <!--Easy Vegetarian Pho-->

            <details>
              <summary>Easy Vegetarian Pho</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/zdk0bF20Bj8" target="_blank"
                    >Easy Vegetarian Pho</a
                  >
                </h2>
                <a href="https://youtu.be/zdk0bF20Bj8" target="_blank">
                  <img
                    src="easy vegeterian pho.jpg"
                    alt="Easy Vegetarian Pho"
                  />
                </a>
                <br /><br />
                <p class="center">
                  <b>Vegetarian Pho Recipe Ingredients<br /></b>

                  Whole spices – I use a shorter list of spices than you’d find
                  in a traditional pho broth, but they still pack it with
                  flavor. You’ll need star anise, cinnamon sticks, whole
                  peppercorns, and cloves. Onion, ginger, and garlic – These
                  traditional pho ingredients work with the spices to make the
                  broth aromatic and flavorful. Water – I prefer to make my pho
                  broth with water instead of vegetable stock. That way, the
                  flavor of the spices really shines through. Don’t worry – the
                  broth won’t be bland at all. The spices, onion, ginger,
                  garlic, and mushrooms give it plenty of flavor. Shiitake
                  mushrooms – They give this soup delicious meaty texture and
                  rich umami flavor. Tamari or soy sauce – I use it instead of
                  the traditional fish sauce to make this recipe vegetarian. If
                  you also need it to be gluten-free, make sure to use
                  wheat-free tamari. Rice vinegar – It gives the broth a bright,
                  tangy finish. Scallions, baby bok choy, and edamame – These
                  vibrant ingredients make the soup feel light and fresh. Rice
                  noodles – I ladle the hot broth over the noodles instead of
                  adding them to the soup so that they retain a nice al dente
                  bite.
                </p>
              </div>
            </details>
            <!-- Roasted Cauliflower Salad-->

            <details>
              <summary>Roasted Cauliflower Salad</summary>

              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/zisb2_CNXLc" target="_blank"
                    >Roasted Cauliflower Salad</a
                  >
                </h2>
                <a href="https://youtu.be/zisb2_CNXLc" target="_blank">
                  <img
                    src="Roasted Cauliflower Salad.jpg"
                    alt=" Roasted Cauliflower Salad"
                  />
                </a>
                <br /><br />
                <p class="center">
                  <b>Cauliflower Salad Recipe Components<br /></b>
                  There are a few components to this recipe, all of which can be
                  made in advance unless you want your cauliflower florets
                  piping hot, in which case, you can roast that at the last
                  minute. Personally, I think this salad is delicious at room
                  temp, and I’ve also eaten it cold out of the fridge (like I
                  said above – it’s one of my favorite recipes to pack for
                  lunch. Find more here!). Here’s what’s in it: Seasoned French
                  green lentils: Be sure to use French green lentils here. They
                  have a more al dente texture than brown lentils, which, to me,
                  get too mushy for salads. And because I find plain lentils to
                  be very bland, I season them with lemon, olive oil, Dijon
                  mustard, and a good bit of sea salt and pepper. The recipe
                  below makes quite a bit more lentils than you’ll need for this
                  salad, but I like to make a big batch – they’re handy to keep
                  in the fridge for salads during the week. Also, it’s hard to
                  cook a teeny tiny pot of lentils. Bright, briny things:
                  Pickled red onion and olives (or capers) give a bright pop of
                  flavor that contrasts with the nutty roasted cauliflower.
                  Creamy tahini salad dressing: Mix together tahini, lemon
                  juice, olive oil, and sea salt… done. Something crunchy: Pine
                  nuts, sliced almonds, or if you’re nut free: pepitas.
                  Something sweet: Diced, dried apricots or dates round out the
                  nutty/earthy flavors of the cauliflower and lentils. Their
                  sweetness also balances the tartness of the bright, briny
                  things.
                </p>
              </div>
            </details>
            <!-- Kale Salad with Carrot Ginger Dressing-->

            <details>
              <summary>Kale Salad with Carrot Ginger Dressing</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/rd63ygHi5zo" target="_blank"
                    >Kale Salad with Carrot Ginger Dressing</a
                  >
                </h2>
                <a href="https://youtu.be/rd63ygHi5zo" target="_blank">
                  <img
                    src="kale salad.jpg"
                    alt="Kale Salad with Carrot Ginger Dressing"
                  />
                </a>
                <br /><br />
                <p class="center">
                  <b>How to Make A Massaged Kale Salad<br /></b>
                  The first trick to creating your kale salad is to massage the
                  kale so that the bite-sized leaves become soft and tender.
                  Here’s how to do it: Place bite-sized kale leaves into a large
                  bowl and drizzle them with lemon juice, ½ teaspoon of olive
                  oil, and a few pinches of salt. Use your hands to massage the
                  leaves until they become soft and wilted and reduce in the
                  bowl by about half. That’s it! You’re ready to assemble your
                  kale salad. Assembling Your Kale Salad I like to build kale
                  salads with a variety of flavors and textures, so I add soft
                  dried cranberries, creamy avocado, crunchy roasted chickpeas,
                  crispy pepitas, and fresh grated & sliced vegetables to this
                  kale salad recipe. Layer everything in (this is your
                  Insta-worthy moment!) then toss and douse it all with the
                  carrot ginger dressing. Serve the salad right away, or pack it
                  up for lunches throughout the week. It can be stored dressed
                  since kale leaves are so sturdy. If you’re packing this for
                  multiple days, I would keep the avocado separate and add it to
                  the salad before you leave for work. See this post for more of
                  my best meal prep tips and this one for more lunch ideas. Kale
                  Salad Variations Add a sprinkle of feta cheese for a salty,
                  tangy bite. I use raw beet in this recipe, but a few sliced
                  roasted beets would be delicious instead. If you’re not a fan
                  of chickpeas, try adding baked tempeh, tofu, or lentils for
                  protein. Bulk up the salad by mixing in a grain like quinoa or
                  farro. Switch up your dressing – turmeric tahini sauce, cashew
                  cream, or scoops of pesto would be yummy alternatives to the
                  carrot ginger dressing.
                </p>
              </div>
            </details>
            <!--   Best Guacamole-->

            <details>
              <summary>Best Guacamole</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/-mHfm9FGmGI" target="_blank">
                    Best Guacamole</a
                  >
                </h2>
                <a href="https://youtu.be/-mHfm9FGmGI" target="_blank">
                  <img src="Best Guacamole.jpg" alt=" Best Guacamole" />
                </a>
                <br /><br />
                <p class="center">
                  <b>How to Make Guacamole<br /></b>
                  Start by dicing your mix-ins – the best guacamole I know uses
                  red onion, cilantro, and jalapeño for a little heat. Next,
                  zest one lime, and juice two. Now you’re ready for the key
                  ingredient: avocados! Slice three in half lengthwise, making
                  one long, oval-shaped cut around the pit. Separate the halves
                  and remove and discard the pits. Without cutting through the
                  peels, score the avocado flesh into a grid with a knife. Scoop
                  it out of the peels and into a bowl along with the onion,
                  cilantro, jalapeño, lime juice & zest, and salt. Mash and stir
                  everything together, until the components are well combined
                  but the avocado retains a slightly chunky texture. Get out the
                  chips, and dig in!
                </p>
              </div>
            </details>
          </div>
        </section>
      </section>
    </section>
  </body>
</html>
