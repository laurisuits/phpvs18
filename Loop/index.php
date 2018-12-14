<?php
header('Refresh: 1');
//
/*
 * for($jm = alg; $jm <= lopp; $jmn++){
 *        tegevused, mis toimuvad nii kaua kui jmn väärtus ei ole lõppväärtusst saavutanud
 * }
 **/
echo '<h5>Ülessanne 1</h5>';
for($arv = 1; $arv <=10; $arv++){
    echo '<div>'.$arv.'</div>';

}


?>
<style>
    table, tr, td{
        width: 20px;
        border: solid 1px black;
        border-collapse: collapse;
    }
</style>
<?php
echo'<h5>Ülesanne 2</h5>';
echo '<table>';
    for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
        echo '<tr>';
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0, 15));
        }
        echo '<td style="background: '.$varv.'">&nbsp;</td>';
    }
    echo '</table>';
?>
    <style>
        table, tr, td{
            width: 100px;
            border: solid 1px black;
            border-collapse: collapse;
        }
        td{
            width: 50px;
        }
    </style>
<?php
echo'<h5> Ülessanne 3 </h5>';
echo '<table>';
for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= 5; $veeruNumber++){
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0, 15));
        }
        echo '<td style="background: ' . $varv . '">&nbsp;</td>';
    }
    echo '</tr>';

}
echo '</table>';
?>
    <style>
        table, tr, td, th{
            width: 100px;
            border: solid 1px black;
            border-collapse: collapse;
        }
        td{
            width: 50px;
        }
    </style>
<?php

echo'<h5>Ülesanne 4</h5>';

echo '<table>';
echo '<tr>';
for($arv1 = 0; $arv1 <= 10; $arv1++) {
    $txt = ($arv1 == 0) ? '&nbsp;' : $arv1;
    echo '<th style="background: deepskyblue">' . $txt . '</th>';
}
echo '<tr>';
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo'<tr>';
    echo '<th style="background: orangered">'.$arv1.'</th>';
    for($arv2 = 1; $arv2 <= 10; $arv2++){
        echo '<td>'.($arv1 * $arv2).'</td>';
    }
    echo '</tr>';
}

echo '</table>';




?>
<?php
echo '<h5> Ülesanne 5</h5>';
// while
    /*
     * while(tingimus) {
     * tegevused, mis toimuvad nii kaua kui tingimus kehtib
     * }
     *
     **/
    $arv = 148446435744;
    $kordamine = 0;
    while($arv != 0){
        $number = $arv % 10;
        echo 'Number = '.$number.'<br>';
        $arv = $arv / 10;
        echo 'Arv float = '.$arv.'<br>';
        settype($arv, 'int');
        echo 'Arv int = '.$arv.'<br>';
       if($number == 4) $kordamine++;
        echo '<hr>';
}
echo 'Numbr 4 esineb '.$kordamine.'korda<br>';
    ?>
