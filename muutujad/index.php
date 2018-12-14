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
$summa = $sone + $sone;
settype($summa, 'string');
echo gettype($summa);
echo 'Summa = '.$summa.'<br>'; 
