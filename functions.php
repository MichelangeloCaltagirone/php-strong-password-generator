<?php 
if(isset($_GET['pwdLenght'])){
    $userLenght = $_GET['pwdLenght'];
}
function randomNum () {
    return chr(mt_rand(48, 57));
};
function randomSpecialChar () {
    return chr(mt_rand(91, 96));
};
function randomLowerAlphabet () {
    return chr(mt_rand(97, 122));
};
function randomUpperAlphabet () {
    return chr(mt_rand(65, 90));
};


function generatePwd ($userLenght){
    $newPwd = '';

    $newPwd .= randomNum();
    $newPwd .= randomSpecialChar();
    $newPwd .= randomLowerAlphabet();
    $newPwd .= randomUpperAlphabet();

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