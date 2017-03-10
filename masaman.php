<?php
$kokonimi="masa man \n";
echo "Alussa: " . $kokonimi . ".";
function muotoilu ($kokonimi) {
    $nimet = explode(" " , $kokonimi);
    $kokonimi="";
    foreach ($nimet as $arvo){
        $arvo2 = str_split ($arvo);
        strtoupper ($arvo2[0]);
        echo $arvo;
}
    return $kokonimi;
}
echo muotoilu ($kokonimi);

?>