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
    <title>Nutrition - Non Vegetarian</title>
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
      <a href="veg.php">Vegetarian</a>
      <a href="nonveg.php" class="active">Non-Vegeterian</a>
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

    <!-- <nav id="navbar">
      <a id="logo" href="index.html">
        <img src="img/logo.JPG" alt="FitnessForSUB.com" />
      </a>
      <ul>
        <li class="item"><a href="index.html">Home</a></li>
        <li class="item"><a href="nutrition.html">Nutrition</a></li>
        <li class="item"><a href="nonveg.html">Non-Vegeterian</a></li>
        <li class="item"><a href="veg.html">Vegetarian</a></li>
        <li class="item"><a href="vegan.html">Vegan</a></li>
        <li class="item"><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav> -->

    <!-- Non-Vegitarian-->

    <section id="home">
      <section id="services">
        <section id="nutrition-container">
          <h1 class="h-primary center">Nutrition - Non Vegitarian</h1>

          <div id="nutrition">
            <div class="box">
              <h2 class="h-secondary center">Non-Vegitarian Diet Plan</h2>
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

            <!--Mutton Kola Urundai-->

            <details>
              <summary>Mutton Kola Urundai</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/hxOMNcAuo3Q" target="_blank"
                    >Mutton Kola Urundai</a
                  >
                </h2>
                <a href="https://youtu.be/hxOMNcAuo3Q" target="_blank">
                  <img
                    src="Mutton Kola Urundai.jpg"
                    alt="Mutton Kola Urundai"
                  />
                </a>
                <br /><br />
                <!-- <p class="center">
            Are u searching for something tasty, delicious also non vegetarian,
            u should go for this delicious appetizier with chopped mutton
            meat!!! Mutton Kola urundai or Minced mutton meat balls with spices
            which is deep fried in oil are served as appetizier for parties also
            goes perfect as side dish for a sunday meal..this is one of my mom's
            signature dish..which she used to prepare almost every sunday when
            we were kids...now its my kid's favourite and prepare them usually
            as appetizier for parties..last sunday we celebrated my hubby's
            birthday a bit earlier, i prepared this meat balls for appetizier..
          </p> -->
                <p class="center">
                  <b>Ingredients</b><br />
                  1/2kg Minced mutton 10nos Shallots (chopped finely) 3nos
                  Garlic cloves (crushed) 3nos Curry leaves (chopped finely)
                  2tbsp Coriander leaves 1tsp Chilli powder 1tsp Garam masala
                  powder>2tbsp Roasted channadal powder ( dhalia powder) 1tsp
                  Fennel seed 1/2tsp Coriander powder 1tsp Poppy seeds Salt Oil
                  for deep frying
                </p>
                <p class="center">
                  <b>How to make:</b><br />
                  Wash thoroughly the minced mutton meat with turmeric powder
                  and drain the water...squeeze out the excess of water...grind
                  together garam masala powder, poppyseeds, fennel seed into
                  fine powder..keep aside... In a large bowl, add the minced
                  meat, grounded spice powder, chopped shallots, crushed garlic,
                  chopped curry leaves, coriander leaves, coriander powder,
                  chilli powder, salt n roasted channadal powder and mix
                  everything with ur fingers until everything got well
                  mixed..make a golf ball size balls out of this spiced minced
                  mutton meat.. Heat the oil for deep frying, once the oil is
                  hot, drop the minced meat balls one by one n fry them until
                  they turns brown.. Serve them hot as an appetizier..
                </p>
              </div>
            </details>

            <!--Carrot Omelette-->

            <details>
              <summary>Carrot Omelette</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/C-VTb-r7zvM" target="_blank"
                    >Carrot Omelette</a
                  >
                </h2>
                <a href="https://youtu.be/C-VTb-r7zvM" target="_blank">
                  <img src="Carrot Omelette.jpg" alt="Carrot Omelette" />
                </a>
                <br /><br />
                <p class="center">
                  Carrot Omelette, easy n quick recipe..can feed easily kids who
                  doent like carrots in their menu, tasty omelette a perfect
                  side for any sort of rice...can also prepare them as sandwich
                  with toasted bread slices
                </p>
                <p class="center">
                  <b>Ingredients</b><br />
                  2nos Eggs 1no Carrot grated 1no Onion chopped 1/2tsp Red
                  chilli powder 1/4tsp Turmeric powder 5nos curry leaves Salt
                  Oil
                </p>
                <p class="center">
                  <b>How to make:</b><br />
                  Beat well the eggs with turmeric powder, salt...add the grated
                  carrots, onions, red chilli powder n curry leaves... Heat oil
                  in a pan, pour a ladle of egg n vegetable mixture to the hot
                  oil..cook both side until they get well cooked.. Easy N Tasty
                  Carrot Omelette!!!!!
                </p>
              </div>
            </details>

            <!--Prawn Fritters/Eral Bhaji-->

            <details>
              <summary>Prawn Fritters/Eral Bhaj</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/fRjol6OrgZE" target="_blank"
                    >Prawn Fritters/Eral Bhaji</a
                  >
                </h2>
                <a href="https://youtu.be/fRjol6OrgZE" target="_blank">
                  <img
                    src="prawn-fritters-cucur-udang.640x480.jpg"
                    alt="Prawn Fritters/Eral Bhaji"
                  />
                </a>
                <br /><br />
                <!-- <p class="center">
              Bhaji with prawns, thats a quick, easy as well as tasty
              appetizier,they are really simply addictive and prefect to serve
              while sudden guests visit your home..With simple ingredients, this
              prawn bhajis will be ready within few minutes.Kids will love them
              for the sure and definitely a real feast for sea food lovers like
              me. Since two days, its raining like anything and obviously we
              love to have deep fried beauties, immediately i opened my freezer
              and thawed few prawns and prepared this super crispy prawn
              bhajis.Enjoyed having this crispy fritters for our yesterday's
              evening snacks with some coffee.Sending this crispy prawn fritters
              to Usha's Seafood Feast.
            </p> -->
                <p class="center">
                  <b>Ingredients</b><br />
                  25nos Prawns (cleaned and washed with tails intact) 1/2cup
                  Gram flour 1/4cup Corn flour 1/4cup Rice flour 1/2tsp Ginger
                  garlic paste 1/2tsp Fennel seed powder 1tsp Red chilly powder
                  1/4tsp Baking powder 1/4tsp Turmeric powder Salt Oil
                </p>
                <p class="center">
                  <b>How to make:</b><br />
                  Mix the gram flour, corn flour, rice flour, ginger garlic
                  paste,fennel seed powder, red chilly powder, baking
                  powder,turmeric powder, salt, gradually add water and turn as
                  thick batter. Heat the oil for deep frying, dip the cleaned
                  prawns to the prepared batter and deep fry them until they
                  turns golden brown.. Fry them in batches and serve simply with
                  tomato ketchup.
                </p>
              </div>
            </details>

            <!-- Chicken Nuggets-->

            <details>
              <summary>Chicken Nuggets</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/njJ8FQXZmcE" target="_blank"
                    >Chicken Nuggets</a
                  >
                </h2>
                <a href="https://youtu.be/njJ8FQXZmcE" target="_blank">
                  <img src="Chicken Nuggets.webp" alt="Chicken Nuggets" />
                </a>
                <br /><br />
                <p class="center">
                  Chicken Nuggets is a paste of chicken which is coated with
                  batter n breadcrumbs..Fast-food restaurants typically deep-fry
                  their nuggets in oil. Oven baking is the usual method of
                  preparation at home...No need to go to fast food to have
                  chicken nuggets try them out at home, kids will love this n
                  easiest one to prepare
                </p>
                <p class="center">
                  <b>Ingredients</b><br />
                  1 cup Chicken breast pieces 1/2 tsp Pepper powder 1/2tsp Any
                  herbs (as ur preference its optional) 1/2cup Bread crumbs Salt
                  as per taste 3tbsp Corn flour Oil for deep frying
                </p>
                <p class="center">
                  <b>How to make:</b><br />
                  Cut the chicken breast pieces into small pieces... take a food
                  processor , add the chicken pieces, pepper powder, any herbs
                  as ur wish n salt as per ur taste n grind them well....
                  Meanwhile prepare a thin batter with corn flour n water in a
                  plate...make small balls with grounded mix.. roll them in the
                  cornflour batter n roll them well every side in bread crumbs,
                  make any shape as ur prefer...flat the nuggets well, else
                  while frying they may turn round balls...Fry as deep frying
                  until they turns brownish colour..serve them hot with ketchup,
                  barbecue sauce..
                </p>
              </div>
            </details>

            <!-- Mixed Veggies & Chicken Pulao-->

            <details>
              <summary>Mixed Veggies & Chicken Pulao</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/YtaZ3IM2qz0" target="_blank"
                    >Mixed Veggies & Chicken Pulao</a
                  >
                </h2>
                <a href="https://youtu.be/YtaZ3IM2qz0" target="_blank">
                  <img
                    src="Mixed Veggies & Chicken Pulao.jpg"
                    alt="Mixed Veggies & Chicken Pulao"
                  />
                </a>
                <br /><br />
                <!-- <p class="center">
            Our's today sunday lunch was this quick and easy breezy pulao with
            mixed veggies and marinated chicken chunks..Had a wonderful weekend
            and a lazy sunday,thats the reason i prepared this quick pulao
            instead of making briyanis or kurmas..This pulao needs hardly very
            less time and get ready very quickly when compared to briyanis or
            any other non vegetarian gravies, wat all we need is cooked basmati
            rice with coconut milk spiced with green chillies and sauteed with
            mixed veggies along with marinated chicken chunks..This dish doesnt
            even need side dish to enjoy and suits prefectly as a lunch box menu
            or for a party menu, we enjoyed it with carrot raita and we loved
            it.
          </p> -->
                <p class="center">
                  <b>Ingredients</b><br />
                  2cups Basmati rice 2cups Mixed veggies (carrots, beans, peas,
                  cabbage, capsicum) 1/2cup Chicken (boneless & chopped) 1tbsp
                  Soya sauce 1/2tsp Pepper powder 1/2tsp Red chilly powder 1tsp
                  Garam masala powder 2nos Bay leaves, cinnamon stick & cloves
                  1tsp Ginger (grated) 1no Onion (big & chopped) Few coriander
                  leaves To Grind: 1/2cup Grated coconut 2nos Green chillies
                </p>
                <p class="center">
                  <b>How to make:</b><br />
                  Grind the coconut and green chillies with a cup of luke warm
                  water and strain this spiced coconut milk (usually i go for
                  1+1/2cups of water for cooking basmati rice, make spiced
                  coconut milk as 3cups by adding enough water)..keep aside..Now
                  marinate the chopped chicken chunks with soya sauce, red
                  chilly powder, pepper powder and salt and keep aside for half
                  an hour..Wash and soak the basmati rice with already prepared
                  spiced coconut milk for 15 minutes, finally cook the rice in a
                  rice cooker... Heat a heavy bottomed pan with enough oil, fry
                  the bay leaves,cinnamon stick and cloves..add the chopped
                  onions and grated ginger, sauté for few minutes..now add the
                  marinated chicken chunks, saute for another few minutes and
                  finally add the mixed veggies and saute everything with enough
                  salt and garam masala until the veggies get half cooked in
                  simmer..now add the already cooked rice and chopped coriander
                  leaves,toss until every thing get well mixed.. Enjoy with
                  papads or any sort of raitas..
                </p>
              </div>
            </details>

            <!--  Minced Mutton Paratha /Kheema Paratha-->

            <details>
              <summary>Minced Mutton Paratha /Kheema Paratha</summary>
              <div class="box">
                <h2 class="h-secondary center">
                  <a href="https://youtu.be/2oArJfs_lW8" target="_blank"
                    >Minced Mutton Paratha /Kheema Paratha</a
                  >
                </h2>
                <a href="https://youtu.be/2oArJfs_lW8" target="_blank">
                  <img
                    src="Kheema Paratha.jpg"
                    alt=" Minced Mutton Paratha /Kheema Paratha"
                  />
                </a>
                <br /><br />
                <!-- <p class="center">
            We rarely buy mutton and dont ask me about the minced meat here.
            Actually i prepare myself the mutton minced meat at home itself as
            we dont get that much easily here apart from the minced beef or
            minced pork.My kids were pestering me since a long to prepare their
            favourite kheema paratha and finally i made them last week for our
            evening dinner. I quickly prepared this kheema and this stuffing
            doesnt need much spices especially no ginger garlic paste. Yep i
            completely skipped the ginger garlic paste and prepared quickly this
            kheema stuffing with minced meat,chopped onions,chopped coriander
            leaves,chopped green chillies,fennel seeds, garam masala and kitchen
            king masala, thats all.Your stuffing is ready,wat a quickest
            stuffing na. This kheema paratha tastes simply awesome and its
            doesnt even need any side dish to enjoy. If you are vegetarian,you
            can prepare the same stuffing with minced soya chunks,you can check
            my Soya Kheema Paratha.
          </p> -->
                <p class="center">
                  1/2kg Minced mutton meat 2nos Onion (chopped) 2nos Green
                  chillies (chopped) 1tsp Kitchen king masala (storebought one)
                  1/2tsp Garam masala powder 1/2tsp Fennel seed powder 1/4tsp
                  Turmeric powder Salt Oil Chopped coriander leaves 2cups Wheat
                  flour Warm water (for kneading) Salt
                </p>
                <p class="center">
                  Pressure the minced mutton meat with half cup of water and
                  turmeric powder upto 3 whistles. Strain the cooked water from
                  the meat and keep aside. Heat enough oil, fry the fennel seed
                  powder, add the chopped onionsnchopped green chillies and
                  saute for few minutes until the onions turns transculent. Add
                  the cooked minced meat,kitchen king masala,garam masala
                  powder,salt and cook everything in simmer until the minced
                  meat gets well coated with the masala. Add the chopped
                  coriander leaves to the kheema and put off the stove,keep
                  aside and let it cool completely. Mix the wheat flour,water
                  and salt in a bowl,knead as a soft and smooth dough(add water
                  if needed),keep aside for half an hour. Make 6-7 medium sized
                  balls.. Roll the dough as small circle,keep a small ball of
                  the already prepared kheema,close the edges of the dough,dust
                  with enough flour and roll the dough as a paratha.. Heat a
                  tawa, drop gently the paratha,drizzle few drops of oil, cook
                  the paratha until they get well cooked on both sides.. Enjoy
                  warm with your choice of side dish..
                </p>
              </div>
            </details>
          </div>
        </section>
      </section>
    </section>
  </body>
</html>
