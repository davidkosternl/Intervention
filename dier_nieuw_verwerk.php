<?php
// Problemen weergeven

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require Config en Session bestand
require '../config.php';

// formulier verstuurd?
if(isset($_POST['submit'])){
    //formulier uitlezen
    $soortdier = $_POST['soortdier'];
    $naam = $_POST['naam'];
    $leeftijd = $_POST['leeftijd'];
    $geslacht = $_POST['geslacht'];
    $woonplaats = $_POST['woonplaats'];
    $formaat = $_POST['formaat'];
    $oorsprvandier = $_POST['oorsprongvandier'];
    $omschrijving = $_POST['omschrijving'];
    $ras = $_POST['ras'];
    $adoptiekosten = $_POST['adoptiekosten'];
    $redenherplaatsing = $_POST['redenherplaatsing'];
    $gecastreerd = $_POST['gecastreerd'];
    $vacht = $_POST['vacht'];
    $kinderen = $_POST['kindereninformatie'];
    $katten = $_POST['katteninfo'];
    $honden = $_POST['hondeninfo'];
    $konijnen = $_POST['konijneninfo'];
    $alleenzijn = $_POST['alleenzijn'];
    $trappenlopen = $_POST['trappenlopen'];
    $tuinoferf = $_POST['tuinoferf'];
    $beweginginfo = $_POST['bewegingsinformatie'];
    $aanhankelijk = $_POST['aanhankelijk'];
    $gehoorzaam = $_POST['gehoorzaam'];
    $jachtinstinct = $_POST['jachtinstinct'];
    $allemansvriend = $_POST['allemansvriend'];
    $speels = $_POST['speels'];
    $waaks = $_POST['waaks'];
    $paspoort = $_POST['paspoort'];
    $gevaccineerd = $_POST['gevaccineerd'];
    $gechipt = $_POST['gechipt'];
    $lichaam = $_POST['lichamelijkafwijkingen'];
    $medicijnen = $_POST['medicijnen'];
    $speciaalvoer = $_POST['speciaalvoer'];
    $gedragsproblemen = $_POST['gedragsproblemen'];
    $kaninauto = $_POST['kaninauto'];
    $toelichting = $_POST['toelichting'];

} else {
    echo "Er is geen fomulier gevonden";
}
// op dit moment is het aantal fouten 0
$fouten = 0;

// zijn er lege velden?
//if ($soortdier == "" or $naam == "" or $leeftijd == "" or $geslacht == "" or $woonplaats == "" or $formaat == "" or $oorsprvandier == "" or $omschrijving == "" or $ras == "" or $adoptiekosten == "" or $redenherplaatsing == "" or $gecastreerd == "" or $vacht == "" or $toelichting == "") {
//    echo "Niet alle velden zijn ingevuld.<br/>";
//    $fouten++;
//}

if ($fouten == 0) {
    // Query zal toepassen als alle waarde kloppen
    $query = "INSERT INTO dieren (ID_dier, ID_soort, naam, leeftijd, geslacht, woonplaats, formaat, oorsprong_van_dier, omschrijving, ras, adoptiekosten, reden_herplaatsing, gecastreerd, vacht, kindereninfo, hondeninfo, katteninfo, konijneninfo, alleen_zijn, trappen_lopen, tuin_of_erf, bewegingsinfo, aanhankelijk, gehoorzaam, jachtinstinct, allemansvriend, speels, waaks, paspoort, gevaccineerd, gechipt, lichamelijk_afwijkingen, medicijnen, speciaal_voer, gedragsproblemen, kan_in_auto, toelichting)
    VALUES(NULL, '$soortdier', '$naam', $leeftijd, '$geslacht', '$woonplaats', '$formaat', '$oorsprvandier', '$omschrijving', '$ras', $adoptiekosten, '$redenherplaatsing', '$gecastreerd', '$vacht', '$kinderen', '$honden', '$katten', '$konijnen', '$alleenzijn', '$trappenlopen', '$tuinoferf', '$beweginginfo', '$aanhankelijk', '$gehoorzaam', '$jachtinstinct', '$allemansvriend', '$speels', '$waaks', '$paspoort', '$gevaccineerd', '$gechipt', '$lichaam', '$medicijnen', '$speciaalvoer', '$gedragsproblemen', '$kaninauto', '$toelichting')";

//    echo $query;

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        // alles goed verlopen, stuur terug naar homepagina
        header("Location:home.php");
    } else {
        echo "Er is iets mis met SQL Codes";
    }
} else {
    echo "Er is iets fout gegaan...";
}

?>