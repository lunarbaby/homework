<?php
 $theArray = array("hi", "Hello World", 2, 1, "I love Cats");

 $x = 0;
 $arrayCount = count($theArray);
 while($x < $arrayCount){
     if(is_string($theArray[$x]) == TRUE){
         echo "Array[$x] ";
         }
         $x++;
 }

 foreach($theArray as $value){
     
    switch ($value){
        case str_word_count($value) >= 2 :
            echo " $value";
            break;
        default: 
            break;
     }
     
 }  

 $counter = 0;
 foreach($theArray as $value){
     switch ($value){
         case str_word_count($value)>= 2:
            $counter++;
            break;
        default:
            break;
     }
 }
 echo " Counter: $counter";
?> 