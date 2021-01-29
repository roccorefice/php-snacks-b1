<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array
i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

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