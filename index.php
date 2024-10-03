<?php
// array di hoteldi array 
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ]
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php array</title>
</head>
<body>
    <ul>
        <?php foreach( $hotels as $hotel ): ?> <!-- Ciclo dentro all'array bidimensionale di hotels estraendo ogni giro il relativo hotel in posizione corrispondente all'indice del mio ciclo forEach -->
        <li>
            <h2>
                <?= $hotel['name']; ?> <!-- Sintassi tag PHP & ECHO -->
            </h2>
            <p><?= $hotel['description']; ?></p>
            <p>Parking: <?= $hotel['parking'] ? 'Yes' : 'No'; ?></p>
            <p>Vote: <?= $hotel['vote']; ?></p>
            <p>Distance to center: <?= $hotel['distance_to_center']; ?> km</p>
        </li>
        <?php endforeach ?> <!-- Uso end for each al posto delle {} per scrivere blocchi di codice php misti con html per preferenza di visibilità del mio codice. -->
    </ul>
</body>
</html>