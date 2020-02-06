<?php
$arr = array();
echo "Hoeveel vrieden zal ik vragen om hun droom?" . PHP_EOL;
$vrienden = readline("");


for ($j = 1; $j <= $vrienden; $j++) {
    echo "Wat is jouw naam?" . PHP_EOL;
    $naam = readline("");
    echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;
    $droom = readline("");
    $droomen = array();
    for ($i = 1; $i <= $droom; $i++) {
        echo "Wat is jouw droom?" . PHP_EOL;
        $a = readline("");
        array_push($droomen, $a);
    }
    $arr[$naam] = $droomen;
}

foreach ($arr as $naam => $droomen) {
    foreach ($droomen as $droom) {
        echo "$naam heeft als droom : " . $droom . PHP_EOL;
    }
}
