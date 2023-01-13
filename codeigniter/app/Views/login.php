<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("templates/header.php"); ?>
    <title>Login</title>
</head>
<body>
<?= session()->getFlashdata('error') ?>
<!--?= validation_list_errors() ?-->
<?=
$password = 'passwort';
$password_hashed = password_hash($password, PASSWORD_DEFAULT);
?>

<div class="container">
    <div class="container-fluid">
        <div class="card text-center border-0 mb-3">
            <div class="text-bg-light p-5">
                <h2>Aufgabenplaner: Login</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <!--form-->
                    <!--?php include ("templates/mail_password.php"); ?-->

                <form method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="mail">E-Mail Adresse</label>
                        <div class="p-1"></div>
                        <input class="form-control" type="text" id="mail" value="<?= set_value('mail') ?>">
                        <br>
                    </div>
                    <div class="p-1"></div>
                    <div class="mb-3">
                        <label for="password">Passwort</label>
                        <input class="form-control" type="password" id="password" value="<?= set_value('password') ?>">
                        <br>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">AGBs und Datenschutzbedingungen gelesen</label>
                        <!-- zu AGBs verlinken?-->
                        <div class="p-2"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Einloggen</button>

                    <div class="form-group">
                        <small id="loginInfo1" class="form-text text-muted">Noch nicht registriert? Registrierung</small>
                        <div class="p-2"></div>
                        <small id="loginInfo2" class="form-text text-muted">Da der Login-Vorgang technisch noch nicht realisiert wurde: </small>
                        <a href="<?= base_url('ProjektPage/index') ?>" class="text-primary text-decoration-none">Überspringen</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>