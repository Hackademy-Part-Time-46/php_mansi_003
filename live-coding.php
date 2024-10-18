<?php

//----ANALISI FUNZIONALE
//Dobbiamo prendere in input una password dall'utente
//Verificare i criteri di validazione:
//// 1) La password deve essere almeno 8 caratteri 
//// 2) Deve contenere almeno un numero 
//// 3) Deve contenere almeno un carattere maiuscolo
//Se il controllo non ha restituito errori, ritorno OK
//Altrimenti segnalo errore genrico
//----
//1) Estrazione
//2) Incapsulamento
//3) Astrazione 

do {
    $status = true;
    $password = readline('Inserisci Password: ');
    if (!(checkLenght($password) && checkNumeric($password) && upperChar($password))) {
        $status = false;
    }
} while (!$status);

echo "Tutto ok";


// $checkLegnt = checkLenght($password);
// $checkNumeric = checkNumeric($password);
// $upperChar = upperChar($password);

// if (!$checkLegnt) {
//     echo "Password non Corretta, non hai inserito almeno 8 caratteri\n";
// } elseif (!$checkNumeric) {
//     echo "Password non Corretta, non hai inserito almeno un carattere numerico\n";
// } elseif (!$upperChar) {
//     echo "Password non Corretta, hai inserito almeno un carattere maiuscolo\n";
// } else {
//     echo "Tutto OK";
// }

// if (checkLenght($password) && checkNumeric($password) && upperChar($password)) {
//     echo "Tutto OK";
// } else {
//     echo "Errore, controlla i requisiti";
// }

function checkLenght($stringa)
{
    if (strlen(trim($stringa)) >= 8) {
        return true;
    }
    return false;
}

function checkNumeric($stringa)
{
    for ($i = 0; $i < strlen($stringa); $i++) {
        if (is_numeric($stringa[$i])) {
            return true;
        }
    }
    return false;
}

function upperChar($stringa)
{
    for ($i = 0; $i < strlen($stringa); $i++) {
        if (ctype_upper($stringa[$i])) {
            return true;
        }
    }
    return false;
}
