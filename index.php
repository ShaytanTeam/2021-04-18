<?php
//------------------------------------------------------------------------------
echo("<strong>Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.</strong>");
echo "<br><br>";

$number = 20;
$letter = "labas";
$empty = "";

echo ($number);
echo "<br>";
echo ($letter);
echo "<br>";
echo ($empty);
echo "<br><br>";

//------------------------------------------------------------------------------

echo("<strong>Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.</strong>");
echo "<br><br>";

$alphabet = "abcdefgh";
$dividealphabet = str_split($alphabet);
$dividealphabet = array_slice($dividealphabet, -3);
$dividealphabet = implode($dividealphabet);

echo($dividealphabet);
echo "<br><br>";

//------------------------------------------------------------------------------

echo("<strong>Sukurkite funkciją negative, kuri priimtų vieną argumentą $ skaicius ir išvestų į ekraną atitinkamą neigiamą skaičių. (Įvedame 3, išveda -3).</strong>");
echo "<br><br>";

function Negative($digit){
    return -$digit;
}

$skaicius = 3;

echo Negative($skaicius);
echo "<br><br>";

//------------------------------------------------------------------------------

echo("<strong>Sukurkite funkciją kauliukas, kuri imituotų kauliuko metimą. (Į ekraną atspaudintų atsitiktinį skaičių nuo 1 iki 6); Užuomina: rand();--></strong>");
echo "<br><br>";

function Gamble($a, $b){
    return rand($a,$b);
}

echo Gamble(1,6);
echo "<br><br>";

//------------------------------------------------------------------------------

echo("<strong>Parašykite funkciją pusePloto, kuri priimtų 2 argumentus ir išvestų į ekraną pusę abiejų skaičių sandaugą.</strong>");
echo "<br><br>";

function PusePloto ($a, $b) {
    return $a*$b/2;
}

echo PusePloto(10,5);
echo "<br><br>";

//------------------------------------------------------------------------------

echo("<strong>Sukurkite funkciją 'arEsiDarJaunas', kuri priimtų vieną argumentą amžius ir į ekraną išvestų pranešimą, kiek metų trūksta iki 100. (Pvž.: Iki šimto jūms trūksta 70 metų! Dar gyventi liko daug!</strong>");
echo "<br><br>";

function arEsiDarJaunas($amzius) {
    return ("Iki šimto jūms trūksta " . (100-$amzius) . " metų! Dar gyventi liko daug!");
}
echo arEsiDarJaunas(42);
echo "<br><br>";

//------------------------------------------------------------------------------

echo ("<strong>Sukurkite funkciją, kuri priimtų argumentą farenheitas ir laipsnius iš farenheito konvertuotų į celsijų</strong>");
echo "<br><br>";

function FtoC($fahrenheit) {
    return round(($fahrenheit-32)*5/9);
}

echo FtoC(55);

?>