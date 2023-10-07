<?php

$list = "$text";
 
preg_match_all('/\d+/', $list, $key);
$value1 = $key[0][0];
$value2 = $key[0][1]; 
$value3 = $key[0][2]; 
$value4 = $key[0][3];
$value5 = $key[0][4];
$value6 = $key[0][5];
$value7 = $key[0][6];
$value8 = $key[0][7];
$value9 = $key[0][8];
$value10 = $key[0][9];

$listaa = ["$value1" ,
           "$value2" ,
           "$value3" ,
           "$value4" ];

var_dump($listaa);

foreach ($listaa as $value) {
$strlength = strlen($value);

If (strlen($value) == 16) {
$cc = $value ;}

If (strlen($value) == 3) {
$cvv = $value ;}

If (strlen($value) == 1) {
  $months =      ["1" ,
                  "2" ,
                  "3" ,
                  "4" ,
                  "5" ,
                  "6" ,
                  "7" ,
                  "8" ,
                  "9" ,
                  "10" ,
                  "11" ,
                  "12"];
  
  foreach ($months as $month)
  
If ($value == $month)
{$mes = $value ;} 
}
elseif (strlen($value) <= 2) {
  $months =      ["01" ,
                  "02" ,
                  "03" ,
                  "04" ,
                  "05" ,
                  "06" ,
                  "07" ,
                  "08" ,
                  "09" ,
                  "10" ,
                  "11" ,
                  "12"];
  
  foreach ($months as $month)
  
If ($value == $month)
{$mes = $value ;} 
}
  
If (strlen($value) == 4) {
  $years = [
    "2023" ,
    "2024" ,
    "2025" ,
    "2026" ,
    "2027" ,
    "2028" ,
    "2029" ,
    "2030" ,
    "2031" ,
    "2032" ,
    "2033" ,
    "2034" ,
    "2035" ,
    "2036" ,
    "2037" ,
    "2038" ,
    "2039" ,
    "2040" ,
    "2041" ,
    "2042" ,
    "2043" ,
    "2044" ,
    "2045" ,
    "2046" ,
     "23" ,
     "24" ,
     "25" ,
     "26" ,
     "27" ,
     "28" ,
     "29" ,
     "30" ,
     "31" ,
     "32" ,
     "33" ,
     "34" ,
     "35" ,
     "36" ,
     "37" ,
     "38" ,
     "39" ,
     "40" ,
     "41" ,
     "42" ,
     "43" ,
     "44" ,
     "45" ,
     "46" ];

foreach ($years as $yeara)
If ($value == $yeara)
    {$year = $value ;}
}
elseIf (strlen($value) == 2) {

$yearss = [ "23" ,
     "24" ,
     "25" ,
     "26" ,
     "27" ,
     "28" ,
     "29" ,
     "30" ,
     "31" ,
     "32" ,
     "33" ,
     "34" ,
     "35" ,
     "36" ,
     "37" ,
     "38" ,
     "39" ,
     "40" ,
     "41" ,
     "42" ,
     "43" ,
     "44" ,
     "45" ,
     "46" ];

     foreach ($yearss as $yearaa)
     {if ($value == $yearaa)
        {$year = $value ;}
    }
}
}

$lista = (''.$cc.'|'.$mes.'|'.$year.'|'.$cvv.'');

if ( empty($cc) or empty($mes) or empty($year) or empty($cvv) ) { preg_match_all("/[0-9a-zA-Z]{15,16}[|][0-9a-zA-Z]{1,2}[|][A-ZA-Z0-9a-z]{2,4}[|][0-9a-z]{3,4}/", $list, $key); 
                   $lista = $key[0][0];
                   $i     = explode("|", $lista);
                   $cc    = $i[0];
                   $mes   = $i[1];
                   $year  = $i[2];
                   $cvv   = $i[3];}

?>