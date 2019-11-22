<?php

$maten = array();

$nmaten = readline("Hoeveel vrienden heb je?");

if (is_numeric($nmaten)) {
    $maten = array();
} else {
    exit($nmaten . " is geen getal, probeer het opnieuw");
}

for ($i=0; $i < $nmaten; $i++) { 
    $naam = readline("Wat is je naam?");
    $dromen = readline("Wat is je droom?");
    $array = array(
        'naam' => $naam ,
        'droom' => $dromen );
        array_push($maten, $array);
}

foreach ($maten as $maat) {
    print ($maat['naam'] .' ' . "heeft dit als droom:" . ' ');
    print ( $maat['droom'] . PHP_EOL);
}
?>