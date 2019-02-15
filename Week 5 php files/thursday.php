<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Favorite Color: <input type="text" name="color">
    Favorite State: <input type="text" name="state">
    Word Changer: <input type="text" name="word">
    <input type="submit">   
  </form>
 
 
 <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $color = $_REQUEST['color'];
    $state = $_REQUEST['state'];
    $word = $_REQUEST['word'];
    if ($color){
      echo "My favorite color is $color.<br>";
    } else {
      echo "I have no favorite color.<br>";
    }
    if ($state){
      echo "My favorite state is $state.<br>";
    } else {
      echo "I have no favorite state.<br>";
    }
    if ($word){
      $word = strrev($word);
      echo $word;
    } else {
      echo "No word to reverse.";
    }
  }
    
 ?>