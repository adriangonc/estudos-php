<?php

$i = 0;
while ($i <= 100) {
  if(is_prime($i)){
    echo $i . '-';
  }
  $i++;
};

function is_prime($number) {
    // 1 is not a prime number
    if ($number == 1) {
      return false;
    }
  
    // 2 is a prime number
    if ($number == 2) {
      return true;
    }
  
    // check if the number is divisible by any number between 2 and itself
    for ($i = 2; $i < $number; $i++) {
      if ($number % $i == 0) {
        return false;
      }
    }
  
    return true;
  };

?>