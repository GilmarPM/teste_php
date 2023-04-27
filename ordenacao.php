<?php

   # Caso de teste @01
   $arr = array(3, 1, 2, 2, 4);
   $arrCount = array_count_values($arr);

   usort($arr, function($b, $a) use ($arrCount) 
   {

      if ($arrCount[$a] == $arrCount[$b]) {
         return strcmp($b, $a);
      }

      return $arrCount[$b] - $arrCount[$a];

   });
   array_reverse($arr);
   echo '(3, 1, 2, 2, 4)<pre>';
   print_r($arr);
   echo '</pre><hr>';


   # Caso de teste #02
   $arr = array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4);
   $arrCount = array_count_values($arr);

   usort($arr, function($b, $a) use ($arrCount) 
   {

      if ($arrCount[$a] == $arrCount[$b]) {
         return strcmp($b, $a);
      }

      return $arrCount[$b] - $arrCount[$a];

   });
   array_reverse($arr); 
   echo '(8, 5, 5, 5, 5, 1, 1, 1, 4, 4)<pre>';
   print_r($arr);
   echo '</pre><hr>';


   # Caso de teste #03
   $arr = array(1, 2, 3, 7, 1, 8, 2);
   $arrCount = array_count_values($arr);

   usort($arr, function($b, $a) use ($arrCount) 
   {

      if ($arrCount[$a] == $arrCount[$b]) {
         return strcmp($b, $a);
      }

      return $arrCount[$b] - $arrCount[$a];

   });
   array_reverse($arr);  
   echo '(1, 2, 3, 7, 1, 8, 2)<pre>';
   print_r($arr);
   echo '</pre>';
