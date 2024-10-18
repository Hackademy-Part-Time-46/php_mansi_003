<?php




//echo "My nan $variabile\n";
// echo "Ciao mi chiamo $variabile\n";
// echo "Ciao mi chiamo $variabile\n";
// echo "Ciao mi chiamo $variabile\n";
// echo "Ciao mi chiamo $variabile\n";


// // function nomeFunzione() {


// // }

//Built-in Fuction
// count($array);
// print_r($variabile);

// $variabile = 'Francesco'; 

// //Custom Function
// function saluta()
// {
//     echo "Ciao mi chiamo Francesco\n";
// }


// saluta();

//Funzioni con passagio di parametro per valore
// $a = 'Francesco';
// $array = ['Rossi'];
// const FRASE = 'my name is ';
// function presentati($string1, $string2)
// {
//     echo "my name is $string1 $string2 \n";
// }

// presentati($a, $array[0]);
// presentati($a, 'Verdi');
// presentati($a, 'Bianchi');

//Funzioni con passagio di parametro per riferimento
// $numero = 8;


// function incrementa(&$ciccio)
// {

//     return  $ciccio++;
// }

// echo "Prima di incrementare è $numero \n";
// incrementa($numero);
// echo "Dopo l'incremento è $numero \n";



// $a  = 10;
// $b  = 11;
// $c  = 2;
// $d  = 5;

//1) Estrazione
//2) Incapsulamento
//3) Astrazione 



// function sum($n1, $n2)
// {
//     echo $n1 + $n2 . "\n";
// }

// sum($a, $b);
// sum($a, $c);
// sum($d, $c);

//Parametro con valoe di default
// function saluta($nome = 'Anonimo')
// {
//     echo "Ciao, mi chiamo $nome";
// }
// saluta();


//Slat Operator 

// $a  = 10;
// $b  = 11;
// $c  = 2;
// $d  = 4;


// function numeri(...$numbers)
// {
//     var_dump($numbers);
// }


// numeri($a, $b, $c, $d, $a);


//PHP 8
//Return Type 

// function sum(): int
// {
//     return 'ciao';
// }
// echo sum();



//Named Arguments

// function saluta($name, $surname)
// {
//     echo "Mi chiamo $name $surname";
// }

// saluta(surname: 'caio', name: 'Tizio');

//Imporatnza del return
// function stampa1()
// {
//     return;
// }

// function stampa2(): void
// {
//     echo 'ciao2';
// }

// stampa1();
// // stampa2();
