<?php

function commonMultiple($number = 1) {
  if(($number%2 === 0) && 
    ($number%3 === 0) && 
    ($number%10 === 0)) {
      echo($number);
      return $number;
    } else {
      commonMultiple($number + 1);
    }
}

commonMultiple();