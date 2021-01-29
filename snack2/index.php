<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$matches = [
    [
        'match' =>
        [
            'Casa' => 'Olimpia Milano',
            'Ospiti' => 'Cantù',
            'punteggio' => '89 - 90',
        ]
    ],
    [
        'match' =>
        [
            'Casa' => 'Carpisa Napoli',
            'Ospiti' => 'Energia Trentino',
            'punteggio' => '86 - 58',
        ]
    ],
    [
        'match' =>
        [
            'Casa' => 'Armani Milano',
            'Ospiti' => 'Virtus Bologna',
            'punteggio' => '77 - 82',
        ]
    ],
    [
        'match' =>
        [
            'Casa' => 'De Longhi Treviso',
            'Ospiti' => 'Fortitudo Bologna',
            'punteggio' => '87 - 97',
        ]
    ],
];

for ($i = 0; $i < count($matches); ++$i) { 
    echo "{$matches[$i]['match']['Casa']} - {$matches[$i]['match']['Ospiti']} : {$matches[$i]['match']['punteggio']} <br>";
    
};
?>