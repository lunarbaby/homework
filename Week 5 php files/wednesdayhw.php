<?php
  $ourArray = ["jumpin" => "candy", "kiddy" => 2, "birdie" => 3];
  function arrayRun ($position, $ourArray){
    return $ourArray[$position];
  }

  echo arrayRun("jumpin", $ourArray);
  echo arrayRun("jumpin", $ourArray);
  echo arrayRun("kiddy", $ourArray);
 ?>