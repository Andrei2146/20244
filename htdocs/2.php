<?php
$bakelser = array(
    array("namn" => "bulla", "pris" => 1.50, "antal" => 10),
    array("namn" => "kaka", "pris" => 5.00, "antal" => 4),
    array("namn" => "pirog", "pris" => 2.50, "antal" => 12)
);

foreach ($bakelser as $bakelse) {
    echo "Bakelse: " . $bakelse["namn"] . ", Pris: " . $bakelse["pris"] . ", Antal: " . $bakelse["antal"] . "\n";
}

echo "Priset på bulla: " . $bakelser[0]["pris"] . "\n";

echo "Antalet piroger: " . $bakelser[2]["antal"] . "\n";

$antalBakelser = count($bakelser);
echo "Antalet olika bakelser: " . $antalBakelser . "\n";


$totalAntal = 0;
foreach ($bakelser as $bakelse) {
    $totalAntal += $bakelse["antal"];
}
echo "Totala antalet bakelser: " . $totalAntal . "\n";
?>
