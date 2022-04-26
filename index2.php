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
    <link rel="stylesheet" href="./css/style2.css">
  </head>

<!-- Getting text over an image --> 
  <body>
   <center>

    <div class="container">
    <img src="./images/rainforest.jpg" alt="Pounds" style="width:100%;">
    <h2 style="color:white"><font face="Times New Roman"><div class="centered">Calculating the mass from density and volume</div></h2>
    </div>

<!-- Glowing text -->
    <h1 class="glow" style="background-color:darkmagenta">~ Formula ~</h1>

<!-- Inserting an image shoing the formula for Mass -->
    <img src="./images/density-formula.png" width="800" length="900">

    <!-- Radio button -->
      <h5 style="color:teal"><font face="Times New Roman">Did you know this formula beforehand?</font></h5>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
          <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
          <span class="mdl-radio__label">Yes</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
          <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
          <span class="mdl-radio__label">No</span>
        </label>

<!-- Adding a JavaScript button that calculates mass --> 
   <form action="./results2.php" method="post" target="results">
    <h1 style="background-color:palevioletred"><font face="Garamond">Mass Program, with JS</font></h1>
    <p>
      <h3 style="background-color:moccasin"><font face="Garamond">Please enter your information:</font></h3>
      <form action="javascript:onButtonClick()">
        <label for="density">The density (kg/m<sup>3</sup>)</label>
        <input type="number" step="0.01" name="density" placeholder="Density in kilograms/metres cubed"><br><br>
         <label for="volume">The volume in m<sup>3</sup></label>
        <input type="number" step="0.01" name="volume" placeholder="Volume in cubic metres"><br><br>
        <input type="submit" value="Calculate Mass">
      </form>
    </p>
    
<!-- Adding an iframe -->
          <iframe id="results" name="results">		
		</iframe>

<!-- adding a GIF -->
      <center><img src="./images/mars.gif"></center>

<!-- Link back to home page -->
    <center><h6>
      Here is the link that will take you back to to my <a href="./index.php">Home WebPage</a>
    </h6>
   </center>
  </body>
</html>