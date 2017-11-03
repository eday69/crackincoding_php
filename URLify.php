<?php

/*
 *
 * Write a method to replace all spaces in a string with '%20'
 *
 */

function URLify($str)
{
  $str=trim($str);
  $str=str_replace(" ", "%20", $str);
  return($str);
}


$example="My name is Eric Day  ";

echo "Input: $example<br>";
echo "Output: ".URLify($example);


?>
