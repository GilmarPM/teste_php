<?php

   function fib($value) 
   {
      if ($value <= 1)
         return array(0);

      $arrFib = array();
      $arrFib[0] = 0;
      $arrFib[1] = 1;

      for($i = 2; $i < $value; $i++) {
         $arrFib[$i] = $arrFib[$i - 1] + $arrFib[$i - 2];
      }
      
      return $arrFib;
   }

   echo '<pre>';
   echo '(4)  => '; print_r( fib(4)  ); echo '<hr>';  # Caso de teste 01
   echo '(5)  => '; print_r( fib(5)  ); echo '<hr>';  # Caso de teste 02
   echo '(8)  => '; print_r( fib(8)  ); echo '<hr>';  # Caso de teste 03
   echo '(1)  => '; print_r( fib(1)  ); echo '<hr>';  # Caso de teste 04
   echo '(3)  => '; print_r( fib(3)  ); echo '<hr>';  # Caso de teste 05
   echo '(10) => '; print_r( fib(10) );               # Caso de teste 06
   echo '</pre>';
