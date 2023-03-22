<?php

/**
 * Function that cleans a string to show it
 * params string $string
 * return $cleanString
 */
function cleanString($string){
    
    return  trim(ucwords(mb_strtolower($string)));

}
?>