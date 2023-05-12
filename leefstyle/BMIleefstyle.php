<?php
try 
{
// wat de gebruiker invult bij de Lengte wordt de waarde van $lengte_meter
$lengte_meter = $_POST["Lengte"];
// wat de gebruiker invult bij de gewicht wordt de waarde van $gewicht_kg
$gewicht_kg = $_POST["gewicht"];
//  de waarde van $totaal $gewicht_kg / ($lengte_meter*$lengte_meter)
$totaal = $gewicht_kg / ($lengte_meter*$lengte_meter);
// rond Totaal op twee decimal 
$result =  round($totaal, 2);
// print BMI-waard is $result <br>
echo "BMI-waard is $result <br>";
 // bij een foute melding
} catch (error $e) 
{
    echo "ER IS IETS FOUTS GEGAAN";
}

?>