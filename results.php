<?php
// This function calculates density using mass in kg and volume in cubic metres 
 
  // get user input; mass and volume 
  $mass = $_POST['mass'];
  $volume = $_POST['volume'];

  // calculate the density from mass and volume
  $density = $mass / $volume;
  $density_rounded = number_format($density, 2);

  if ($density > 997) {
     echo "The density is " . $density_rounded . "kg/m<sup>3</sup> <br>This liquid is considered dense";
  }

  else {
    echo "The density would be " . $density_rounded . "kg/m<sup>3</sup>.";
  }
?>
