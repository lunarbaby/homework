<?php
  function hotelvistor($hotelguest){
    $hotel = array("Jane"=>"101","Max"=>"210","Sam"=>"120","Alex"=>"212");
    $hotelguest = key($hotel);
    return "$hotelguest is at Motel6.<br>";
  }
 echo hotelvistor("212");

  function hotelroom($hotelroom){
    $hotel = array("Jane"=>"101","Max"=>"210","Sam"=>"120","Alex"=>"212");
    $hotelroom = $hotel[$hotelroom];
    return "This guest is in room ".$hotelroom.".<br>";
  }
  echo hotelroom("Sam");

$hotel = array("Jane"=>"101","Max"=>"210","Same"=>"120","Alex"=>"212");
// var_dump($hotel);
// var_dump($hotel["Jane"]);


function getnumber($guest){
    echo "This guest is in room $guest.<br>";
    return;
}
getnumber($hotel["Jane"]);

function getname($guestnumber){
    echo "$guestnumber is a guest of this hotel.<br>";
    return;
}
getname(array_search('210', $hotel));

function hotelvistor2($hotelguest){
    global $hotel;
    $hotelguest = key($hotel);
    return "$hotelguest is at Extended Stay.<br>";
}

echo hotelvistor2("212");

function hotelroom2($hotelroom){
    global $hotel;
    $hotelroom = $hotel[$hotelroom];
    return "This guest is in room ".$hotelroom.".<br>";
  }
  echo hotelroom2("Max");

 ?>