<!DOCTYPE html>
<html lang="en-ca">
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My third Assignment">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- To use Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-pink.min.css" />
    <title>Assignment 3</title>
    
<!-- Link to CSS sheet -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Second webpage</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="https://assign-03-php-massdensity.braydenmacmill1.repl.co/index2.php">Mass</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
  </main>
</div>
<!-- Getting text over an image --> 
    <div class="container">
    <img src="./images/steve.jpg" alt="Density" style="width:100%;">
    <h2 style="color:black"><font face="Times New Roman"><div class="centered">Calculating the density from volume and mass</div></h2>
    </div>

<!-- Slider with Starting Value -->
			<center><h4 style="color:purple">Do you know how to calculate density?</h4></center>
			<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="25" tabindex="0">

<!-- Glowing text -->
    <h1 class="glow" style="background-color:darkred">~ Formula ~</h1>

<!-- Inserting an image shoing the formula for Density -->
    <center><img src="./images/density-formula.png" width="800" length="900"></center>

<!-- Adding a JavaScript button that calculates density--> 
   <form action="./results.php" method="post" target="results">
  <center>
    <?php
     echo "<h1>Density Program, with PHP</h1>";
     ?>
    <p>
    <?php
     echo "<h3>Please enter your information:</h3>";
    ?>
      <form action="javascript:onButtonClick()">
        <label for="weight">The mass in kg</label>
        <input type="number" step="0.01" name="mass" placeholder="Mass in kilograms"><br><br>
         <label for="volume">The volume in m<sup>3</sup></label>
        <input type="number" step="0.01" name="volume" placeholder="Volume in cubic metres"><br><br>
        <input type="submit" value="Calculate Density">
      </form>
    </p>
  </center>

<!-- Adding an iframe -->
          <center><iframe id="results" name="results">		
		</iframe></center>
		
<!-- Adding a MDL button -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
      function myButtonClicked() {
        alert("Density is quite boring in my opinion.")
      }
    </script>

<!-- Colored raised button -->
	<center>
    <button onclick="myButtonClicked()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
		  A message!
		</button>
  </center>
		<br></br>

<!-- A table -->
  <center>
    <?php
    echo "<h2>Densities of different liquids</h2>";
    ?>
    <?php
    echo "<h6>This table shows you what the different density levels of various liquids are</h6>";
    ?>
 <table border="1">
          <tr>
            <th>Water</th>
            <th>Chloride</th>
            <th>Coconut oil</th>
            <th>Natural gasoline</th>
            <th>Alcohol, methanol</th>
          </tr>
          <tr>
            <td>997 kg/m<sup>3</sup></td>
            <td>1560 kg/m<sup>3</sup></td>
            <td>924 kg/m<sup>3</sup></td>
            <td>711 kg/m<sup>3</sup></td>
            <td>786.5 kg/m<sup>3</sup></td>
          </tr>
         </table>
  </center>

<!-- An ordered list -->
<center>
  <?php
  echo "<h2>~ The densest cities (pop/mi<sup>2</sup>) ~</h2>";
  ?>
  <ol>
    <li>Manila, Philippines (119,600/mi<sup>2</sup>)</li>
    <li>Pateros, Philippines (94,400/mi<sup>2</sup>)</li>
    <li>Mandaluyong, Philippines (90,460/mi<sup>2</sup>)</li>
    <li>Baghdad, Iraq (85,140/mi<sup>2</sup>)</li>
    <li>Mumbai, India (83,660/mi<sup>2</sup>)</li>
    <li>Dhaka, Bangladesh (75,290/mi<sup>2</sup>)</li>
    <li>Caloocan, Philippines (72,490/mi<sup>2</sup>)</li>
    <li>Port-au-Prince, Haiti (70,950/mi<sup>2</sup>)</li>
  </ol>
</center>

<!-- Adding an image -->
    <center><img src="./images/densestcities.webp" alt="Dense" width="800" length="900"></center>
  </body>
</html>