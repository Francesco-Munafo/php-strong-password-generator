<?php

/*
1- Entriamo in index.php
2- Inviamo i dati su index.php
3- Generare password in base ai dati
4- Reindirizzamento ad un'altra pagina
5- Stampa della password sulla nuova pagina (Password.php)

*/


include './functions.php';





if (isset($_GET['passwordLength'])) {

    $password = generatePassword($_GET['passwordLength']);
}

$password = '';
var_dump($password);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-success">

    <div class="container">
        <h1 class="text-secondary text-center">Strong Password Generator</h1>
        <h2 class="text-white text-center">Genera un password sicura</h2>

        <div class="alert alert-primary" role="alert">
            <?php if ($password !== '') : ?>
                La tua password è <?php echo $password ?>
            <?php else : ?>
                La tua password non è stata generata, verifica di aver inserito una lunghezza nell'input
            <?php endif ?>
        </div>
        <div class="row row-cols-2 bg-light p-5">
            <div class="col d-flex flex-column">

                <p>Inserisci la lunghezza della password:</p>
                <p>Consenti ripetizioni di uno o più caratteri:</p>

            </div>
            <div>

                <form action="" method="GET" class="col d-flex flex-column">
                    <div class="d-flex justify-content-around">
                        <input type="number" name="passwordLength" id="passwordLength">
                    </div>
                    <div class="m-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeatCharacter" id="repeatCharacter" value="1">
                            <label class="form-check-label" for="repeatCharacter">
                                Sì
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeatCharacter" id="repeatCharacter" value="0" checked>
                            <label class="form-check-label" for="repeatCharacter">
                                No
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="letters" name="letters" checked>
                            <label class="form-check-label" for="letters">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="numbers" name="numbers">
                            <label class="form-check-label" for="numbers">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="special" name="special">
                            <label class="form-check-label" for="special">
                                Simboli
                            </label>
                        </div>
                    </div>
                    <div class="m-auto pt-5">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>

                    </div>




                </form>
            </div>
        </div>

    </div>


</body>

</html>