<?php
/**
 * Created by PhpStorm.
 * User: Lauri.Suits
 * Date: 14.12.2018
 * Time: 12:09
 */
// muutujate defineerimine
// $muutujaNimi = väärtus;
$taisArv = 3;
$reaalArv = 3.3;
$sone = '3';
$toevaartusTrue = true;
$toevaartusFalse = false;
// väljastame muutujad koos selgitustega
echo 'Täisarv '.$taisArv.'<br>';
echo 'Reealarv '.$reaalArv.'<br>';
echo 'Sõne '.$sone.'<br>';
echo 'true '.$toevaartusTrue.'<br>';
echo 'false '.$toevaartusFalse.'<br>';
echo '<hr>';
// tüübikontroll
echo gettype($sone);
echo '<br>';
$summa = $sone . $sone;
settype($summa, 'string');
echo gettype($summa);
echo 'Summa = '.$summa.'<br>';
?>
<?php

//matemaatilised ja võtdlusoperaatorid
$arv1 = 42;
$arv2 = 11;
echo '<h4>Matemaatilised operaatorid</h4>';
echo $arv1. ' + '.$arv2.' = '.($arv1 + $arv2).'<br>';
echo $arv1. ' - '.$arv2.' = '.($arv1 - $arv2).'<br>';
echo $arv1. ' * '.$arv2.' = '.($arv1 * $arv2).'<br>';
echo $arv1. ' / '.$arv2.' = '.($arv1 / $arv2).'<br>';
echo $arv1. ' % '.$arv2.' = '.($arv1 % $arv2).'<br>';
echo '<h4>Võrdlus operaatorid</h4>';
echo $arv1. ' == '.$arv2.' on '.($arv1 == $arv2).'<br>';
echo $arv1. ' != '.$arv2.' on '.($arv1 != $arv2).'<br>';
echo $arv1. ' <= '.$arv2.' on '.($arv1 <= $arv2).'<br>';
echo $arv1. ' >= '.$arv2.' on '.($arv1 >= $arv2).'<br>';
echo $arv1. ' < '.$arv2.' on '.($arv1 < $arv2).'<br>';
echo $arv1. ' > '.$arv2.' on '.($arv1 > $arv2).'<br>';

