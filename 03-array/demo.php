<?php
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
//asigne un new prenom
$eleve['prenom'] = 'jean';
//asigne une new note 
$eleve['notes'][3] = 16;
$eleve[] = 'CM2-A';
//declare la valeur eleve
print_r($eleve);

$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [16, 16, 16]

    ],
    [
        'nom' => 'Doe',
        'prenom' => 'Jane',
        'notes' => [16, 16, 16]

    ]
];
//declare la 2eme note de l'eleve
echo $classe[1]['notes'][1];
