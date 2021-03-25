<?php

// Boucle tant que

// while ($chiffre !== 10) {
//     $chiffre = (int)readline('Entrez une heure : ');
// }

// echo 'Bravo vous avez gagné !';

// Boucle for

// for ($i = 0; $i < 10; $i++) {
//     echo "-$i \n";
// }

//Boucle pour chaque
// $notes = [10, 15, 16];

//  for ($i = 0; $i < 3; $i++) {
//     echo '- ' . $notes[$i] . "\n";
//  }

// foreach ($notes as $note) {
//     echo "- $note \n";
// }
// $notes = [10, 15, 16];
// $eleves = [
//     'cm2' => 'Jean',
//     'cm1' => 'Marc'
// ];

// foreach ($eleves as $classe => $eleve) {
//     echo "$eleve est dens la class $classe \n";
// }

// $eleves = [
//     'cm2' => ['Jean', 'Marc', 'Jean', 'Marion'],
//     'cm1' => ['Emilie', 'Marcelin']
// ];

// foreach ($eleves as $classe => $listEleves) {
//     echo "La classe $classe: \n";
//     foreach ($listEleves as $eleve) {
//         echo "- $eleve\n";
//     }
//     echo "\n";
// }

/*
La classe CM2
- Jean
- Marc

La clasee CM1
- Emilie
*/

/*
Demande à la l'utilisatuer de rentrer une note ou de taper "fin"
Chaque note est sauvegardée dans un tableau $notes (pensez $notes[])
A la fin on  affiche le tableau de note sous la forme de liste 
*/
/*
$notes = [];
//$action = null;

//TANT QUE l'utilisateur ne tape pas "fin
while (true) {
    $action = readline('Entrer une nouvelle note (ou \'fin\' pour terminer la saisie) :');
    // On ajoute la note tapée au tableau notes 
    if ($action === 'fin') {
        break;
    } else {
        $notes[] = (int)$action;
    }
}
// POUR CHAQUE note DANS notes
foreach ($notes as $note) {
    // ON AFFICHE "- note"
    echo "-$note \n";
}
*/

/*On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisatuer de rentrer une heure et on lui dira si le magasin est ouvert
*/

//On demande à l'utilisateur de rentrer un creneaux
//On demande l'heure de début
//On demande l'heure de fin
//On vérifie que l'heure de début < l'heure de fin
//On demande si on veut rajouter un nouveau creneaux (o/n)
//On demande à l'utilisateur de rentrer une heure 
//On affiche l'état d'ouverture du magasin

$creneaux = [];

while (true) {
    $debut = (int)readline("Heure de debut : ");
    $fin = (int)readline("Heure de fermerture :");
    if ($debut >= $fin) {
        echo "le creneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture :";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Entrez un nouveau creneau ? (n) :");
        if ($action === 'n') {
            break;
        }
    }
}


//Le magasin est ouvert de 14h à 18h et de 9h à 12h

echo 'Le magasin est ouvert de';
foreach ($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}
/*
$heure = (int)readline("A qu'elle heure voulez vous visiter le magasin ?");
$creauTrouve = false;

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <=$creneau[1]) {
        $creauTrouve = true;
        break;
    }
}

if ($creauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désole le magasin sera ferme :(';
}
*/
