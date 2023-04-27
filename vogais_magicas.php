<?php

function vogaisMagica($value) {

    if ( !str_contains($value, 'a') || !str_contains($value, 'e') ||
         !str_contains($value, 'i') || !str_contains($value, 'o') ||
         !str_contains($value, 'u') ) 
        return 0;

    $quant = 1;  
    
    $vogal = '';        
    for ($i = 0; $i < strlen($value); $i++) {

        $letra = substr($value, $i, 1);

        if ($letra == 'a' && $vogal == '')
          $vogal = 'a';

        if ($vogal == 'a' && $letra == 'e') {
            $quant++;
            $vogal = 'e';
        } else if ($vogal == 'e' && $letra == 'e') {
            $quant++;
        } else if ($vogal == 'e' && $letra == 'i') {
            $quant++;            
            $vogal = 'i';
        } else if ($vogal == 'i' && $letra == 'i') {
            $quant++;
        } else if ($vogal == 'i' && $letra == 'o') {
            $quant++;            
            $vogal = 'o';
        } else if ($vogal == 'o' && $letra == 'o') {
            $quant++;
        } else if ($vogal == 'o' && $letra == 'u') {
            $quant++;            
            $vogal = 'u';
        } else if ($vogal == 'u' && $letra == 'u') {
            $quant++;
        }    

    }    

   return $quant;

}

$s = 'aeiaaioooau'; 
echo '<br> A quantidade é: ' . vogaisMagica($s) . ' ==> Resultado previsto: 8';

$s = 'aeiaaioooaauuaeiou';
echo '<br> A quantidade é: ' . vogaisMagica($s) . ' ==> Resultado previsto: 10';

$s = 'aeiaaioooaa';
echo '<br> A quantidade é: ' . vogaisMagica($s) . ' ==> Resultado previsto: 0';

$s = 'uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae';
echo '<br> A quantidade é: ' . vogaisMagica($s) . ' ==> Resultado previsto: 13';

$s = 'iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea
aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe
uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae';
echo '<br> A quantidade é: ' . vogaisMagica($s) . ' ==> Resultado previsto: 67';

$s = 'ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoee
uiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoa
eaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooa
iuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioi
ouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuue
oeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauaua
euaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauo
ooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu';
echo '<br> A quantidade é: ' . vogaisMagica($s) . ' ==> Resultado previsto: 175';

