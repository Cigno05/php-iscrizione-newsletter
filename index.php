<?php

$email = $_POST['inputEmail'] ?? null;

$email_control = false;

if ($email === null) {
    $email_control === null;
} elseif (str_contains($email, '.') && str_contains($email, '@')) {
    $email_control = true;
} else {
    $email_control = false;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Iscrizione Newsletter</title>
</head>

<body>
    <div class="container">

        <form>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Aderisci alla Newsletter</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Inserisci la tua email...">
            </div>

            <button type="submit" class="btn btn-primary">Aderisci</button>
        </form>

        <?php
        if ($email_control = true) {
            ?>

            <div class="mt-4 alert alert-success" role="alert">
                Iscrizione andata a buon fine!!!
            </div>
            <?php
        } elseif ($email_control = false) {
            ?>
            <div class="alert alert-danger" role="alert">
                Email errata!!!
            </div>
            <?php } elseif ($email_control === null) {
                ?>
                <div class="alert alert-primary" role="alert">
                Iscriviti!
            </div>
                <?php
            } ?>

    </div>

</body>

</html>