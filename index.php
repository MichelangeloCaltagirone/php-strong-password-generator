<?php 

function generatePwd ($userLenght){
    $newPwd = '';
    for($i = 0; $i < $userLenght; $i++) {
        $newPwd .= chr(mt_rand(97, 122));
    };
    return $newPwd;
};

$userLenght = $_GET['pwdLenght'];

$pwdGenerated = generatePwd($userLenght);


?>





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

    <form class="form-control" action="" method="GET">

        <label class="label-form" for="pwdLenght">Indica da quanti caratterri comporre la password</label>
        <input required type="number" name="pwdLenght" min="1">

        <div class="d-block">
            <button class="p-2 mt-3 btn btn-primary btn-lg" type="submit">Gerera</button>
            <button class="p-2 mt-3 btn btn-warning btn-lg" type="reset">Reset</button>
        </div>

    </form>

    <div class="mt-4">

        <span class="fs-4">La nuova password generata è: </span>
        <span class="fw-bold text-danger"> <?= $pwdGenerated ?> </span>

    </div>

</div>

    
</body>
</html>