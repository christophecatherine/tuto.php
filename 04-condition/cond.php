
<?php

// Declare un action 1
$heure = (int)readline('Entrez une heure : ');

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo 'Le magasin est ouvert';
} else {
    echo 'Le magasin est ferme';
}

/*
VRAI && VRAI = VRAI 
VRAI && FAUX = FAUX 
FAUX && FAUX = FAUX 

VRAI || VRAI = VRAI 
VRAI || FAUX = VRAI 
FAUX || FAUX = FAUX
*/

// $action = (int)readline('Entrez votre action : (1: attaquer, 2: defendre, 3: passer mon tour');


// // Declare un action 2

// if ($action === 1) {
//     echo 'J\'attaque !';
// } elseif ($action === 2) {
//     echo 'Je defend';
// } elseif ($action === 2) {
//     echo 'Je ne fais rien';
// } else {
//     echo 'commnde inconnue';
// }

// Declare un action 1

// switch ($action) {
//     case 1:
//         echo 'J\'attaque !';
//         break;
//     case 2:
//         echo 'Je defend !';
//         break;
//     case 3:
//         echo 'je ne fais rien !';
//         break;
//     default:
//         echo 'Commande inconnue';
// }
