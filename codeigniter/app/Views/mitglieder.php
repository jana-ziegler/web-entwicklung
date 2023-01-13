<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("templates/header.php"); ?>
    <title>Mitglieder</title>
</head>

<body>
<div class="container">
    <div class="container-fluid">
        <div class="card text-center border-0 mb-3">
            <div class="text-bg-light p-5">
                <h2>Aufgabenplaner: Mitglieder</h2>
            </div>
        </div>
        <div class="row">
            <?php include ("templates/menu.php"); ?>
            <div class="col-8">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">In Projekt</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <!--?php
                        $mitglieder = array(
                                // Erzeuge den ersten Array und speichere einige Werte darin
                                array( 'id' => 1, 'username' => 'kalenborn', 'email' => 'kalenborn@example.com', 'projektID' => 1 ),
                                // Erzeuge den zweiten Array und speichere einige Werte darin
                                array( 'id' => 3, 'username' => 'elena', 'email' => 'elena@example.com', 'projektID' => 1 )
                        );
                        var_dump($mitglieder)
                        ?-->


                        <?php foreach($mitglieder as $mitglied){
                            $forID = "in_projekt_mitglied"?>
                            <tr>
                                <td><?php echo($mitglied[1]) ?></td>
                                <td><?php echo($mitglied[2]) ?></td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="in_projekt_member1">
                                        <label class="form-check-label" for=<?php echo($forID . $mitglied[0]) ?></label>
                                    </div>
                                </td>
                                <?php include ("templates/table_icons.php"); ?>
                            </tr>
                        <?php } ?>

                        <!--tr>
                            <td>Max Mustermann</td>
                            <td>mustermann@muster.de</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="in_projekt_member1">
                                    <label class="form-check-label" for="in_projekt_member1"></label>
                                </div>
                            </td-->
                            <!--?php include ("table_icons.php"); ?>
                        </tr>
                        <tr>
                            <td>Petra Müller</td>
                            <td>petra@müller.de</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="in_projekt_member2">
                                    <label class="form-check-label" for="in_projekt_member2"></label>
                                </div>
                            </td>
                            <-?php include ("table_icons.php"); ?>
                        </tr-->
                    </tbody>
                </table>
                <div class="p-4"></div>
                <h4>Bearbeiten/Erstellen</h4>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="form-control" id="username" type="text" placeholder="Username">
                </div>
                <div class="p-2"></div>
                <?php include ("templates/mail_password.php"); ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="projekt_zugeordnet">
                    <label class="form-check-label" for="projekt_zugeordnet">Dem Projekt zugeordnet</label>
                </div>
                <?php include ("templates/speichern_reset.php"); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
