<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gruppenmatcher</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
</head>

<body>
<div class="login-clean">
    <form method="post" action="database/userExists.php">
        <h2 class="sr-only">Login Formular</h2>
        <div class="illustration"><img src="assets/img/fides-logo.svg"></div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" autofocus></div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">login</button>
            <?php
            if (isset($_GET['userExists'])) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">
            Nutzer oder Passwort inkorrekt!
        </div>";
            }
            ?>
        </div>
        <a href="register.php" class="forgot">registrieren</a></form>

</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>