<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    $s1 = str_split($a);
    $s2 = str_split($b);
    $dh = 0;
    for ($i = 0; $i < count($s1); $i++) 
    	if ($s1[$i] != $s2[$i]) 
    		$dh++;
    		return $dh;
    	
    
}
echo distance('10111010','01010111');

?>
