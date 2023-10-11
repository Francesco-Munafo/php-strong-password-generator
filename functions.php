<?php 

function generatePassword($length)
{
    $repeat = $_GET['repeatCharacter'];
    $addLetters = $_GET['letters'];
    $addNumbers = $_GET['numbers'];
    $addSpecial = $_GET['special'];
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specials = '!$%&/()=@#+';
    $availableCharacters = '';
    $generatedPassword = '';
    

    if ($addLetters){
        $availableCharacters .= $letters;
    }
    if ($addNumbers){
        $availableCharacters .= $numbers;
    }
    if ($addSpecial){
        $availableCharacters .= $specials;
    }







    if (!empty($availableCharacters)) {

        if ($repeat) {

            for ($i = 0; $i < $length; $i++) {
             $index = rand(0, strlen($availableCharacters) - 1);
             $generatedPassword .= $availableCharacters[$index];
         } 
            
        } else {
            
            $generatedPassword .= substr(str_shuffle($availableCharacters), 0, $length);
            
        }
    }
    return $generatedPassword;
}

?>