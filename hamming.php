<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function hamdist($x, $y){
  for($dist = 0, $val = $x ^ $y; $val; ++$dist){ 
      $val &= $val - 1;
  }
  return $dist;
}

function hamdist_str($x, $y){
    return hamdist(bindec($x), bindec($y));
}


echo hamdist_str('GAGCCTACTAACGGGAT,CATCGTAATGACGGCCT');
