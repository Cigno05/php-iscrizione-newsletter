<?php

// var_dump($_POST);

$email = $_POST['inputEmail'] ?? '';

include_once __DIR__ . '/utilities.php';



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

    <header>
        <?php include_once __DIR__ . '/components/header.php'; ?>
    </header>

    <main>

        <div class="container my-4">

            <form method="POST">
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Aderisci alla Newsletter</label>
                    <input class="form-control" id="inputEmail" name="inputEmail"
                        placeholder="Inserisci la tua email...">
                </div>

                <button type="submit" class="btn btn-primary">Aderisci</button>
            </form>

            <?php if (array_key_exists('inputEmail', $_POST) == false) { ?>
                <!-- <div class="alert alert-primary" role="alert">Iscriviti!</div> -->

            <?php } elseif (controlEmail($email) == true) { ?>
                <div class="mt-4 alert alert-success" role="alert">Iscrizione andata a buon fine!!!</div>

            <?php } elseif (controlEmail($email) == false) { ?>
                <div class="mt-4 alert alert-danger" role="alert">Email errata!!!</div>
            <?php } ?>

        </div>
    </main>

    <footer>
        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </footer>

</body>



</html>
