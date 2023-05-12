<?php
try {

 // uitlezen
$leeftijd = $_POST["leeftijd"];
$Lengtecm = $_POST["Lengte_in_cm"];
$gewicht_bmr = $_POST["Gewicht_in_kg"];
$vrouwradio = $_POST["vrouw"];

// als  de gebruiker de man  inklikt dat wordt de volgende berekening uit gevoerd
if($vrouwradio=="vrouw")
{
   // als de gebruiker vrouw  inklikt dat wordt de volgende berekening uit gevoerd
   $result_BMR = (((9.5634 * $gewicht_bmr) + (1.8496 * $Lengtecm)- (4.6756 * $leeftijd)) + 655.0955);
   // rond af op twee decimal
   $result_BMRr = round($result_BMR, 2);
   // geeft $bmrresult de waarde van BMR-waard is ($vrouwradio) {$result_BMRo} kcal per dag
   $bmrresult = "BMR-waard is ($vrouwradio) {$result_BMRr} kcal per dag ";
}
  else
{
       // als  de gebruiker de man  inklikt dat wordt de volgende berekening uit gevoerd
    $result_BMR = (((13.7516 * $gewicht_bmr) + (5.0033 * $Lengtecm)-(6.755 * $leeftijd)) + 66.473);
      // rond af op twee decimal
    $result_BMRr = round($result_BMR, 2);
       // geeft $bmrresult de waarde van BMR-waard is ($manradio) {$result_BMRo} kcal per dag
    $bmrresult = "BMR-waard is ($vrouwradio) {$result_BMRr} kcal per dag"; 
}

// print de waarde van $bmrresult
  echo "$bmrresult";


   // bij een foute melding
} catch (error $e) 
{
  echo "ER IS IETS FOUTS GEGAAN";
  
}
?>