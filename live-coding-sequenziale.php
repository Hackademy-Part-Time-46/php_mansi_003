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
do {
    $password = readline('Inserisci Password: ');
} while (!$password);

if (strlen(trim($password)) >= 8) {
    echo "Password Corretta hai inserito 8 caratteri o più\n";
} else {
    echo "Password non Corretta, non hai inserito almeno 8 caratteri\n";
}

for ($i = 0; $i < strlen($password); $i++) {
    if (is_numeric($password[$i])) {
        echo "Password Corretta, hai inserito almeno un numero\n";
    } else {
        echo "Password non Corretta, non hai inserito almeno un numero\n";
    }
}

for ($i = 0; $i < strlen($password); $i++) {
    if (ctype_upper($password[$i])) {
        echo "Password Corretta, hai inserito almeno un carattere maiuscolo\n";
    } else {
        echo "Password non Corretta, no\n";
    }
}
