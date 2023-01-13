<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("templates/header.php"); ?>
    <title>Reiter</title>
</head>

<body>
<!--? php
$reiter = array(
    array('ToDo', 'Erledigt', 'Verschoben'),
    array('Dinge, die erledigt werden müssen', 'Dinge, die erledigt sind', 'Dinge, die später erledigt werden'),
    array('Aktuelles Projekt')
);

var_dump($reiter)
?-->
<div class="container">
    <div class="container-fluid">
        <div class="card text-center border-0 mb-3">
            <div class="text-bg-light p-5">
                <h2>Aufgabenplaner: Reiter</h2>
            </div>
        </div>
        <div class="row">
            <?php include ("templates/menu.php"); ?>
            <div class="col-8">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Beschreibung</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ToDo</td>
                        <td>Dinge, die erledigt werden müssen</td>
                        <?php include ("templates/table_icons.php"); ?>
                    </tr>
                    <tr>
                        <td>Erledigt</td>
                        <td>Dinge, die erledigt sind</td>
                        <?php include ("templates/table_icons.php"); ?>
                    </tr>
                    <tr>
                        <td>Verschoben</td>
                        <td>Dinge, die später erledigt werden müssen</td>
                        <?php include ("templates/table_icons.php"); ?>
                    </tr>
                    </tbody>
                </table>
                <div class="p-4"></div>
                <h4>Bearbeiten/Erstellen</h4>
                <div class="form-group">
                    <label for="reiter_name">Bezeichnung des Reiters:</label>
                    <input class="form-control" id="reiter_name" type="text" placeholder="Reiter">
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="reiter_beschreibung">Beschreibung:</label>
                    <textarea class="form-control" id="reiter_beschreibung" rows="3" placeholder="Beschreibung"></textarea>
                </div>
                <?php include ("templates/speichern_reset.php"); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>

