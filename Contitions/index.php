<?php
// tingimuslaused
/*
*if(tingimused) {
tegevused, mis toimivad siis , kui tingimus kehtib
} else { muidu tingimus ei kehti, toimuvad siin kirjutatud tegevust
}
*/
echo '<h5>Ülesanne1</h5>';
$arv = rand(0 ,100);
if($arv % 2 == 0) {
    echo '<div style="color: green">'.$arv.'</div>';
} else {
    echo '<div style="color: red">'.$arv.'</div>';
}

echo '<h5>Ülessanne2</h5>';
$arv = rand(0, 100);
if($arv >= 0 and $arv < 25){
    echo '<div style="color: red">'.$arv.'</div>';
}
else if($arv >= 25 and $arv < 75){
    echo '<div style="color: blue">'.$arv.'</div>';}
else if($arv >= 25 and $arv < 50){
    echo '<div style="color: green">'.$arv.'</div>';}
else if($arv >= 75 and $arv < 100){
        echo '<div style="color: orange">'.$arv.'</div>';}
    else {
        echo '<div style="color: black">'.$arv.'</div>';}

//* tingimuslaused
/*
 * switch (kontroll) {
 *      case vastus:
 *           tegevused, mis andtud case puhul toimivad
 *              break;
 *             deafult;
 *              tegevused, mis toimivad siis kui kõik muu ei sobi
 *              break;
 *
 * }
 */
?>
<style>
    div{
        width: 100px;
        height: 100px;
        border-radius: 50px;
        border: solid 1px black;
    }
</style>
<?php
echo '<h5>Ülesanne 3</h5>';
$aktiivne = 'kollane';
switch ($aktiivne) {
    case 'punane';
        echo '<div style="background-color: red"></div>';
        echo '<div></div>';
        echo '<div></div>';

        break;
    case 'kollane':
        echo '<div></div>';
        echo '<div style="background: orange"></div>';
        echo '<div></div>';
        break;
    case 'roheline':
        echo '<div></div>';
        echo '<div></div>';
        echo '<div style="background: green"></div>';
        break;
    default:
        echo '<div style="background: black"></div>';
        echo '<div style="background: black"></div>';
        echo '<div style="background: black"></div>';
        break;
}

