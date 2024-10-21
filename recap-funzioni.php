<?php
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Paul', 'surname' => 'Bach', 'gender' => 'Male'],
    ['name' => 'Rosa', 'surname' => 'Bianchi', 'gender' => 'Female'],
    ['name' => 'Matteo', 'surname' => 'Bianchi', 'gender' => 'Male'],
];



// foreach ($users as $user) {
//     if ($user['gender'] == 'NB') {
//         echo "Buongiorno" . ' ' . $user['name'] . ' ' . $user['surname'] . "\n";
//     } else if ($user['gender'] == 'Male') {
//         echo "Buongiorno Sig" . ' ' . $user['name'] . ' ' . $user['surname'] . "\n";
//     } else {
//         echo "Buongiorno Sig.ra" . ' ' . $user['name'] . $user['surname'] . "\n";
//     }
// }
// ----
foreach ($users as $user) {
    salutaPersona($user);
}

function salutaPersona($persona)
{
    echo controlla_sesso_e_stampa_genere($persona['gender']) .  $persona['name'] . ' ' . $persona['surname'] . "\n";
}

function controlla_sesso_e_stampa_genere($gender)
{
    return match ($gender) {
        'Male' => "Buongiorno Sig.",
        'Female' => "Buongiorno Sig.ra ",
        default => "Buongiorno "
    };
}
