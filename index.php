<!-- Importazione del file functions all'interno di questo -->
<?php require_once __DIR__ . "/functions.php" ?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong PWD Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <h1 class="text-center my-5">Strong PWD Generator</h1>

    <!-- Form for the User -->
    <form class="form-control" action="" method="GET">

        <label class="label-form" for="pwdLenght">Indica da quanti caratterri comporre la password</label>
        <!-- Input for the lenght of the new password -->
        <input required type="number" name="pwdLenght" min="4">

        <div class="d-block">
            <button class="p-2 mt-3 btn btn-primary btn-lg" type="submit">Gerera</button>
            <button class="p-2 mt-3 btn btn-warning btn-lg" type="reset">Reset</button>
        </div>

    </form>

    <div class="mt-4">
        <!-- Punto in cui chiamerò la funzione per poter generare la nuova password: al primo caricamento della pagina, con la variabile
        utile non ancora settata, mostro un messaggio -->

        <!-- Solo se ho la varibile dalla GET e non è vuota -->
        <?php if(isset($_GET['pwdLenght']) && !empty($_GET['pwdLenght'])) { ?>            
            <span class="fs-4">La nuova password generata è: </span>
            <!-- Chiamo la funzione per generare il dato richiesto -->
            <span class="fw-bold text-danger"> <?= generatePwd($userLenght) ?> </span>
        <?php } else { ?>
            <!-- Mostro il messaggio se non ho disponibile la variabile richiesta all'utente tramite Form -->
            <span>Specifiche di generazione non ancora indicate</span>
        <?php } ?>
    </div>

</div>

    
</body>
</html>