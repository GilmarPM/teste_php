<?php

function mostrarMaiorValor($lista, $a, $b, $v) {

    $keys = range(1, count($lista));
    $lista = array_combine($keys, $lista);

    $keys = range(1, count($a));
    $a = array_combine($keys, $a);
    $b = array_combine($keys, $b);
    $v = array_combine($keys, $v);

    for ($i = 1; $i <= count($a); $i++) {
        
        for ($j = 1; $j <= count($lista); $j++) {

            if ($j >= $a[$i] && $j <= $b[$i]) {
                $lista[$j] += $v[$i];
            }

        }

    }   
    
    return max($lista);

}

$lista = array(0,0,0,0,0);

$a = array(1,2,3);
$b = array(2,4,5);
$v = array(10,5,12);
echo 'Resposta do item exemplo => ' . mostrarMaiorValor($lista, $a, $b, $v);

// ----------- //

$a = array(1,2,3);
$b = array(2,5,4);
$v = array(100,100,100);
echo '<br> Resposta do item #1 => ' . mostrarMaiorValor($lista, $a, $b, $v);

// ----------- //

$a = array(2,1,4);
$b = array(3,1,4);
$v = array(603,286,882);
echo '<br> Resposta do item #2 => ' . mostrarMaiorValor($lista, $a, $b, $v);

// ----------- //

$lista = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$a = array(29,9,21,8,15,11,14,5,11,5,16,3,15,29,9,33,30,11,3,29,4,1,12,25,3,12,3,8,8,12);
$b = array(40,26,31,22,23,24,22,22,30,25,24,10,22,35,20,34,38,31,32,35,24,38,18,32,39,37,26,39,11,37);
$v = array(787,219,214,719,102,83,321,300,832,29,577,905,335,254,20,351,564,969,11,267,531,892,825,99,107,131,640,483,194,502);
echo '<br> Resposta do item #3 => ' . mostrarMaiorValor($lista, $a, $b, $v);

// ----------- //

$a = array(19,4,5,19,5,10,21,13,12,15,8,21,20,13,13,15,14,20,10,16,25,5,17,8,22,19,2,21,23,2);
$b = array(28,23,6,33,9,13,39,18,26,30,9,23,21,40,23,15,35,39,18,27,40,9,20,20,37,37,5,29,30,8);
$v = array(419,680,907,582,880,438,294,678,528,261,48,131,7,65,901,914,704,522,379,8,536,190,809,453,298,112,186,184,625,960);
echo '<br> Resposta do item #4 => ' . mostrarMaiorValor($lista, $a, $b, $v);
