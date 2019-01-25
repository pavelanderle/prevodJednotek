<?php
  function convertLength($value,$startUnit,$convUnit){
    $ration = array('mm' => 1000 , 'cm' => 10, 'm' => 1, 'km' => 0.001);
     $convValue = $value*$ration["$startUnit"]/$ration["$convUnit"];

    return $convValue;
  }
 ?>
