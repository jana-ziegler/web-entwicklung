<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("templates/header.php"); ?>
    <title>Aufgaben</title>
</head>

<body>
<div class="container">
    <div class="container-fluid">
        <div class="card text-center border-0 mb-3">
            <div class="text-bg-light p-5">
                <h2>Aufgabenplaner: Aufgaben</h2>
            </div>
        </div>
        <div class="row">
            <?php include ("templates/menu.php"); ?>
            <div class="col-8">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">Aufgabenbezeichnung:</th>
                        <th scope="col">Beschreibung der Aufgabe:</th>
                        <th scope="col">Reiter:</th>
                        <th scope="col">Zuständig:</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>HTML Datei erstellen</td>
                        <td>HTML Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <?php include ("templates/table_icons.php"); ?>

                    </tr>
                    <tr>
                        <td>CSS Datei erstellen</td>
                        <td>CSS Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <?php include ("templates/table_icons.php"); ?>
                    </tr>
                    <tr>
                        <td>PC eingeschaltet</td>
                        <td>PC einschalten</td>
                        <td>Erledigt</td>
                        <td>Petra Müller</td>
                        <?php include ("templates/table_icons.php"); ?>
                    </tr>
                    <tr>
                        <td>Kaffee trinken</td>
                        <td>Kaffee trinken</td>
                        <td>Erledigt</td>
                        <td>Petra Müller</td>
                        <?php include ("templates/table_icons.php"); ?>
                    </tr>
                    <tr>
                        <td>Für die Uni lernen</td>
                        <td>Für die Uni lernen</td>
                        <td>Verschoben</td>
                        <td>Max Mustermann</td>
                        <?php include ("templates/table_icons.php"); ?>
                    </tr>
                    </tbody>
                </table>
                <div class="p-4"></div>
                <h4>Bearbeiten/Erstellen</h4>
                <div class="form-group">
                    <label for="aufgaben_name">Aufgabenbezeichnung:</label>
                    <input class="form-control" id="aufgaben_name" type="text" placeholder="Aufgabe">
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="aufgaben_beschreibung">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control" id="aufgaben_beschreibung" rows="3" placeholder="Beschreibung"></textarea>
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="erstelldatum">Erstellungsdatum:</label>
                    <input class="form-control" id="erstelldatum" type="text" placeholder="01.01.19">
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="fällig">fällig bis:</label>
                    <input class="form-control" id="fällig" type="text" placeholder="01.01.19">
                </div>
                <div class="p-2"></div>
                <div><label for="auswahl_reiter">Zugehöriger Reiter:</label></div>
                <select class="form-control" id="auswahl_reiter">
                    <option>ToDo</option>
                    <option>Erledigt</option>
                    <option>Verschoben</option>
                </select>
                <div class="p-2"></div>
                <div><label for="zuständigkeit">Zuständig:</label></div>
                <select class="form-control" id="zuständigkeit">
                    <option>Max Mustermann</option>
                    <option>Petra Müller</option>
                </select>
                <?php include ("templates/speichern_reset.php"); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
