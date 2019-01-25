<?php
  function convertLength($value,$startUnit,$convUnit){
    $ration = array('mm' => 0.001 , 'cm' => 0.01, 'm' => 1, 'km' => 1000);
     $convValue = $value*$ration["$convUnit"]/$ration["$startUnit"];

    return $convValue;
  }
 ?>
