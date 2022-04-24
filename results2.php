<?php
// This function calculates mass using density in kg/cubic metre and volume in cubic metres
 
  // get user input; density and volume
  $density = $_POST['density'];
  $volume = $_POST['volume'];

  // calculate the mass from density and volume;
  $mass = $density * $volume;
  $mass_rounded = number_format($mass, 2);
  
?>
<center>
 The mass would be <?php echo "$mass_rounded"; ?> 
</center>