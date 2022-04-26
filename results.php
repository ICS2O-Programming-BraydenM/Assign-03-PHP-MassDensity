<?php
// This function calculates density using mass in kg and volume in cubic metres 
 
  // get user input; mass and volume 
  $mass = $_POST['mass'];
  $volume = $_POST['volume'];

  // calculate the density from mass and volume
  $density = $mass / $volume;
  $density_rounded = number_format($density, 2);
?>
<center>
 The density would be <?php echo "$density_rounded"; ?> kg/m<sup>3</sup>
</center>