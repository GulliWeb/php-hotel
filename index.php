<?php
// array di hotel di array 
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
    <link rel="stylesheet" href="style.css">
    <!-- Link BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Php array</title>
</head>
<body>
    <!-- Inserisco tabella BOOTSTRAP -->
    <table class="table">
  <thead> 
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOME HOTEL</th>
      <th scope="col">PARCHEGGIO</th>
      <th scope="col">VOTO</th>
      <th scope="col">DISTANZA CENTRO</th>
  </thead>
  <tbody>
    <tr>
    <?php foreach( $hotels as $hotel ): ?> <!-- Ciclo dentro all'array bidimensionale di hotels estraendo ogni giro il relativo hotel in posizione corrispondente all'indice del mio ciclo forEach -->
      <th scope="row">1</th>
      <td><?= $hotel['name']; ?> <!-- Sintassi tag PHP & ECHO --></td>
      <td>
        <!-- Condizione if per verificare se c'è o meno il parcheggio e mostrare dinamicamente in tabella il risultato -->
        <?php if ($hotel['parking']): ?> 
        Parcheggio disponibile
        <?php else: ?>
        Parcheggio non disponibile
        <?php endif ?>   
     </td>
 
      <td><?= $hotel['vote']; ?></td>
      <td><?= $hotel['distance_to_center'] ?>km</td>
    </tr>
    <?php endforeach ?> <!-- Uso end for each al posto delle {} per scrivere blocchi di codice php misti con html per preferenza di visibilità del mio codice. -->
    </tr>
  </tbody>
</table>
</body>
</html>