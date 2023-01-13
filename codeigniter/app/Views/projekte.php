<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("templates/header.php"); ?>
    <title>Projekte</title>
</head>

<body>
<div class="container">
    <div class="container-fluid">
        <div class="card text-center border-0 mb-3">
            <div class="text-bg-light p-5">
                <h2>Aufgabenplaner: Projekte</h2>
            </div>
        </div>
        <div class="row">
            <?php include ("templates/menu.php"); ?>
            <!-- hier gehts weiter -->
            <div class="col">
                <h4>Projekt auswählen:</h4>
                <select class="form-control">
                    <option>Bitte auswählen!</option>
                    <option>Aktuelles Projekt</option>
                </select>
                <div class="p-2"></div>
                <button type="button" class="btn btn-primary">Auswählen</button>
                <button type="button" class="btn btn-primary">Bearbeiten</button>
                <button type="button" class="btn btn-danger">Löschen</button>
                <div class="p-3"></div>
                <h4>Projekt bearbeiten/erstellen:</h4>
                <div class="form-group">
                    <label for="projekt_name">Projektname:</label>
                    <input class="form-control" id="projekt_name" type="text" placeholder="Projekt">
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="projekt_beschreibung">Projektbeschreibung:</label>
                    <textarea class="form-control" id="projekt_beschreibung" rows="3" placeholder="Beschreibung"></textarea>
                </div>
                <?php include ("templates/speichern_reset.php"); ?>


            </div>
        </div>
    </div>
</div>

</body>
</html>
