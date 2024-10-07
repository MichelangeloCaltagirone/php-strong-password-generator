<?php
require_once __DIR__ . "/functions.php";

// function randomNum () {
//     return chr(mt_rand(48, 57));
// };
// function randomSpecialChar () {
//     return chr(mt_rand(91, 96));
// };
// function randomLowerAlphabet () {
//     return chr(mt_rand(97, 122));
// };
// function randomUpperAlphabet () {
//     return chr(mt_rand(65, 90));
// };


// function generatePwd ($userLenght){
//     $newPwd = '';

//     $newPwd .= randomNum();
//     $newPwd .= randomSpecialChar();
//     $newPwd .= randomLowerAlphabet();
//     $newPwd .= randomUpperAlphabet();

//     if($userLenght > 4) {

//         $userLenght = $userLenght - 4;

//         for($i = 0; $i < $userLenght; $i++) {

//             $choice = rand(0,3);

//             if($choice == 0) {
//                 $newChar = randomNum();
//             } elseif ($choice == 1) {
//                 $newChar = randomSpecialChar();
//             } elseif ($choice == 2) {
//                 $newChar = randomLowerAlphabet();
//             } else {
//                 $newChar = randomUpperAlphabet();
//             };

//             // futura flag per l'opzione di ripetere o meno caratteri
//             if(true) {
//                 if(!str_contains($newPwd, $newChar)) {
//                     $newPwd .= $newChar;
//                 } else {
//                     $i--;
//                 }
//             } else {
//                 $newPwd .= $newChar;
//             }       
//         };
//     }
//     return str_shuffle($newPwd);
// };

// $userLenght = $_GET['pwdLenght'];

// $pwdGenerated = generatePwd($userLenght);



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
        <input required type="number" name="pwdLenght" min="4">

        <div class="d-block">
            <button class="p-2 mt-3 btn btn-primary btn-lg" type="submit">Gerera</button>
            <button class="p-2 mt-3 btn btn-warning btn-lg" type="reset">Reset</button>
        </div>

    </form>

    <div class="mt-4">

        <span class="fs-4">La nuova password generata è: </span>
        <span class="fw-bold text-danger"> <?= generatePwd($userLenght) ?> </span>

    </div>

</div>

    
</body>
</html>