<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("templates/header.php"); ?>
    <title>ToDos</title>
</head>
<body>
<!--?php
$mitglieder = array(
        // Erzeuge den ersten Array und speichere einige Werte darin
        array( 'id' => 1, 'username' => 'kalenborn', 'email' => 'kalenborn@example.com', 'projektID' => 1 ),
        // Erzeuge den zweiten Array und speichere einige Werte darin
        array( 'id' => 3, 'username' => 'elena', 'email' => 'elena@example.com', 'projektID' => 1 )
);
var_dump($mitglieder)
?-->
<?php
$card_elements = array(
    array('ToDo:', 'HTML Datei erstellen (Max Mustermann)', 'CSS Datei erstellen (Max Mustermann)'),
    array('Erledigt', 'PC eingeschaltet (Petra Müller)', 'Kaffee trinken (Petra Müller)'),
    array('Verschoben', 'Für die Uni lernen (Max Mustermann)')
);
//var_dump($card_elements);
//echo ($card_elements[0][0]);
?>
<div class="container">
    <div class="container-fluid">
        <div class="card text-center border-0 mb-3">
            <div class="text-bg-light p-5">
                <h2>Aufgabenplaner: ToDos</h2>
            </div>
        </div>
        <div class="row">
            <?php include ("templates/menu.php"); ?>
            <div class="col">
                <div class="row">
                    <?php foreach($card_elements as $card_element){ ?>
                        <div class="col">
                            <div class="card">
                                <div class="card-header"><?php echo($card_element[0]); ?></div>
                                <ul class="list-group">
                                    <?php for($i = 1; $i < count($card_element); $i++){ ?>
                                        <li class="list-group-item"><?php echo($card_element[$i]); ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>

                    <!--li class="list-group-item list-group-flush">HTML Datei erstellen (Max Mustermann)</--li>
                    CSS Datei erstellen (Max Mustermann)>
        <div class="col">
            <div class="card">
                <div class="card-header">Erledigt:</div>
                <ul class="list-group">
                    <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                    <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">Verschoben:</div>
                <ul class="list-group">
                    <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                </ul>
            </div>
        </div-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
