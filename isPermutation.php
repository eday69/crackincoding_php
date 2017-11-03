<?php

/*
 *
 * Given two strings, write a method to decide if one is a
 * permutation of the other
 *
 */

function isPermutation($str1, $str2)
{
  $isPermute = true;
  $str1=strtolower($str1);
  $str2=strtolower($str2);

  if (strlen($str1) == strlen($str2))
  {
    for ($i=0; $i<strlen($str1)-1; $i++)
      isset($cstr1[$str1[$i]])?$cstr1[$str1[$i]]+=1:$cstr1[$str1[$i]]=1;
    for ($i=0; $i<strlen($str2)-1; $i++)
      isset($cstr2[$str2[$i]])?$cstr2[$str2[$i]]+=1:$cstr2[$str2[$i]]=1;
    foreach($cstr1 as $key=>$value)
    {
      if (isset($cstr2[$key]))
      {
        if ($cstr2[$key] != $value)
        {
          $isPermute = false;
          break;
        }
      }
      else
      {
        $isPermute = false;
        break;
      }
    }
  }
  else {
    $isPermute = false;
  }

  return($isPermute);
}


$example1="Guadalajara";
$example2="dalrgjuaara";
if (isPermutation($example1, $example2))
  echo "[$example1] & [$example2] are permutation of each other !!!";
else {
  echo "[$example1] & [$example2] NO !! No permutation !!!";
}



?>
