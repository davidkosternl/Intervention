<?php
// require Config en Session bestand
require '../config.php';

?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Dier toevoegen</title>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <style>
        .container {
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 50px;
        }

        .headerform {
            margin-top: 50px;
        }

        .required {
            color: red;
        }
    </style>
</head>
<body><br>
<div class="headerform">
    <h2 style="text-align: center">Voeg een nieuwe dier toe</h2>
</div>

<div class="container">
    <form action="dier_nieuw_verwerk.php" method="post">
        <table border="0">
            <!-- Soort dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="soortdier" class="form-control-label">Soort dier</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="soortdier" id="soortdier" class="form-control" required>
                        <option selected disabled></option>
                        <option value="1">Hond</option>
                        <option value="2">Kat</option>
                        <option value="3">Konijn</option>
                    </select>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Kies een van de 3 dieren</small>

                </div>
            </div>

            <!-- Naam dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="naam" class="form-control-label">Naam</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="naam" name="naam" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Volledige naam van dier</small>
                </div>
            </div>

            <!-- Leeftijd dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="leeftijd" class="form-control-label">Leeftijd</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="number" id="leeftijd" name="leeftijd" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer alleen een nummer in</small>
                </div>
            </div>

            <!-- Geslacht dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="geslacht" class="form-control-label">Geslacht</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="geslacht" name="geslacht" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Geslacht is GEEN man/vrouw. Lees goed in bestand</small>
                </div>
            </div>

            <!-- Woonplaats dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="woonplaats" class="form-control-label">Woonplaats</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="woonplaats" name="woonplaats" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de woonplaats in</small>
                </div>
            </div>

            <!-- Formaat dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="formaat" class="form-control-label">Formaat</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="formaat" name="formaat" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de formaat in</small>
                </div>
            </div>

            <!-- Oorsprong van dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="oorsprongvandier" class="form-control-label">Oorsprong van dier</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="oorsprongvandier" name="oorsprongvandier" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de oorsprong van dier in</small>
                </div>
            </div><br>
            <h3 style="text-align: center">Omschrijving</h3><br>
            <!-- Omschrijving dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="omschrijving" class="form-control-label">Omschrijving</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="omschrijving" name="omschrijving" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de omschrijving in</small>
                </div>
            </div><br>

            <h3 style="text-align: center">Over het dier</h3><br>
            <!-- ras dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="ras" class="form-control-label">Ras</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="ras" name="ras" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de ras in</small>
                </div>
            </div>

            <!-- ras dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="adoptiekosten" class="form-control-label">Adoptiekosten</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="number" id="adoptiekosten" name="adoptiekosten" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de adoptiekosten in (IN NUMMERS!!)</small>
                </div>
            </div>

            <!-- Reden herplaatsing dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="redenherplaatsing" class="form-control-label">Reden herplaatsing</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="redenherplaatsing" name="redenherplaatsing" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de reden van herplaatsing in</small>
                </div>
            </div><br>

            <h3 style="text-align: center">Algemene info</h3><br>
            <!-- Gecastreerd dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gecastreerd" class="form-control-label">Gecastreerd?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="gecastreerd" id="gecastreerd" class="form-control" required>
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Kies ja of nee</small>
                </div>
            </div>

            <!-- Vacht dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="vacht" class="form-control-label">Vacht</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="vacht" name="vacht" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Voer hier de vacht van het dier in</small>
                </div>
            </div><br>

            <h3 style="text-align: center">Thuissituatie</h3><br>
            <!-- Kinderinfo dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="kindereninformatie" class="form-control-label">Kinderen</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="kindereninformatie" name="kindereninformatie" class="form-control">
                    <small class="form-text text-muted">Voer hier de informatie over kinderen in</small>
                </div>
            </div>

            <!-- Katten info -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="katteninfo" class="form-control-label">Katten</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="katteninfo" id="katteninfo" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Honden info -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hondeninfo" class="form-control-label">Honden</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="hondeninfo" id="hondeninfo" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Konijnen info -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="konijneninfo" class="form-control-label">Konijnen</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="konijneninfo" id="konijneninfo" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Alleen zijn dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alleenzijn" class="form-control-label">Alleen zijn?</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="alleenzijn" name="alleenzijn" class="form-control">
                    <small class="form-text text-muted">Ja/nee vraag met daarbij extra opmerking achter de komma</small>
                </div>
            </div>

            <!-- trappen lopen dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="trappenlopen" class="form-control-label">Trappen lopen?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="trappenlopen" id="trappenlopen" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Tuin of erf dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tuinoferf" class="form-control-label">Tuin of erf?</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tuinoferf" name="tuinoferf" class="form-control">
                    <small class="form-text text-muted">Ja/nee vraag met daarbij extra opmerking achter de komma</small>
                </div>
            </div><br>

            <h3 style="text-align: center">Karakter</h3><br>
            <!-- bewegingsinfo -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="bewegingsinformatie" class="form-control-label">Bewegingsinformatie</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="bewegingsinformatie" name="bewegingsinformatie" class="form-control">
                    <small class="form-text text-muted">Voer hier de informatie over beweging van het dier in</small>
                </div>
            </div>

            <!-- Aanhankelijk dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="aanhankelijk" class="form-control-label">Aanhankelijk?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="aanhankelijk" id="aanhankelijk" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Gehoorzaam dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gehoorzaam" class="form-control-label">Gehoorzaam?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="gehoorzaam" id="gehoorzaam" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Jachtinstinct dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="jachtinstinct" class="form-control-label">Jachtinstinct?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="jachtinstinct" id="jachtinstinct" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Allemansvriend dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="allemansvriend" class="form-control-label">Allemansvriend?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="allemansvriend" id="allemansvriend" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Speels dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="speels" class="form-control-label">Speels?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="speels" id="speels" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Waaks dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="waaks" class="form-control-label">Waaks?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="waaks" id="waaks" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div><br>
            <h3 style="text-align: center">Feiten</h3><br>

            <!-- Paspoort dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="paspoort" class="form-control-label">Paspoort?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="paspoort" id="paspoort" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Gevacinneerd dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gevaccineerd" class="form-control-label">Gevaccineerd?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="gevaccineerd" id="gevaccineerd" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Gechipt dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gechipt" class="form-control-label">Gechipt?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="gechipt" id="gechipt" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Lichamelijk afwijkingen dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="lichamelijkafwijkingen" class="form-control-label">Lichamelijk afwijkingen?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="lichamelijkafwijkingen" id="lichamelijkafwijkingen" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Medicijnen dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="medicijnen" class="form-control-label">Medicijnen?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="medicijnen" id="medicijnen" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Speciaal voer dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="speciaalvoer" class="form-control-label">Speciaal voer?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="speciaalvoer" id="speciaalvoer" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Gedragsproblemen dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gedragsproblemen" class="form-control-label">Gedragsproblemen?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="gedragsproblemen" id="gedragsproblemen" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div>

            <!-- Kan in auto dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="kaninauto" class="form-control-label">Kan in auto?</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="kaninauto" id="kaninauto" class="form-control">
                        <option selected disabled></option>
                        <option value="ja">Ja</option>
                        <option value="nee">Nee</option>
                    </select>
                    <small class="form-text text-muted">Kies ja of nee</small>
                </div>
            </div><br>

            <h3 style="text-align: center">Toelichting</h3><br>
            <!-- Toelichting dier -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="toelichting" class="form-control-label">Toelichting</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="toelichting" name="toelichting" class="form-control" required>
                    <small class="form-text text-muted"><small class="required"><strong>*</strong></small> Toelichting over het dier</small>
                </div>
            </div><br>

            <!-- submit button -->
            <div class="card-footer" style="text-align: center;">
                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button class="btn btn-alert btn-md" onclick="history.back();return false;">Annuleren</button>
            </div>
        </table>
    </form>
</div>


<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>
</body>
