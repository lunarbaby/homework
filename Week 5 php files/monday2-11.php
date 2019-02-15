<?php
    // class objectClass {};
    // $primaryObject = new objectClass;
    $primaryObject = (object) [];
    $arrayOne = [];
    array_push($arrayOne, "Hi all");
    $primaryObject ->{'array'} = $arrayOne;
    array_push($arrayOne, 5);
    print_r($arrayOne);
    print_r($primaryObject);
    var_dump($arrayOne);
    var_dump($primaryObject);
?>