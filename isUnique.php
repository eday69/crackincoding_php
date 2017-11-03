<?php

/*
 *
 * Implement an algorithm to determine if a string has
 * all unique characters. What if you cannot use additional
 * data structures?
 *
 */

function validateIsUnique($str)
{
  $unique=true;
  $uniqChars=[];
  for ($i=0; $i<strlen($str)-1; $i++)
  {
    if (isset($uniqChars[$str[$i]])) {
      $unique=false;
      break;
    }
    else {
      $uniqChars[$str[$i]]=1;
    }
  }
  return($unique);
}

$example="Guadalajara";
if (validateIsUnique($example))
  echo "Word: [$example] All chars are unique !!!";
else {
  echo "Nope, word $example does not have all chars are unique !!!";
}



?>
