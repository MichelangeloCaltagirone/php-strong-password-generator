<?php
// Solo se ho la variabile della GET settata, la assegno  
if(isset($_GET['pwdLenght'])){
    $userLenght = $_GET['pwdLenght'];
}

// Funzione per generare randomicamente un carattere, partendo da un sottoinsieme del codice ASCII
// Per i Numeri
function randomNum () {
    return chr(mt_rand(48, 57));
};
// Per i Caratteri Speciali
function randomSpecialChar () {
    return chr(mt_rand(91, 96));
};
// Per lettere Minuscole
function randomLowerAlphabet () {
    return chr(mt_rand(97, 122));
};
// Per lettere Maiuscole
function randomUpperAlphabet () {
    return chr(mt_rand(65, 90));
};


function generatePwd ($userLenght){
    $newPwd = '';

    $newPwd .= randomNum();
    $newPwd .= randomSpecialChar();
    $newPwd .= randomLowerAlphabet();
    $newPwd .= randomUpperAlphabet();

    // a questo punto la nuova password è sempre popolata con questi 4 campi (numero, carattere speciale, una maiuscola, una minuscola)

    // Se l'utente ha inserito un numero superiore a 4, devo produrre nuovi caratteri randomici per comporre la password
    if($userLenght > 4) {

        $userLenght = $userLenght - 4;

        for($i = 0; $i < $userLenght; $i++) {

            $choice = rand(0,3);

            if($choice == 0) {
                $newChar = randomNum();
            } elseif ($choice == 1) {
                $newChar = randomSpecialChar();
            } elseif ($choice == 2) {
                $newChar = randomLowerAlphabet();
            } else {
                $newChar = randomUpperAlphabet();
            };

            // futura flag per l'opzione di ripetere o meno caratteri
            if(true) {
                if(!str_contains($newPwd, $newChar)) {
                    $newPwd .= $newChar;
                } else {
                    $i--;
                }
            } else {
                $newPwd .= $newChar;
            }       
        };
    }
    return str_shuffle($newPwd);
};

// 

// $pwdGenerated = generatePwd($userLenght);